<?php
namespace ATWS\AutotaskObjects;

class ClientPortalUser extends Entity
{
    // Required
    public $ClientPortalActive;
    public $ContactID;
    public $DateFormat;
    public $NumberFormat;
    public $SecurityLevel;
    public $TimeFormat;
    public $UserName;

    // Optional
    public $Password;
}
