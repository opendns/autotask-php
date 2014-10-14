<?php
namespace ATWS\AutotaskObjects;

class CreateAttachment
{
    public $attachment;

    public function __construct($param)
    {
        $this->attachment = $param;
    }
}
