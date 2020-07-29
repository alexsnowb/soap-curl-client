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
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$faker = Faker\Factory::create();

$client           = new Client($_ENV['WSDL_URL']);
$userLoginRequest = new UserLogin($_ENV['WSDL_AGENT_CODE'], $_ENV['WSDL_USERNAME'], $_ENV['WSDL_PASSWORD']);

try {
    $client->userLogin($userLoginRequest);
} catch (ErrorException $e) {
    echo $e->getCode().' | '.$e->getMessage();
}

$createPolicyRequest = new CreatePolicy();
$createPolicyRequest->setUniqueId($client->token);

$insureds = new InsuredListParms([]);

$passport  = new Passport($faker->randomNumber(4), $faker->randomNumber(6),
    $faker->dateTimeBetween('+100 years', '+1000 years')->format('Y-m-d'));
$personAdd = new PersonAddParms($faker->address, $passport);
$insured   = new InsuredPersonParms($faker->dateTimeBetween('-60 years', '-30 years')->format('Y-m-d'), 0, 'EUR', $faker->firstNameMale, $personAdd, 'M', $faker->lastName, 'P005-002');

$insureds->addToInsured($insured);

$passport  = new Passport($faker->randomNumber(4), $faker->randomNumber(6),
    $faker->dateTimeBetween('+1 years', '+10 years')->format('Y-m-d'));
$personAdd = new PersonAddParms($faker->address, $passport);
$insured   = new InsuredPersonParms($faker->dateTimeBetween('-60 years', '-30 years')->format('Y-m-d'), 0, 'EUR', $faker->firstNameFemale, $personAdd, 'F', $faker->lastName, 'P005-002');

$insureds->addToInsured($insured);

$passport  = new Passport($faker->randomNumber(4), $faker->randomNumber(6),
    $faker->dateTimeBetween('+1 years', '+10 years')->format('Y-m-d'));
$personAdd = new PersonAddParms($faker->address, $passport);

$policyHolder = new PolicyHolderParms($faker->dateTimeBetween('-60 years', '-30 years')->format('Y-m-d'), $faker->firstNameMale, true, $personAdd, $faker->email, $faker->phoneNumber, 'M', $faker->lastName);

$createPolicyRequest->policyParms = new PolicyParms('GBR', $insureds, $faker->dateTimeBetween('now', 'now')->format('Y-m-d'),  $faker->dateTimeBetween('+2 days', '+2 days')->format('Y-m-d'), 'officeID2', false,
    $policyHolder, 'S-P005', 'R004', $faker->dateTimeBetween('+1 days', '+1 days')->format('Y-m-d'), 2, '0');
$createPolicyRequest->setActivate(false);
$createPolicyRequest->setCurrency('EUR');

var_dump($createPolicyRequest);

try {
    $createPolicyResponse = $client->createPolicy($createPolicyRequest);
} catch (ErrorException $e) {
    echo $e->getCode().' | '.$e->getMessage();
}

var_dump($createPolicyResponse);




