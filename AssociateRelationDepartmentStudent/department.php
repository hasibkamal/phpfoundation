<?php

class Department
{
    private $dept_code;
    private $dept_name;
    private $student_list;
            
    function __construct($dept_code, $dept_name) 
    {
        $this->dept_code = $dept_code;
        $this->dept_name = $dept_name;
        $this->student_list = array();
    }

    public function get_dept_code() {
        return $this->dept_code;
    }

    public function get_dept_name() {
        return $this->dept_name;
    }

    public function get_student_list() {
        return $this->student_list;
    }

    public function set_dept_code($dept_code) {
        $this->dept_code = $dept_code;
    }

    public function set_dept_name($dept_name) {
        $this->dept_name = $dept_name;
    }

    public function set_student_list($student_list) {
        $this->student_list = $student_list;
    }

    
    public function add_student($a_student) 
    {
        $this->student_list[]=$a_student;
        return 'Student Added.';
    }

    public function get_no_of_student() 
    {
    echo "Name: Email: Reg No: <br/><br/>";    
    }

    public function get_all_students() 
    {
    return $this->student_list;    
    }

}

