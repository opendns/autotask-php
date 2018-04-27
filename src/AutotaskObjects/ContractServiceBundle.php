<?php
namespace ATWS\AutotaskObjects;

class ContractServiceBundle extends Entity
{
    // Required
    public $ContractID;
    public $QuoteItemID;
    public $ServiceBundleID;

    // Optional
    public $AdjustedPrice;
    public $InternalCurrencyAdjustedPrice;
    public $InternalCurrencyUnitPrice;
    public $InternalDescription;
    public $InvoiceDescription;
    public $UnitPrice;
}
