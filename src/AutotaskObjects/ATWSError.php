<?php
namespace ATWS\AutotaskObjects;

class ATWSError
{
    public $Message;

    public function hasErrors()
    {
        return !empty($this->Message);
    }
}
