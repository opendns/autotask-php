 <?php
require_once __DIR__ . '/autoload.php';

use \ATWS;
use \ATWS\AutotaskObjects;

$username = 'INSERT USERNAME HERE';
$password = 'INSERT PASSWORD HERE';

$postAuthOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);

$opts = array('trace' => 1);
$authWsdl = 'https://webservices.autotask.net/atservices/1.5/atws.wsdl';
$client = new ATWS\Client($authWsdl, $opts);
$zoneInfo = $client->getZoneInfo($username);

$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $postAuthOpts);

$ticketId = 225975;
$attachmentInfo = new \ATWS\AutotaskObjects\Query('AttachmentInfo');
$parentidQueryfield = new \ATWS\AutotaskObjects\QueryField('parentid');
$parentidQueryfield->addExpression('equals',$ticketId);
$attachmentInfo->addField($parentidQueryfield);
$attachments = $client->query($attachmentInfo)->queryResult->EntityResults->Entity;
$attachments = (count($attachments) > 1 ? $attachments : [$attachments]);
foreach ($attachments as $attachment)
{
    $result = $client->GetAttachment($attachment);
    $save = file_put_contents($result->GetAttachmentResult->Info->FullPath, $result->GetAttachmentResult->Data);
}
