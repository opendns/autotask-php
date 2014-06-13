<?php
namespace ATWS\AutotaskObjects;

class DeleteParam
{
    public $Entities;

    public function __construct($param) {
        $this->Entities = array($param);
    }
}
