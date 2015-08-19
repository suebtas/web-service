<?php

include "library.php";
//$cal = new Calculator();
//echo $cal->sum(20,10);

$options = array(
	'location'=>'http://localhost/test/web-service/server/service.php',
	'uri'=>'http://localhost'
	);
$soapServer = new SoapServer(null, $options);
//$soapServer = new SoapServer("http://localhost/test/web-service/server/create.php");
//$soapServer = new SoapServer("./server.wsdl");

$soapServer->setClass('Calculator');
$soapServer->handle();