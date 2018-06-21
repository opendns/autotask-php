<?php
namespace ATWS\AutotaskObjects;

class Task extends Entity
{
    // Required
    public $ProjectID;
    public $Status;
    public $TaskType;
    public $Title;

    // Optional
    public $AllocationCodeID;
    public $AssignedResourceID;
    public $AssignedResourceRoleID;
    public $CanClientPortalUserCompleteTask;
    public $CompletedByResourceID;
    public $CompletedByType;
    public $CompletedDateTime;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $CreatorType;
    public $DepartmentID;
    public $Description;
    public $EndDateTime;
    public $EstimatedHours;
    public $ExternalID;
    public $HoursToBeScheduled;
    public $IsVisibleInClientPortal;
    public $LastActivityDateTime;
    public $LastActivityPersonType;
    public $LastActivityResourceID;
    public $PhaseID;
    public $Priority;
    public $PriorityLabel;
    public $PurchaseOrderNumber;
    public $RemainingHours;
    public $StartDateTime;
    public $TaskIsBillable;
    public $TaskNumber;
}
