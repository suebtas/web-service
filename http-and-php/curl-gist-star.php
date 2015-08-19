<?php

// include credentials from an external file
include("github_access_token.php");

$curl = curl_init("https://api.github.com/gists/36028bc52bd125fb8e27/star");

// set some options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array("User-Agent: php-curl",
    "Authorization: token " . $gh_key,
    "Content-Length: 0"));

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");

// make the request
$response = curl_exec($curl);

