<?php
	include 'SOAP_Service_Secure.php';
	include '../library.php';

	$options = array(
		'location'=>'http://localhost/test/web-service/server/auth/SoapServer.php',
		'uri'=>'http://localhost'
		);

    $Service = new SOAP_Service_Secure('Calculator');

	$Server = new SoapServer(null, $options);

    $Server->setObject($Service);

    $Server->handle();

?>