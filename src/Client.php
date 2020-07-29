<?php

namespace App;

use App\Request\CreatePolicy;
use App\Request\UserLogin;
use SoapClient;
use SoapFault;

class Client
{
    /** @var SoapClient */
    public $client;
    /** @var string */
    public $token;


    /**
     * Client constructor.
     *
     * @param $wsdl
     *
     * @throws \SoapFault
     */
    function __construct($wsdl)
    {
        if ( ! isset($this->client)) {
            $this->client = new \SoapClient($wsdl, array(
                'soap_version'   => SOAP_1_2,
                'location'       => $wsdl,
                'trace'          => 1,
                'exceptions'     => 0,
                'stream_context' => stream_context_create([
                    'ssl' => array(
                        'verify_peer' => false, 'verify_peer_name' => false
                    )
                ])
            ));
        }

        return $this;
    }

    /**
     * @param  UserLogin  $userLogin
     *
     * @return mixed|null
     * @throws \ErrorException
     */
    function userLogin(UserLogin $userLogin)
    {
        try {
            $response = $this->client->__soapCall('userLogin', [$userLogin]);
        } catch (SoapFault $exception) {
            throw new \ErrorException($exception->getCode() .' | '. $exception->getMessage());
        }


        if (is_null($response) || empty($response) || empty($response->return) || empty($response->return->userUniqueId)) {
            throw new \ErrorException('Invalid login or password, please provide a correct credentials');
        }

        $this->token = $response->return->userUniqueId;
        return $response;
    }

    /**
     * @param  CreatePolicy  $createPolicy
     *
     * @return mixed
     * @throws \ErrorException
     */
    function createPolicy(CreatePolicy $createPolicy)
    {
        $response = $this->client->__soapCall('createPolicy', [$createPolicy]);

        if (is_null($response) && empty($response) && is_null($response->return)) {
            throw new \ErrorException('Invalid request. Error: '. print_r($this->client->__getLastResponse()));
        }

        if (isset($response->return->error) && isset($response->return->error->errCode) & $response->return->error->errCode !=0) {
            throw new \ErrorException('Invalid request. Error: '. print_r($response->return->error));
        }

        return $response;
    }
}


