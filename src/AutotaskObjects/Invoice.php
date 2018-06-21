<?php
namespace ATWS\AutotaskObjects;

class Invoice extends Entity
{
    // Required
    public $InvoiceDateTime;

    // Optional
    public $AccountID;
    public $BatchID;
    public $Comments;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $DueDate;
    public $FromDate;
    public $InvoiceEditorTemplateID;
    public $InvoiceNumber;
    public $InvoiceTotal;
    public $IsVoided;
    public $OrderNumber;
    public $PaidDate;
    public $PaymentTerm;
    public $TaxGroup;
    public $TaxRegionName;
    public $ToDate;
    public $TotalTaxValue;
    public $VoidedByResourceID;
    public $VoidedDate;
    public $WebServiceDate;
}
