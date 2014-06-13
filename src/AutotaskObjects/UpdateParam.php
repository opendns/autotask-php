<?php
namespace ATWS\AutotaskObjects;

class UpdateParam
{
    public $Entities;

    public function __construct($param) {
        $this->Entities = array($param);
    }
}
