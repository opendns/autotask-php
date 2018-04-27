<?php
namespace ATWS\AutotaskObjects;

class AccountAlert extends Entity
{
    // Required
    public $AccountID;
    public $AlertTypeID;

    // Optional
    public $AlertText;
}
