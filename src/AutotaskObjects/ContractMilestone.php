<?php
namespace ATWS\AutotaskObjects;

class ContractMilestone extends Entity
{
    // Required
    public $Amount;
    public $ContractID;
    public $DateDue;
    public $IsInitialPayment;
    public $Status;
    public $Title;

    // Optional
    public $AllocationCodeID;
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $InternalCurrencyAmount;
}
