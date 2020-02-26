# Introduction

autotask-php is designed to make it easier to interact
with the Autotask Web Services API by providing interfaces
that actually match the official documentation.

All objects that are exposed by Autotask have wrapper classes
located in the `src/AutotaskObjects` folder.

If you find any bugs, or have feature requests, please file
an issue in [GitHub](https://github.com/opendns/autotask-php) or open a
pull request.

#### This client is under _active development_, and therefore has no stable version.

# Installation

## Composer
Ensure that composer is [installed on your machine](https://getcomposer.org/doc/00-intro.md).
You will need to create a `composer.json` file in the root
directory of your application.
```json
{
    "require": {
        "opendns/autotask-php": "dev-master"
    }
}
```

Once the `composer.json` file is created, follow these steps
from composer to [install the autotask-php package](https://getcomposer.org/doc/00-intro.md#using-composer).

Composer creates its own autoloader. Include
`vendor/autoload.php` in your application config file and
you will have full access to the autotask-php client.


## Manual

1. download the zip or clone the git repo from [GitHub](https://github.com/opendns/autotask-php)
2. if necessary, extract the zip to your desired location
3. add a ```require_once``` call to include `src/autoload.php`
   to get access to the Client.


# Usage

Supports both current versions of the Autotask's API; v1.6 and v1.5.

## Version 1.6

Starting with version 1.6, Autotask only allows 'API User' type and all calls must include an integration code in the header. Please refer to Autotask's Web Services documentation in Autotask's help center for setting up the API User account and generating the integration code.

You can set your WSDL file or use the auto detect (https://webservices.autotask.net/atservices/1.6/atws.wsdl)

You can set the integration code with you instantiate your client or after the fact. On every API call, the client will check if the version is 1.6 and confirm the integration code is set (except on getZoneInfo()). If one is not found, it will throw and error.

### Fetch your zone WSDL and setting your integration code (instantiation process)

```php
// This code is designed to find your exact wsdl location.
// If you already know your zone's wsdl URL, you can skip
// this step.
$username = 'admin@happymsp.biz';
$password = 'VeryVeryVeryVerySecurePassword';
$authWsdl = 'https://webservices.autotask.net/atservices/1.6/atws.wsdl';
$integrationCode = '27-character ID';
$opts = array('trace' => 1);
$client = new ATWS\Client($authWsdl, $opts, $integrationCode);
$zoneInfo = $client->getZoneInfo($username);

print_r($zoneInfo);
```

### Fetch your zone WSDL then setting your integration code

```php
// This code is designed to find your exact wsdl location.
// If you already know your zone's wsdl URL, you can skip
// this step.
$username = 'admin@happymsp.biz';
$password = 'VeryVeryVeryVerySecurePassword';
$authWsdl = 'https://webservices.autotask.net/atservices/1.6/atws.wsdl';
$opts = array('trace' => 1);
$client = new ATWS\Client($authWsdl, $opts);
$integrationCode = '27-character ID';
$client->setIntegrationCode($integrationCode);
$zoneInfo = $client->getZoneInfo($username);

print_r($zoneInfo);
```

## Version 1.5
Any Autotask user account with the 'Can login to Web Services API' permission can connect via this version of the API.

You can set your WSDL file or use the auto detect (https://webservices.autotask.net/atservices/1.5/atws.wsdl)

### Fetch your zone WSDL

```php
// This code is designed to find your exact wsdl location.
// If you already know your zone's wsdl URL, you can skip
// this step.
$username = 'admin@happymsp.biz';
$password = 'VeryVeryVeryVerySecurePassword';
$authWsdl = 'https://webservices.autotask.net/atservices/1.5/atws.wsdl';
$opts = array('trace' => 1);
$client = new ATWS\Client($authWsdl, $opts);
$zoneInfo = $client->getZoneInfo($username);

print_r($zoneInfo);
```

## Resource Impersonation
Your API-only user can impersonate resources on Account Notes, Contract Notes, Project Notes, Task Notes, Ticket Notes, and Time Entries. So, when notes and time entries are added to Autotask by users using an integration with Autotask, the user's name (not the API user's) appears as the author.

### Requirements
* Integration users need to provide the <ImpersonateAsResourceID> tag in the AutotaskIntegrations SOAP header.
* Both the integration user and the API-only user must have security level permission to add or edit the time entry.
* The integration user's security level must allow the resource to be impersonated.
* The API-only user's security level must allow impersonation on the entity type.

For more details on impersonation security levels, refer to [Resource Impersonation]( https://ww5.autotask.net/help/Content/AdminSetup/1FeaturesSettings/ResourcesUsers/Security/System_Security_Settings.htm#Resource_Impersonation).

When calling the setResourceImpersonation() method. It will replace the existing SOAP header with the integration code and the resource to impersonation. Allowing you to change the resource impersonation without the need of instantiating a new client.

When the instantiating the client, if you did not include the integration code and you call the setResourceImpersonation() method, it would throw an error 'Integration code required when using resource impersonation.' To resolve, call method setIntegrationCode('27-character ID') to set the integration code then you can call setResourceImpersonation().

```php
$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$integrationCode = '27-character ID';
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($authWsdl, $authOpts, $integrationCode);

// Instantiate an Account Note object and assign values
$accountNote = new ATWS\AutotaskObjects\AccountNote('Contact');
$accountNote->AccountID = 12345678;
$accountNote->ActionType = 1;
$accountNote->AssignedResourceID = 12345678;
$accountNote->EndDateTime = "2019-01-28T18:18:00";
$accountNote->id = 0;
$accountNote->Note = "Resource Impersonation Test";
$accountNote->StartDateTime = "2019-01-28T18:18:00";
$result = $client->setResourceImpersonation(87654321)->create($accountNote);

// Print the results of the account note creation
print_r($result);
```

Or you can call the setResourceImpersonation() method then call create() or update().

```php
$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$integrationCode = '27-character ID';
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($authWsdl, $authOpts, $integrationCode);
$client->setResourceImpersonation(87654321);

// Instantiate an Account Note object and assign values
$accountNote = new ATWS\AutotaskObjects\AccountNote('Contact');
$accountNote->AccountID = 12345678;
$accountNote->ActionType = 1;
$accountNote->AssignedResourceID = 12345678;
$accountNote->EndDateTime = "2019-01-28T18:18:00";
$accountNote->id = 0;
$accountNote->Note = "Resource Impersonation Test";
$accountNote->StartDateTime = "2019-01-28T18:18:00";
$result = $client->create($accountNote);

// Print the results of the account note creation
print_r($result);
```

## Search Contacts
```php
$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $authOpts);

// Instantiate a Query object, designed to make complex
// queries simple.
$query = new ATWS\AutotaskObjects\Query('Contact');

$firstnameField = new ATWS\AutotaskObjects\QueryField('firstname');
$firstnameField->addExpression('Equals', 'Steve');

$query->addField($firstnameField);

// If you want to debug the XML produced by the Query object
// print($query->asXml());

// Print the results of the query
print_r($client->query($query));
```

## More Detailed Queries
We have provided support for some of the more detailed
queries that you may need to execute. A given query can have
multiple `QueryField` objects and a given `QueryField` can
have multple `QueryFieldExpression` objects.

```php
$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $authOpts);

// Instantiate a Query object, designed to make complex
// queries simple.
$query = new ATWS\AutotaskObjects\Query('Contact');

// Add a QueryField with multiple expressions
$firstnameField = new ATWS\AutotaskObjects\QueryField('firstname');
// Multiple Expressions in a single Field results in a logical OR
$firstnameField->addExpression('BeginsWith', 'S');
$firstnameField->addExpression('Contains', 'e');

$query->addField($firstnameField);

$lastnameField = new ATWS\AutotaskObjects\QueryField('lastname');
$lastnameField->addExpression('BeginsWith', 'M');

// Add a second QueryField -- multiple Fields are ANDed together
$query->addField($lastnameField);

// print($query->asXml());
print_r($client->query($query));
```

## _Really_ Detailed Queries
Need access to extremely detailed queries that involce using
Conditions? Support for condition queries have been added to
the autotask-php client. The important thing to note when
using conditions is that order matters. Any `QueryCondition`
or `QueryField` added will be serialized to XML in that order.

`QueryCondition` objects can include other `QueryCondition`
objects, as well as `QueryField` objects. The example below
attempts to showcase the possibilities of using a
`QueryCondition` object.

```php
$authOpts = array(
    'login' => $username,
    'password' => $password,
    'trace' => 1,   // Allows us to debug by getting the XML requests sent
);
$wsdl = str_replace('.asmx', '.wsdl', $zoneInfo->getZoneInfoResult->URL);
$client = new ATWS\Client($wsdl, $authOpts);

// Instantiate a Query object, designed to make complex
// queries simple.
$query = new ATWS\AutotaskObjects\Query('Contact');

// QueryConditions default to logical ANDs. If you want to
// using logcal OR, specify it when creating the QueryCondition
$wrappingCondition = new ATWS\AutotaskObjects\QueryCondition('OR');
$conditionOne = new \ATWS\AutotaskObjects\QueryCondition();
$conditionTwo = new \ATWS\AutotaskObjects\QueryCondition('OR');

$firstField = new ATWS\AutotaskObjects\QueryField('firstname');
$firstField->addExpression('Equals', 'Joe');

$secondField = new ATWS\AutotaskObjects\QueryField('firstname');
$secondField->addExpression('Equals', 'Larry');

$thirdField = new ATWS\AutotaskObjects\QueryField('lastname');
$thirdField->addExpression('Equals', 'Brown');

$fourthField = new ATWS\AutotaskObjects\QueryField('firstname');
$fourthField->addExpression('Equals', 'Mary');

$fifthField = new ATWS\AutotaskObjects\QueryField('lastname');
$fifthField->addExpression('Equals', 'Smith');

$sixthField = new ATWS\AutotaskObjects\QueryField('city');
$sixthField->addExpression('NotEqual', 'Albany');

// AND together the 2nd and 3rd fields into a condition
$conditionOne->addField($secondField);
$conditionOne->addField($thirdField);

// AND together the 4th and 5th fields into a condition
$conditionTwo->addField($fourthField);
$conditionTwo->addField($fifthField);

// OR together the 1st Condition and 2nd Condition
// NOTE: This is an OR because of how $conditionTwo
// was defined
$wrappingCondition->addCondition($conditionOne);
$wrappingCondition->addCondition($conditionTwo);


// Add the 1st Field to the Query
$query->addField($firstField);

// OR together the 1st Field and the wrapping Condition
// NOTE: This is an OR because of how $wrappingCondition
// was defined.
$query->addCondition($wrappingCondition);

// AND together the 6th Field and (1st Field OR wrapping Condition)
$query->addField($sixthField);

// If you want to debug the XML produced by the Query object
// print($query->asXml());

// Print the results of the query
print_r($client->query($query));
```

Since the above example is so complex, we have included the
"SQL Equivalent" conditional, and the XML that is produced by the
Client.
```sql
(
    firstname = 'Joe'
    OR (
        (firstname = 'Larry' AND lastname = 'Brown')
        OR
        (firstname = 'Mary' AND lastname = 'Smith')
    )
)
AND city <> 'Albany'
```
```xml
<queryxml>
   <entity>Contact</entity>
   <query>
      <field>
         firstname
         <expression op="Equals">Joe</expression>
      </field>
      <condition operator="or">
         <condition>
            <field>
               firstname
               <expression op="Equals">Larry</expression>
            </field>
            <field>
               lastname
               <expression op="Equals">Brown</expression>
            </field>
         </condition>
         <condition operator="or">
            <field>
               firstname
               <expression op="Equals">Mary</expression>
            </field>
            <field>
               lastname
               <expression op="Equals">Smith</expression>
            </field>
         </condition>
      </condition>
      <field>
         city
         <expression op="NotEqual">Albany</expression>
      </field>
   </query>
</queryxml>
```
