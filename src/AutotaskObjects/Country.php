<?php
namespace ATWS\AutotaskObjects;

class Country extends Entity
{
    // Required
    public $AddressFormatID;
    public $DisplayName;

    // Optional
    public $Active;
    public $CountryCode;
    public $InvoiceTemplateID;
    public $IsDefaultCountry;
    public $Name;
    public $QuoteTemplateID;
}
