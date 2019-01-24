<?php
namespace ATWS\AutotaskObjects;

class ContractNote extends Entity
{
    // Required
    public $ContractID;
    public $Description;
    public $Title;

    // Optional
    public $CreateDateTime;
    public $CreatorResourceID;
    public $ImpersonatorCreatorResourceID;
    public $ImpersonatorUpdaterResourceID;
    public $LastActivityDate;
}
