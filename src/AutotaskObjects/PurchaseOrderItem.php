<?php
namespace ATWS\AutotaskObjects;

class PurchaseOrderItem extends Entity
{
    // Required
    public $InventoryLocationID;
    public $OrderID;
    public $ProductID;
    public $Quantity;

    // Optional
    public $ContractID;
    public $CostID;
    public $EstimatedArrivalDate;
    public $Memo;
    public $ProjectID;
    public $SalesOrderID;
    public $TicketID;
    public $UnitCost;
}
