<?php
namespace ATWS\AutotaskObjects;

class ProjectNote extends Entity
{
    // Required
    public $Announce;
    public $Description;
    public $NoteType;
    public $ProjectID;
    public $Publish;
    public $Title;

    // Optional
    public $CreateDateTime;
    public $CreatorResourceID;
    public $ImpersonatorCreatorResourceID;
    public $ImpersonatorUpdaterResourceID;
    public $LastActivityDate;
}
