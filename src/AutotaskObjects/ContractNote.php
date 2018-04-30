<?php
namespace ATWS\AutotaskObjects;

class ContractNote extends Entity
{
    // Required
    public $ContractID;
    public $Description;
    public $Title;

    // Optional
    public $CreatorResourceID;
    public $LastActivityDate;
}
