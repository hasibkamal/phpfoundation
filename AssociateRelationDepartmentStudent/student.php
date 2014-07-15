<?php

/**
 * Description of student
 *
 * @author Lab5
 */
class Student {
    private $student_name;
    private $reg_no;
    
    function __construct($student_name, $reg_no) {
        $this->student_name = $student_name;
        $this->reg_no = $reg_no;
    }

    public function get_student_name() {
        return $this->student_name;
    }

    public function get_reg_no() {
        return $this->reg_no;
    }

    public function set_student_name($student_name) {
        $this->student_name = $student_name;
    }

    public function set_reg_no($reg_no) {
        $this->reg_no = $reg_no;
    }


    
    
}
