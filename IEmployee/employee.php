<?php

/**
 * Description of employee
 *
 * @author LAB5
 */
class Employee implements IEmployee , IPrinter
    {
    private $id;
    private $name;
    
    function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_address() {
        
    }

    public function get_attendance($month) {
        
    }

    public function get_salary() {
        
    }

    public function print_something() {
        
    }

}
