<?php
namespace ATWS\AutotaskObjects;

class PriceListServiceBundle extends Entity
{
    // Required
    public $CurrencyID;
    public $ServiceBundleID;
    public $UsesInternalCurrencyPrice;

    // Optional
    public $UnitPrice;
}
