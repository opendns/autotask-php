<?php
namespace ATWS\AutotaskObjects;

class GetAttachment
{
    public $attachmentId;
    public function __construct($param)
    {
        $this->attachmentId = $param;
    }
}
