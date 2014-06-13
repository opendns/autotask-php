<?php
namespace ATWS\AutotaskObjects;

class ZoneInfo
{
    public $UserName;

    public function __construct($username)
    {
        $this->UserName = $username;
    }
}
