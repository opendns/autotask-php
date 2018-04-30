<?php
namespace ATWS\AutotaskObjects;

class ContractTicketPurchase extends Entity
{
    // Required
    public $ContractID;
    public $DatePurchased;
    public $EndDate;
    public $IsPaid;
    public $PerTicketRate;
    public $StartDate;
    public $TicketsPurchased;

    // Optional
    public $InvoiceNumber;
    public $PaymentNumber;
    public $PaymentType;
    public $Status;
    public $TicketsUsed;
}
