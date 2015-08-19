<?php

require "../vendor/autoload.php";
// pull the access creds from another file
require "github_access_token.php";

$url = "https://api.github.com/gists/36028bc52bd125fb8e27/star";

$client = new GuzzleHttp\Client();
$request = $client->createRequest('PUT', $url);
$request->setHeader("Authorization", "token " . $gh_key);
$request->setHeader("Content-Length", "0");
$response = $client->send($request);

echo $response->getStatusCode();
