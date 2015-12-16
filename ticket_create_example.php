<?php
// This is an example script for creating a ticket in Autotask
// via the autotask-php client by OpenDNS

require_once __DIR__ . '/src/autoload.php';

// Edit these variables to get this example to work for you
$username = '<YOUR USERNAME>';
$password = '<YOUR PASSWORD>';

$ticket = new ATWS\AutotaskObjects\Ticket();
// Set required fields
$ticket->id= 0;     // Set to 0 for create, or a ticket id for update
$ticket->AccountID = ;
$ticket->DueDateTime = '2015-12-17';
$ticket->Title = 'Test Ticket';
$ticket->Status = 1;
$ticket->Priority = 1;

// Set extra, but helpful, fields
//$ticket->QueueID = ;
//$ticket->AllocationCodeID = ;
//$ticket->TicketType = ;
//$ticket->IssueType = ;
//$ticket->SubIssueType = ;

// End Edit Region

$authWsdl = 'https://webservices.autotask.net/atservices/1.5/atws.wsdl';
$opts = array('trace' => 1);
$client = new ATWS\Client($authWsdl, $opts);
$zoneInfo = $client->getZoneInfo($username);

$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $authOpts);

print_r($client->create($ticket));
