<?php

use App\Client;
use App\Request\InsuredPersonParms;
use App\Request\InsuredListParms;
use App\Request\Passport;
use App\Request\PersonAddParms;
use App\Request\PolicyHolderParms;
use App\Request\PolicyParms;
use App\Request\UserLogin;
use App\Request\CreatePolicy;

require_once __DIR__.'/vendor/autoload.php';


$client = new Client();


//$rawClient = new \App\RawClient();
//$rawClient->send();
//
//die();

$userLoginRequest = new UserLogin('0000000001', 'finam', '12345678');

try {
    $client->userLogin($userLoginRequest);
} catch (ErrorException $e) {
    echo $e->getCode().' | '.$e->getMessage();
}

$createPolicyRequest = new CreatePolicy();
$createPolicyRequest->setUniqueId($client->token);

$insureds = new InsuredListParms([]);

$passport = new Passport('6546', '546543', '2025-04-10');
$personAdd = new PersonAddParms('-', $passport);
$insured = new InsuredPersonParms('1982-01-12', 0, 'EUR', 'Александр', $personAdd, 'M', 'Иванов', 'P005-002');

$insureds->addToInsured($insured);

$passport = new Passport('4646', '464646', '2025-04-10');
$personAdd = new PersonAddParms('-', $passport);
$insured = new InsuredPersonParms('1982-01-12', 0, 'EUR', 'Мария', $personAdd, 'F', 'Иванова', 'P005-002');

$insureds->addToInsured($insured);

$passport = new Passport('6546', '546543', '2025-04-10');
$personAdd = new PersonAddParms('-', $passport);


$policyHolder = new PolicyHolderParms('1982-01-12', 'Александр', true,  $personAdd, '-', '-', 'M', 'Иванов');

$createPolicyRequest->policyParms = new PolicyParms('GBR', $insureds, '2020-07-27', '2020-07-31', 'officeID2', false, $policyHolder, 'S-P005', 'R004', '2020-07-30', 2, '0');
$createPolicyRequest->setActivate(false);
$createPolicyRequest->setCurrency('EUR');

$client->createPolicy($createPolicyRequest);




