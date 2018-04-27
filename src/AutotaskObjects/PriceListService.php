<?php
namespace ATWS\AutotaskObjects;

class PriceListService extends Entity
{
    // Required
    public $CurrencyID;
    public $ServiceID;
    public $UsesInternalCurrencyPrice;

    // Optional
    public $UnitPrice;
}
