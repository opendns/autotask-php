<?php
namespace ATWS\AutotaskObjects;

class ResourceSkill extends Entity
{
    // Required
    public $ResourceID;
    public $SkillID;
    public $SkillLevel;

    // Optional
    public $SkillDescription;
}
