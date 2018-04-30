<?php
namespace ATWS\AutotaskObjects;

class Subscription extends Entity
{
    // Required
    public $EffectiveDate;
    public $ExpirationDate;
    public $InstalledProductID;
    public $MaterialCodeID;
    public $PeriodPrice;
    public $PeriodType;
    public $Status;
    public $SubscriptionName;

    // Optional
    public $Description;
    public $PeriodCost;
    public $PurchaseOrderNumber;
    public $TotalCost;
    public $TotalPrice;
    public $VendorID;
}
