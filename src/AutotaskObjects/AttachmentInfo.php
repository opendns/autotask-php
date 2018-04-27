<?php
namespace ATWS\AutotaskObjects;

class AttachmentInfo extends Entity
{
    // Required
    public $FullPath;
    public $ParentID;
    public $ParentType;
    public $Publish;
    public $Title;
    public $Type;

    // Optional
    public $AttachDate;
    public $AttachedByContactID;
    public $AttachedByResourceID;
    public $ContentType;
    public $FileSize;
    public $OpportunityID;
}
