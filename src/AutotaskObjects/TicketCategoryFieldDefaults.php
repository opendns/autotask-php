<?php
namespace ATWS\AutotaskObjects;

class TicketCategoryFieldDefaults extends Entity
{
    // Required
    public $TicketCategoryID;

    // Optional
    public $BusinessDivisionSubdivisionID;
    public $Description;
    public $EstimatedHours;
    public $IssueTypeID;
    public $Priority;
    public $PurchaseOrderNumber;
    public $QueueID;
    public $Resolution;
    public $ServiceLevelAgreementID;
    public $SourceID;
    public $Status;
    public $SubIssueTypeID;
    public $TicketTypeID;
    public $Title;
    public $WorkTypeID;
}
