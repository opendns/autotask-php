<?php
namespace ATWS\AutotaskObjects;

class TicketChangeRequestApproval extends Entity
{
    // Required
    public $TicketID;

    // Optional
    public $ApproveRejectDateTime;
    public $ApproveRejectNote;
    public $ContactID;
    public $IsApproved;
    public $ResourceID;
}
