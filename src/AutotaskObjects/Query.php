<?php
namespace ATWS\AutotaskObjects;

class Query
{
    public $clauses;
    public $query;
    public $queryField;
    public $sXML;

    public function __construct($entity)
    {
        $this->entity = $entity;
        $this->clauses = array();
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
        $this->query = new \stdClass();
        $this->query->queryxml = new \stdClass();
        $this->query->queryxml->entity = $this->entity;
        $this->query->queryxml->query = "";

        $str = "";

        foreach ($this->clauses as $c) {
            $str .= $c->asXml();
        }

        $this->query->queryxml->query = $str;
        $this->sXML = $this->_convertObjectToXml($this->query);

        return $this->sXML;
    }

    protected function _convertObjectToXml($obj)
    {
        return $this->_convertXml($obj);
    }

    protected function _convertXml($obj)
    {
        $xml = '';

        if (is_object($obj)) {
            foreach ($obj as $key=>$value) {
                $xml .= '<' . $key . '>'. $this->_convertXml($value) . '</' . $key . '>';
            }
        } else {
            // SoapClient will encode this data for us
            $xml = $obj;
        }

        return $xml;
    }
}
