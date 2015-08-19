<?php
$options = array(
	'location'=>'http://localhost/test/web-service/server/service.php',
	'uri'=>'http://localhost/'
	);
$soapClient = new SoapClient(null, $options);
echo $soapClient->sum(100,10);