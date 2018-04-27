<?php
namespace ATWS\AutotaskObjects;

class Appointment extends Entity
{
    // Required
    public $EndDateTime;
    public $ResourceID;
    public $StartDateTime;
    public $Title;

    // Optional
    public $CreateDateTime;
    public $CreatorResourceID;
    public $Description;
    public $UpdateDateTime;
}
