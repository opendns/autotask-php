<?php
namespace ATWS\AutotaskObjects;

class PurchaseApproval extends Entity
{
    // Required
    public $id;
    public $IsApproved;

    // Optional
    public $CostType;
    public $RejectNote;
}
