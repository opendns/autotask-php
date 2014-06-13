<?php
namespace ATWS\AutotaskObjects;

class QueryCondition
{
    public $clauses;
    public $operator;

    public function __construct($operator = null)
    {
        $this->clauses = array();

        $this->operator = $operator;

        if ($this->operator) {
            $this->operator = strtolower($this->operator);
            if ($this->operator !== 'or' && $this->operator !== 'and') {
                throw new \ATWS\ATWSException("Unrecognized operator: \'{$operator}\'");
            }
        }
    }

    public function addField(QueryField $field)
    {
        $this->clauses[] = $field;
    }

    public function addCondition(QueryCondition $condition)
    {
        $this->clauses[] = $condition;
    }

    public function asXml()
    {
        $str = "";

        $startTag = "<condition";
        if ($this->operator) {
            $startTag .= " operator=\"{$this->operator}\"";
        }

        $startTag .= ">";

        foreach ($this->clauses as $c) {
            $str .= $c->asXml();
        }

        return "{$startTag}{$str}</condition>";
    }
}
