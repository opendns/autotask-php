<?php
namespace ATWS\AutotaskObjects;

class ContractServiceBundleAdjustment extends Entity
{
    // Required
    public $ContractID;
    public $EffectiveDate;
    public $ServiceBundleID;
    public $UnitChange;

    // Optional
    public $AdjustedUnitPrice;
    public $AllowRepeatServiceBundle;
    public $ContractServiceBundleID;
    public $QuoteItemID;
}
