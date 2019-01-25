<?php
namespace ATWS\AutotaskObjects;

class TicketNote extends Entity
{
    // Required
    public $Description;
    public $NoteType;
    public $Publish;
    public $TicketID;
    public $Title;

    // Optional
    public $CreateDateTime;
    public $CreatorResourceID;
    public $ImpersonatorCreatorResourceID;
    public $ImpersonatorUpdaterResourceID;
    public $LastActivityDate;
}
