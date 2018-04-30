<?php
namespace ATWS\AutotaskObjects;

class TaskPredecessor extends Entity
{
    // Required
    public $PredecessorTaskID;
    public $SuccessorTaskID;

    // Optional
    public $LagDays;
}
