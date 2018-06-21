<?php
namespace ATWS\AutotaskObjects;

class ContractCost extends Entity
{
    // Required
    public $ContractID;
    public $CostType;
    public $DatePurchased;
    public $Name;
    public $UnitQuantity;

    // Optional
    public $AllocationCodeID;
    public $BillableAmount;
    public $BillableToAccount;
    public $Billed;
    public $ContractServiceBundleID;
    public $ContractServiceID;
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $ExtendedCost;
    public $InternalCurrencyBillableAmount;
    public $InternalCurrencyUnitPrice;
    public $InternalPurchaseOrderNumber;
    public $ProductID;
    public $PurchaseOrderNumber;
    public $Status;
    public $StatusLastModifiedBy;
    public $StatusLastModifiedDate;
    public $UnitCost;
    public $UnitPrice;
}
