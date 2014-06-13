<?php
namespace ATWS\AutotaskObjects;

class PurchaseOrderItem extends Entity
{
    public $InventoryLocationID;
    public $Memo;
    public $OrderID;
    public $ProductID;
    public $Quantity;
    public $SalesOrderID;
    public $UnitCost;
}
