<?php
namespace ATWS\AutotaskObjects;

class TimeEntry extends Entity
{
    // Required
    public $DateWorked;
    public $ResourceID;
    public $RoleID;
    public $Type;

    // Optional
    public $AllocationCodeID;
    public $BillingApprovalDateTime;
    public $BillingApprovalLevelMostRecent;
    public $BillingApprovalResourceID;
    public $ContractID;
    public $ContractServiceBundleID;
    public $ContractServiceID;
    public $CreateDateTime;
    public $CreatorUserID;
    public $EndDateTime;
    public $HoursToBill;
    public $HoursWorked;
    public $InternalAllocationCodeID;
    public $InternalNotes;
    public $LastModifiedDateTime;
    public $LastModifiedUserID;
    public $NonBillable;
    public $OffsetHours;
    public $ShowOnInvoice;
    public $StartDateTime;
    public $SummaryNotes;
    public $TaskID;
    public $TicketID;
}
