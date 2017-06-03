<?php
require_once __DIR__ . '/src/autoload.php';

// Edit these variables to get this example to work for you
$username = 'user@demo.com';
$password = '12345';

$authWsdl = 'https://webservices.autotask.net/atservices/1.5/atws.wsdl';

$client = new ATWS\Client($authWsdl);

print_r($validCredentials = $client->validCredentials($username, $password));