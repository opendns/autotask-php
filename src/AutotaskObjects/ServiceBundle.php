<?php
namespace ATWS\AutotaskObjects;

class ServiceBundle extends Entity
{
    // Required
    public $AllocationCodeID;
    public $Name;
    public $PeriodType;

    // Optional
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $InvoiceDescription;
    public $IsActive;
    public $LastModifiedDate;
    public $PercentageDiscount;
    public $ServiceLevelAgreementID;
    public $UnitCost;
    public $UnitDiscount;
    public $UnitPrice;
    public $UpdateResourceID;
}
