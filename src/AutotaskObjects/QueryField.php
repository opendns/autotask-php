<?php
namespace ATWS\AutotaskObjects;

class QueryField
{
    public $name;
    public $expressions;

    public function __construct($name)
    {
        $this->name = $name;
        $this->expressions = array();
    }

    public function addExpression($op, $value)
    {
        $expression = new QueryFieldExpression($op, $value);
        $this->expressions[] = $expression;
    }

    public function asXml()
    {
        $str = "";

        foreach ($this->expressions as $e) {
            $str .= $e->asXml();
        }

        return "<field>{$this->name}{$str}</field>";
    }
}
