<?php
namespace ATWS\AutotaskObjects;

class AccountNote extends Entity
{
    // Required
    public $AccountID;
    public $ActionType;
    public $AssignedResourceID;

    // Optional
    public $CompletedDateTime;
    public $ContactID;
    public $EndDateTime;
    public $LastModifiedDate;
    public $Name;
    public $Note;
    public $OpportunityID;
    public $StartDateTime;
}
