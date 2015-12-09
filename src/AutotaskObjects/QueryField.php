<?php
namespace ATWS\AutotaskObjects;

class QueryField
{
    public $name;
    public $expressions;

    public function __construct($name, $isUDF = false)
    {
        $this->name = $name;
        $this->isUDF = $isUDF;
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

        if ($this->isUDF) {
            return "<field udf=\"true\">{$this->name}{$str}</field>";
        } else {
            return "<field>{$this->name}{$str}</field>";
        }
    }
}
