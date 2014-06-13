<?php
namespace ATWS\AutotaskObjects;

class UDFParam
{
    public $psTable;

    public function __construct($type)
    {
        $this->psTable = $type;
    }
}
