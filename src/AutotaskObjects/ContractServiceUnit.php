<?php
namespace ATWS\AutotaskObjects;

class ContractServiceUnit extends Entity
{
    // Required
    public $ContractID;
    public $EndDate;
    public $ServiceID;
    public $StartDate;
    public $Units;

    // Optional
    public $ApproveAndPostDate;
    public $Cost;
    public $InternalCurrencyPrice;
    public $Price;
    public $VendorAccountID;
}
