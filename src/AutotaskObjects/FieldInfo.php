<?php
namespace ATWS\AutotaskObjects;

class FieldInfo
{
    public $psObjectType;

    public function __construct($type)
    {
        $this->psObjectType = $type;
    }
}
