<?php
namespace ATWS\AutotaskObjects;

class BillingItem extends Entity
{
    // Required
    public $NonBillable;
    public $SubType;
    public $VendorID;

    // Optional
    public $AccountID;
    public $AccountManagerWhenApprovedID;
    public $AllocationCodeID;
    public $BusinessDivisionSubdivisionID;
    public $ContractCostID;
    public $ContractID;
    public $Description;
    public $ExpenseItemID;
    public $ExtendedPrice;
    public $InstalledProductID;
    public $InternalCurrencyExtendedPrice;
    public $InternalCurrencyRate;
    public $InternalCurrencyTaxDollars;
    public $InternalCurrencyTotalAmount;
    public $InvoiceID;
    public $ItemApproverID;
    public $ItemDate;
    public $ItemName;
    public $LineItemFullDescription;
    public $LineItemGroupDescription;
    public $LineItemID;
    public $MilestoneID;
    public $OurCost;
    public $PostedDate;
    public $PostedOnTime;
    public $ProjectCostID;
    public $ProjectID;
    public $PurchaseOrderNumber;
    public $Quantity;
    public $Rate;
    public $RoleID;
    public $ServiceBundleID;
    public $ServiceID;
    public $TaskID;
    public $TaxDollars;
    public $TicketCostID;
    public $TicketID;
    public $TimeEntryID;
    public $TotalAmount;
    public $Type;
    public $WebServiceDate;
}
