<?php
namespace ATWS\AutotaskObjects;

class ContractServiceBundleUnit extends Entity
{
    // Required
    public $ContractID;
    public $EndDate;
    public $ServiceBundleID;
    public $StartDate;
    public $Units;

    // Optional
    public $ApproveAndPostDate;
    public $ContractServiceBundleID;
    public $Cost;
    public $InternalCurrencyPrice;
    public $Price;
}
