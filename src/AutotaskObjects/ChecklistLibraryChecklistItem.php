<?php
namespace ATWS\AutotaskObjects;

class ChecklistLibraryChecklistItem extends Entity
{
    // Required
    public $ChecklistLibraryID;
    public $ItemName;

    // Optional
    public $Important;
    public $KnowledgebaseArticleID;
    public $Position;
}