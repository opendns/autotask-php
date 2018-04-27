<?php
namespace ATWS\AutotaskObjects;

class QuoteTemplate extends Entity
{
    // Required
    public $Name;

    // Optional
    public $Active;
    public $CalculateTaxSeparately;
    public $CreateDate;
    public $CreatedBy;
    public $CurrencyNegativeFormat;
    public $CurrencyPositiveFormat;
    public $DateFormat;
    public $Description;
    public $DisplayCurrencySymbol;
    public $DisplayTaxCategorySuperscripts;
    public $LastActivityBy;
    public $LastActivityDate;
    public $NumberFormat;
    public $PageLayout;
    public $PageNumberFormat;
    public $ShowEachTaxInGroup;
    public $ShowGridHeader;
    public $ShowTaxCategory;
    public $ShowVerticalGridLines;
}
