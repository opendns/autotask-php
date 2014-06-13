<?php
namespace ATWS\AutotaskObjects;

class TaskPredecessor extends Entity
{
    public $Id;
    public $LagDays;
    public $PredecessorTaskID;
    public $SuccessorTaskID;
}
