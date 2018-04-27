<?php
namespace ATWS\AutotaskObjects;

class ExpenseItem extends Entity
{
    // Required
    public $BillableToAccount;
    public $Description;
    public $ExpenseAmount;
    public $ExpenseCategory;
    public $ExpenseDate;
    public $ExpenseReportID;
    public $HaveReceipt;
    public $PaymentType;

    // Optional
    public $AccountID;
    public $Destination;
    public $EntertainmentLocation;
    public $ExpenseCurrencyID;
    public $GLCode;
    public $Miles;
    public $OdometerEnd;
    public $OdometerStart;
    public $Origin;
    public $ProjectID;
    public $PurchaseOrderNumber;
    public $ReceiptAmount;
    public $Reimbursable;
    public $Rejected;
    public $TaskID;
    public $TicketID;
    public $WorkType;
}
