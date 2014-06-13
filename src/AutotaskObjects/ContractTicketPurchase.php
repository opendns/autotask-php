<?php
namespace ATWS\AutotaskObjects;

class ContractTicketPurchase extends Entity
{
    public $ContractID;
    public $DatePurchased;
    public $EndDate;
    public $InvoiceNumber;
    public $IsPaid;
    public $PaymentNumber;
    public $PaymentType;
    public $PerTicketRate;
    public $StartDate;
    public $Status;
    public $TicketsPurchased;
    public $TicketsUsed;
}
