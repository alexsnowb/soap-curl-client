<?php

namespace App;

/**
 * Assembles and dispatches the SOAP request body XML and returns the
 * Response body XML from the vendor API.
 */
class RawClient
{

    public function send()
    {

        $data = <<<'XML'
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns="http://paritet-sk.com/hs/InsuranceService">
   <soapenv:Header/>
   <soapenv:Body>
      <createPolicy>
         <uniqueId>l1m8faiVdYsR7c4C4IX7BQojbpU9</uniqueId>
  <policyParms>
	<destination>GBR</destination>
	<insureds>
		<insured>
			<personAdd>
				<address>-</address>
				<passport>
					<series>6546</series>
					<number>546543</number>
					<issueDate>2025-04-10</issueDate>
				</passport>
			</personAdd>
			<sex>M</sex>
			<birthDate>1982-01-12</birthDate>
			<tariff>P005-002</tariff>
			<cancellationAmount>0</cancellationAmount>
			<currency>EUR</currency>
			<name>Александр</name>
			<surname>Осипов</surname>
			<supplementaries/>
		</insured>
		<insured>
			<personAdd>
				<address>-</address>
				<passport>
					<series>5646</series>
					<number>654654</number>
					<issueDate>2025-04-10</issueDate>
				</passport>
			</personAdd>
			<sex>F</sex>
			<birthDate>2020-01-12</birthDate>
			<tariff>P005-002</tariff>
			<cancellationAmount>0</cancellationAmount>
			<currency>EUR</currency>
			<name>Мария</name>
			<surname>Осипова</surname>
			<supplementaries/>
		</insured>
	</insureds>
	<issuedOn>2020-07-22</issuedOn>
	<startDay>2020-07-30</startDay>
	<lastDay>2020-07-31</lastDay>
	<officeID>officeID2</officeID>
	<organized>false</organized>
	<policyHolder>
		<birthDate>1982-01-12</birthDate>
		<email>-</email>
		<name>Александр</name>
		<isPerson>true</isPerson>
		<city />
		<country />
		<personAdd>
			<address>-</address>
			<passport>
				<series>6546</series>
				<number>546543</number>
				<issueDate>2025-04-10</issueDate>
			</passport>
		</personAdd>
		<phone>-</phone>
		<sex>M</sex>
		<surname>Осипов</surname>
	</policyHolder>
	<productCode>S-P005</productCode>
	<regionCode>R004</regionCode>
	<totalDays>2</totalDays>
	<transport>O</transport>
</policyParms>
<activate>false</activate>
<currency>EUR</currency>
      </createPolicy>
   </soapenv:Body>
</soapenv:Envelope>
XML;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://vzr.paritet-sk.com:7444/Test-Web/hs/InsuranceService");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml; charset=utf-8", "Content-Length: " . strlen($data)));
        $output = curl_exec($ch);
        curl_close($ch);

        var_dump($output);
    }
}
