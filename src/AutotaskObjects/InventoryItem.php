<?php
namespace ATWS\AutotaskObjects;

class InventoryItem extends Entity
{
    public $BackOrder;
    public $Bin;
    public $InventoryLocationID;
    public $OnOrder;
    public $Picked;
    public $ProductID;
    public $QuantityMaximum;
    public $QuantityMinimum;
    public $QuantityOnHand;
    public $ReferenceNumber;
    public $Reserved;
}
