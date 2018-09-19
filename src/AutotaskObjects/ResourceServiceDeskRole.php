<?php
namespace ATWS\AutotaskObjects;

class ResourceServiceDeskRole extends Entity
{
    // Required
    public $id;
    public $ResourceID;
    public $RoleID;

    // Optional
    public $Active;
    public $Default;
}
