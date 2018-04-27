<?php
namespace ATWS\AutotaskObjects;

class AccountToDo extends Entity
{
    // Required
    public $AccountID;
    public $ActionType;
    public $AssignedToResourceID;
    public $EndDateTime;
    public $StartDateTime;

    // Optional
    public $ActivityDescription;
    public $CompletedDate;
    public $ContactID;
    public $ContractID;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $LastModifiedDate;
    public $OpportunityID;
    public $TicketID;
}
