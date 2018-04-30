<?php
namespace ATWS\AutotaskObjects;

class InventoryItem extends Entity
{
    // Required
    public $InventoryLocationID;
    public $ProductID;
    public $QuantityMaximum;
    public $QuantityMinimum;
    public $QuantityOnHand;

    // Optional
    public $BackOrder;
    public $Bin;
    public $OnOrder;
    public $Picked;
    public $ReferenceNumber;
    public $Reserved;
}
