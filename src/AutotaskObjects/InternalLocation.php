<?php
namespace ATWS\AutotaskObjects;

class InternalLocation extends Entity
{
    // Required
    public $Name;

    // Optional
    public $AdditionalAddressInfo;
    public $Address1;
    public $Address2;
    public $City;
    public $Country;
    public $HolidaySetId;
    public $IsDefault;
    public $PostalCode;
    public $State;
    public $TimeZone;
}
