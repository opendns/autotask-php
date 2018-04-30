<?php
namespace ATWS\AutotaskObjects;

class PriceListMaterialCode extends Entity
{
    // Required
    public $AllocationCodeID;
    public $CurrencyID;
    public $UsesInternalCurrencyPrice;

    // Optional
    public $UnitPrice;
}
