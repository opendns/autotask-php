<?php
namespace ATWS\AutotaskObjects;

class TaskNote extends Entity
{
    // Required
    public $Description;
    public $LastActivityDate;
    public $NoteType;
    public $Publish;
    public $TaskID;
    public $Title;

    // Optional
    public $CreatorResourceID;
}
