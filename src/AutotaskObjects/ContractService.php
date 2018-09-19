<?php
namespace ATWS\AutotaskObjects;

class ContractService extends Entity
{
    // Required
    public $ContractID;
    public $QuoteItemID;
    public $ServiceID;

    // Optional
    public $AdjustedPrice;
    public $InternalCurrencyAdjustedPrice;
    public $InternalCurrencyUnitPrice;
    public $InternalDescription;
    public $InvoiceDescription;
    public $UnitCost;
    public $UnitPrice;
}
