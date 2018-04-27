<?php
namespace ATWS\AutotaskObjects;

class ContractRetainer extends Entity
{
    // Required
    public $Amount;
    public $ContractID;
    public $DatePurchased;
    public $EndDate;
    public $StartDate;
    public $Status;

    // Optional
    public $AmountApproved;
    public $DatePaid;
    public $InternalCurrencyAmount;
    public $InternalCurrencyAmountApproved;
    public $InvoiceNumber;
    public $IsPaid;
    public $OverrideHourlyRate;
    public $paymentID;
    public $PaymentNumber;
}
