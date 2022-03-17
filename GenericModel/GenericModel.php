<?php

class GenericModel extends Crud {

    protected string $className;

    protected array $exclude = [
        "className","table",
        "connection","where",
        "sql","exclude"
    ];

    public function __construct ($table,$className,$properties = null) {
        parent::__construct($table);
        $this->className = $className;
        if (empty($properties)) {
            return;
        }
        foreach ($properties as $key => $value) {
            $this->{$keys} = $value;
        }
    }

    public function setClassName ($cn) {
        $this->className = $cn;
    }

    public function setExclude ($e) {
        $this->exclude = $e;
    }

    public function getClassName () {
        return $this->className;
    }

    public function getExclude () {
        return $this->exclude;
    }

    public function getAttributes () {
        $variables = get_class_vars($this->className);
        $attributes = [];
        $max = count($variables);
        foreach ($variables as $key => $value) {
            if (!in_array($key,$this->exclude)) {
                $attributes[] = $key;
            }
        }
        return $attributes;
    }

    public function parse ($obj = null) {
        try {
            $attributes = $this->getAttributes();
            $finalObject = [];
            if ($obj == null) {
                foreach ($attributes as $index => $key) {
                    if (isset ($this->{$key})) {
                        $finalObject[$key] = $this->{$key};
                    }
                }
                return $finalObject;
            }
            foreach ($attributes as $index => $key) {
                if (isset($obj[$key])) {
                    $finalObject[$key] = $obj[$key];
                }
            }
            return $finalObject;
        } catch (Exception $ex) {
            throw new Exception ("Error in : ".$this->className." parse() => ".$ex->getMessage());
        }
    }

    public function fill ($obj) {
        try {
            $attributes = $this->getAttributes();
            foreach ($attributes as $index => $key) {
                if (isset($obj[$key])) {
                    $this->{$key} = $obj[$key];
                }
            }
        } catch (Exception $ex) {
            throw new Exception ("Error in : ".$this->className." fill() => ".$ex->getMessage());
        }
    }

    public function insert ($obj = null) {
        $obj = $this->parse($obj);
        return parent::insert($obj);
    }

    public function update ($obj) {
        $obj = $this->parse($obj);
        return parent::update($obj);
    }

    public function __get ($attributeName) {
        return $this->{$attributeName};
    }

    public function __set ($attributeName, $value) {
        $this->{$attributeName} = $value;
    }

}