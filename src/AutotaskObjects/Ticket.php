<?php
namespace ATWS\AutotaskObjects;

class Ticket extends Entity
{
    // Required
    public $AccountID;
    public $DueDateTime;
    public $Priority;
    public $Status;
    public $Title;

    // Optional
    public $AEMAlertID;
    public $AllocationCodeID;
    public $AssignedResourceID;
    public $AssignedResourceRoleID;
    public $ChangeApprovalBoard;
    public $ChangeApprovalStatus;
    public $ChangeApprovalType;
    public $ChangeInfoField1;
    public $ChangeInfoField2;
    public $ChangeInfoField3;
    public $ChangeInfoField4;
    public $ChangeInfoField5;
    public $CompletedDate;
    public $ContactID;
    public $ContractID;
    public $ContractServiceBundleID;
    public $ContractServiceID;
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $EstimatedHours;
    public $ExternalID;
    public $FirstResponseAssignedResourceID;
    public $FirstResponseDateTime;
    public $FirstResponseDueDateTime;
    public $FirstResponseInitiatingResourceID;
    public $HoursToBeScheduled;
    public $InstalledProductID;
    public $IssueType;
    public $LastActivityDate;
    public $LastCustomerNotificationDateTime;
    public $LastCustomerVisibleActivityDateTime;
    public $MonitorID;
    public $MonitorTypeID;
    public $OpportunityId;
    public $ProblemTicketId;
    public $ProjectID;
    public $PurchaseOrderNumber;
    public $QueueID;
    public $Resolution;
    public $ResolutionPlanDateTime;
    public $ResolutionPlanDueDateTime;
    public $ResolvedDateTime;
    public $ResolvedDueDateTime;
    public $ServiceLevelAgreementHasBeenMet;
    public $ServiceLevelAgreementID;
    public $Source;
    public $SubIssueType;
    public $TicketCategory;
    public $TicketNumber;
    public $TicketType;
}
