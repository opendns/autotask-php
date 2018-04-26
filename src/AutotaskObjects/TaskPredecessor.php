<?php
namespace ATWS\AutotaskObjects;

class TaskPredecessor extends Entity
{
    public $LagDays;
    public $PredecessorTaskID;
    public $SuccessorTaskID;
}
