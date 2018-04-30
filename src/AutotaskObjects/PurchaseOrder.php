<?php
namespace ATWS\AutotaskObjects;

class PurchaseOrder extends Entity
{
    // Required
    public $ShipToAddress1;
    public $ShipToCity;
    public $ShipToName;
    public $ShipToPostalCode;
    public $ShipToState;
    public $Status;
    public $VendorID;

    // Optional
    public $CancelDateTime;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $ExternalPONumber;
    public $Fax;
    public $Freight;
    public $GeneralMemo;
    public $LatestEstimatedArrivalDate;
    public $PaymentTerm;
    public $Phone;
    public $PurchaseForAccountID;
    public $ShippingDate;
    public $ShippingType;
    public $ShipToAddress2;
    public $ShowEachTaxInGroup;
    public $ShowTaxCategory;
    public $SubmitDateTime;
    public $TaxGroup;
    public $UseItemDescriptionsFrom;
    public $VendorInvoiceNumber;
}
