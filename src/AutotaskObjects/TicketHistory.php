<?php
namespace ATWS\AutotaskObjects;

class TicketHistory extends Entity
{
    // v1.6+ Required
    // Required
    public $TicketID;
    public $Action;
    public $Detail;
    public $Date;
    public $ResourceID;
}
