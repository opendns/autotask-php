<?php
namespace ATWS\AutotaskObjects;

class AccountPhysicalLocation extends Entity
{
    // Required
    public $AccountID;
    public $Name;

    // Optional
    public $Active;
    public $Address1;
    public $Address2;
    public $AlternativePhone1;
    public $AlternatePhone2;
    public $City;
    public $CountryID;
    public $Description;
    public $Fax;
    public $Phone;
    public $PostalCode;
    public $Primary;
    public $RoundtripDistance;
    public $State;
}
