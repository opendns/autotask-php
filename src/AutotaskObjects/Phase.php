<?php
namespace ATWS\AutotaskObjects;

class Phase extends Entity
{
    // Required
    public $ProjectID;
    public $Title;

    // Optional
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $DueDate;
    public $EstimatedHours;
    public $ExternalID;
    public $LastActivityDateTime;
    public $ParentPhaseID;
    public $PhaseNumber;
    public $Scheduled;
    public $StartDate;
}
