<?php
namespace ATWS\AutotaskObjects;

class InventoryLocation extends Entity
{
    // Required
    public $Active;
    public $LocationName;

    // Optional
    public $IsDefault;
    public $ResourceID;
}
