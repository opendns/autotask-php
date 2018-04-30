<?php
namespace ATWS\AutotaskObjects;

class Department extends Entity
{
    // Required
    public $Name;
    public $PrimaryLocationID;

    // Optional
    public $Description;
    public $Number;
}
