<?php
namespace ATWS\AutotaskObjects;

class ProductVendor extends Entity
{
    // Required
    public $Active;
    public $IsDefault;
    public $ProductID;
    public $VendorID;

    // Optional
    public $VendorCost;
    public $VendorPartNumber;
}
