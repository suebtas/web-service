<?php
use PHP2WSDL\PHPClass2WSDL;
include "php2wsdlxxx/vendor/autoload.php";
include "library.php";
$class = "Calculator";
$serviceURI = "http://localhost/test/web-service/server/service.php";
$wsdlGenerator = new PHPClass2WSDL($class, $serviceURI);
// Generate thw WSDL from the class adding only the public methods that have @soap annotation.
$wsdlGenerator->generateWSDL(true);

$wsdlXML = $wsdlGenerator->dump();
echo $wsdlXML;