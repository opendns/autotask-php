<?php
// This is an example script for querying for a User Defined Field
// on a Configuration Item (otherwise known as an Installed Product)
// This example should work for you if you are an OpenDNS customer
// after you enter your username and password below

require_once __DIR__ . '/src/autoload.php';

// Edit these variables to get this example to work for you
$username = '<YOUR USERNAME>';
$password = '<YOUR PASSWORD>';

// End Edit Region

$authWsdl = 'https://webservices.autotask.net/atservices/1.5/atws.wsdl';
$opts = array('trace' => 1);
$client = new ATWS\Client($authWsdl, $opts);
$zoneInfo = $client->getZoneInfo($username);

print_r($zoneInfo);

$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $authOpts);

$query = new ATWS\AutotaskObjects\Query('InstalledProduct');

$package = new ATWS\AutotaskObjects\QueryField('Package', true);
$package->addExpression('Equals', 'Umbrella for MSPs');

$query->addField($package);

// If you want to debug the XML produced by the Query object
// print($query->asXml());

// Print the results of the query
print_r($client->query($query));
