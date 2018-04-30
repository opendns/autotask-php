<?php
namespace ATWS\AutotaskObjects;

class ResourceRole extends Entity
{
    // Required
    public $ResourceID;
    public $RoleID;

    // Optional
    public $Active;
    public $DepartmentID;
    public $QueueID;
}
