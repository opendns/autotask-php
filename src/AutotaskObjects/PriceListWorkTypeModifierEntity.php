<?php
namespace ATWS\AutotaskObjects;

class PriceListWorkTypeModifierEntity extends Entity
{
    // Required
    public $CurrencyID;
    public $ModifierType;
    public $UsesInternalCurrencyPrice;
    public $WorkTypeModifierID;

    // Optional
    public $ModifierValue;
}
