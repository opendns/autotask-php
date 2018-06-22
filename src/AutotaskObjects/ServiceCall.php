<?php
namespace ATWS\AutotaskObjects;

class ServiceCall extends Entity
{
    // Required
    public $AccountID;
    public $EndDateTime;
    public $StartDateTime;

    // Optional
    public $AccountPhysicalLocationID;
    public $CancelationNoticeHours;
    public $CanceledByResource;
    public $CanceledDateTime;
    public $Complete;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $Description;
    public $Duration;
    public $LastModifiedDateTime;
    public $Status;
}
