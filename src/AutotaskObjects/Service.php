<?php
namespace ATWS\AutotaskObjects;

class Service extends Entity
{
    // Required
    public $AllocationCodeID;
    public $Name;
    public $PeriodType;
    public $UnitPrice;

    // Optional
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $InvoiceDescription;
    public $IsActive;
    public $LastModifiedDate;
    public $MarkupRate;
    public $ServiceLevelAgreementID;
    public $UnitCost;
    public $UpdateResourceID;
    public $VendorAccountID;
}
