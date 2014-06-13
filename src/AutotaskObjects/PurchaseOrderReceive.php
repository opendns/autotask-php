<?php
namespace ATWS\AutotaskObjects;

class PurchaseOrderReceive extends Entity
{
    public $PurchaseOrderItemID;
    public $QuantityBackOrdered;
    public $QuantityNowReceiving;
    public $QuantityPreviouslyReceived;
    public $ReceiveDate;
    public $ReceivedByResourceID;
    public $SerialNumber;
}
