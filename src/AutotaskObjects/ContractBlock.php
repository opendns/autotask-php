<?php
namespace ATWS\AutotaskObjects;

class ContractBlock extends Entity
{
    // Required
    public $ContractID;
    public $DatePurchased;
    public $EndDate;
    public $HourlyRate;
    public $Hours;
    public $StartDate;

    // Optional
    public $HoursApproved;
    public $InvoiceNumber;
    public $IsPaid;
    public $PaymentNumber;
    public $PaymentType;
    public $Status;
}
