<?php
namespace ATWS\AutotaskObjects;

class UserDefinedFieldListItem extends Entity
{
    // Required
    public $UdfFieldId;
    public $ValueForDisplay;
    public $ValueForExport;

    // Optional
    public $CreateDate;
}
