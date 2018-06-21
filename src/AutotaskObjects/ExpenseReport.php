<?php
namespace ATWS\AutotaskObjects;

class ExpenseReport extends Entity
{
    // Required
    public $Name;
    public $SubmitterID;
    public $WeekEnding;

    // Optional
    public $AmountDue;
    public $ApprovedDate;
    public $ApproverID;
    public $BusinessDivisionSubdivisionID;
    public $CashAdvanceAmount;
    public $DepartmentNumber;
    public $ExpenseTotal;
    public $QuickBooksReferenceNumber;
    public $ReimbursementCurrencyAmountDue;
    public $ReimbursementCurrencyCashAdvanceAmount;
    public $ReimbursementCurrencyID;
    public $RejectionReason;
    public $Status;
    public $Submit;
    public $SubmitDate;
}
