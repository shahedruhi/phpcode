<?php


class Department {
    private $code;
    private $name;
    private $student_list;
    
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->student_list = array();
    }

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }



}
