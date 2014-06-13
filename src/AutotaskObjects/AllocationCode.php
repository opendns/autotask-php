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
    public $Name;
    public $Taxable;
    public $TaxCategoryID;
    public $Type;
    public $UseType;
}
