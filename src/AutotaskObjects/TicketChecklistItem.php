<?php
namespace ATWS\AutotaskObjects;

class TicketChecklistItem extends Entity
{
    // Required
    public $ItemName;
    public $TicketID;

    // Optional
    public $Completed;
    public $CompletedByResourceID;
    public $CompletedDateTime;
    public $Important;
    public $KnowledgebaseArticleID;
    public $Position;
}
