<?php

namespace App;

use App\Request\CreatePolicy;
use App\Request\UserLogin;
use SoapClient;

class Client
{

    const SERVICE_API_URL = 'http://vzr.paritet-sk.com:7444/Test-Web/hs/InsuranceService?wsdl';

    /** @var SoapClient */
    public $client;
    /** @var string */
    public $token;


    /**
     * Client constructor.
     * @throws \SoapFault
     */
    function __construct()
    {
        if ( ! isset($this->client)) {
            $this->client = new \SoapClient(self::SERVICE_API_URL, array(
                //'features'       => SOAP_SINGLE_ELEMENT_ARRAYS,
                'soap_version'   => 2,
                'location'       => self::SERVICE_API_URL,
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
     * @return $this
     * @throws \ErrorException
     */
    function userLogin(UserLogin $userLogin)
    {
        $response = $this->client->userLogin($userLogin);

        if (is_null($response) && empty($response) && is_null($response->return) && is_null($response->return->userUniqueId)) {
            throw new \ErrorException('Invalid login or password, please provide a correct credentials');
        }

        $this->token = $response->return->userUniqueId;
        return $this;
    }

    function createPolicy(CreatePolicy $createPolicy)
    {
        var_dump($createPolicy);
        $response = $this->client->createPolicy($createPolicy);

        var_dump($this->client->__getLastRequest());

        var_dump($response);

        // return $response;
    }
}


