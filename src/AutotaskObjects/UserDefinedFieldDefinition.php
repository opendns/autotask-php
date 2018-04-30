<?php
namespace ATWS\AutotaskObjects;

class UserDefinedFieldDefinition extends Entity
{
    // Required
    public $DataType;
    public $Name;
    public $UdfType;

    // Optional
    public $CreateDate;
    public $CrmToProjectUdfId;
    public $Description;
    public $DefaultValue;
    public $DisplayFormat;
    public $IsActive;
    public $IsEncrypted;
    public $IsFieldMapping;
    public $IsProtected;
    public $IsRequired;
    public $IsVisibleToClientPortal;
    public $MergeVariableName;
    public $NumberOfDecimalPlaces;
    public $SortOrder;
}
