<?php
namespace ATWS\AutotaskObjects;

class UserDefinedFieldDefinition extends Entity
{
    // Required
    public $Name;
    public $UdfType;
    public $DataType;

    // Optional
    public $CreateDate;
    public $CrmToProjectUdfId;
    public $Description;
    public $DefaultValue;
    public $DisplayFormat;
    public $IsActive;
    public $IsFieldMapping;
    public $IsProtected;
    public $IsRequired;
    public $MergeVariableName;
    public $NumberOfDecimalPlaces;
    public $SortOrder;
}
