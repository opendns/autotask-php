<?php
namespace ATWS\AutotaskObjects;
use \ATWS;

class QueryFieldExpression
{
    public $op;
    public $value;

    public static $validOperators = array(
        'equals',
        'notequal',
        'greaterthan',
        'lessthan',
        'greaterthanorequals',
        'lessthanorequals',
        'beginswith',
        'endswith',
        'contains',
        'isnotnull',
        'isnull',
        'isthisday',
        'like',
        'notlike',
        'soundslike',
    );

    public function __construct($op, $value)
    {
        // in_array() isn't great, but we know that $validOperators is small
        if (!in_array(strtolower($op), static::$validOperators)) {
            throw new ATWS\ATWSException("Unrecognized operator: '{$op}'");
        }
        $this->op = $op;
        $this->value = $value;
    }

    public function asXml()
    {
        // TODO: straightforward way to set tag attributes in PHP
        return "<expression op='{$this->op}'>{$this->value}</expression>";
    }
}
