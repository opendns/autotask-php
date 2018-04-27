<?php
namespace ATWS\AutotaskObjects;

class SubscriptionPeriod extends Entity
{
    // Required
    public $PeriodCost;
    public $PeriodDate;
    public $PeriodPrice;
    public $SubscriptionID;

    // Optional
    public $PostedDate;
    public $PurchaseOrderNumber;

}
