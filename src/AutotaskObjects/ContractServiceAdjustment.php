<?php
namespace ATWS\AutotaskObjects;

class ContractServiceAdjustment extends Entity
{
    // Required
    public $EffectiveDate;
    public $UnitChange;

    // Optional
    public $AdjustedUnitCost;
    public $AdjustedUnitPrice;
    public $AllowRepeatService;
    public $ContractID;
    public $ContractServiceID;
    public $QuoteItemID;
    public $ServiceID;
}
