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

## Fetch your zone WSDL

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
