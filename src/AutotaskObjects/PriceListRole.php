<?php
namespace ATWS\AutotaskObjects;

class PriceListRole extends Entity
{
    // Required
    public $CurrencyID;
    public $RoleID;
    public $UsesInternalCurrencyPrice;

    // Optional
    public $HourlyRate;
    public $UnitPrice;
}
