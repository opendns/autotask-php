<?php
namespace ATWS\AutotaskObjects;

class QuoteItem extends Entity
{
    // Required
    public $IsOptional;
    public $LineDiscount;
    public $PercentageDiscount;
    public $Quantity;
    public $QuoteID;
    public $Type;
    public $UnitDiscount;

    // Optional
    public $AverageCost;
    public $CostID;
    public $Description;
    public $ExpenseID;
    public $HighestCost;
    public $InternalCurrencyLineDiscount;
    public $InternalCurrencyUnitDiscount;
    public $InternalCurrencyUnitPrice;
    public $IsTaxable;
    public $LaborID;
    public $MarkupRate;
    public $Name;
    public $PeriodType;
    public $ProductID;
    public $ServiceBundleID;
    public $ServiceID;
    public $ShippingID;
    public $TaxCategoryID;
    public $TotalEffectiveTax;
    public $UnitCost;
    public $UnitPrice;
}
