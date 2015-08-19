<?php

class AuthHeader
{
    public $username;
    public $password;    
    
}

// -----
$options = array(
	'location'=>'http://localhost/test/web-service/server/auth/SoapServer.php',
	'uri'=>'http://localhost',
	'exceptions' => true
	);
$Client = new SoapClient(null, $options);

// -----

$AuthHeader = new AuthHeader();

$AuthHeader->username = 'foo';
$AuthHeader->password = 'bar';

$Headers[] = new SoapHeader('http://localhost', 'AuthHeader', $AuthHeader);

$Client->__setSoapHeaders($Headers);

// -----

//$Result = $Client->sum(1,2);
try{
	echo $Client->test();
	//$Result = $Client->sum(1,2);
	//echo $Result;
}catch(Exception $e){
	echo 'error';
}

?>