<?php
namespace ATWS\AutotaskObjects;

class Tax extends Entity
{
    // Required
    public $TaxCategoryID;
    public $TaxName;
    public $TaxRate;
    public $TaxRegionID;

    // Optional
    public $IsCompounded;
}
