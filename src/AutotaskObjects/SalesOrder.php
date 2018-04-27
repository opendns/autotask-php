<?php
namespace ATWS\AutotaskObjects;

class SalesOrder extends Entity
{
    // Required
    public $AccountID;
    public $Contact;
    public $OpportunityID;
    public $OwnerResourceID;
    public $SalesOrderDate;
    public $Status;
    public $Title;

    // Optional
    public $AdditionalBillToAddressInformation;
    public $AdditionalShipToAddressInformation;
    public $BillToAddress1;
    public $BillToAddress2;
    public $BillToCity;
    public $BillToCountry;
    public $BillToCountryID;
    public $BillToPostalCode;
    public $BillToState;
    public $PromisedDueDate;
    public $ShipToAddress1;
    public $ShipToAddress2;
    public $ShipToCity;
    public $ShipToCountry;
    public $ShipToCountryID;
    public $ShipToPostalCode;
    public $ShipToState;
}
