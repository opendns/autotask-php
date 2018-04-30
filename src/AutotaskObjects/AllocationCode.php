<?php
namespace ATWS\AutotaskObjects;

class AllocationCode extends Entity
{
    // Required
    public $Active;
    public $UnitCost;
    public $UnitPrice;

    // Optional
    public $AllocationCodeType;
    public $Department;
    public $Description;
    public $ExternalNumber;
    public $GeneralLedgerCode;
    public $IsExcludedFromNewContracts;
    public $MarkupRate;
    public $Name;
    public $Taxable;
    public $TaxCategoryID;
    public $Type;
    public $UnitCost;
    public $UnitPrice;
    public $UseType;
}
