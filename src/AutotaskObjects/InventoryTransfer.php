<?php
namespace ATWS\AutotaskObjects;

class InventoryTransfer extends Entity
{
    // Required
    public $FromLocationID;
    public $ProductID;
    public $QuantityTransferred;
    public $ToLocationID;

    // Optional
    public $Notes;
    public $SerialNumber;
    public $TransferByResourceID;
    public $TransferDate;
    public $UpdateNote;
}
