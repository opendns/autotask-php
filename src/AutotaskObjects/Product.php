<?php
namespace ATWS\AutotaskObjects;

class Product extends Entity
{
    // Required
    public $Active;
    public $Name;
    public $ProductAllocationCodeID;
    public $Serialized;

    // Optional
    public $CostAllocationCodeID;
    public $DefaultVendorID;
    public $Description;
    public $ExternalProductID;
    public $Link;
    public $ManufacturerName;
    public $ManufacturerProductName;
    public $MSRP;
    public $PeriodType;
    public $ProductCategory;
    public $SKU;
    public $UnitCost;
    public $UnitPrice;
    public $VendorProductNumber;
}
