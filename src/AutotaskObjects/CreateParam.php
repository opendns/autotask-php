<?php
namespace ATWS\AutotaskObjects;

class CreateParam
{
    public $Entities;

    public function __construct($param) {
        $this->Entities = array($param);
    }
}
