<?php
namespace ATWS\AutotaskObjects;

class PriceListProduct extends Entity
{
    // Required
    public $CurrencyID;
    public $ProductID;

    // Optional
    public $UsesInternalCurrencyPrice;
    public $UnitPrice;
}
