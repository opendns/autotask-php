<?php
namespace ATWS\AutotaskObjects;

class PurchaseOrderReceive extends Entity
{
    // Required
    public $PurchaseOrderItemID;
    public $QuantityNowReceiving;

    // Optional
    public $QuantityBackOrdered;
    public $QuantityPreviouslyReceived;
    public $ReceiveDate;
    public $ReceivedByResourceID;
    public $SerialNumber;
}
