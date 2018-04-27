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
    public $CreatorResourceID;
    public $LastActivityDate;
}
