<?php
    require_once 'department.php';
    require_once 'student.php';
    require_once 'studentEntry.php';
    require_once 'departmentEntry.php';

    session_start();

    $department = $_SESSION['department'];
    /* @var $department Department */
    echo $department->get_dept_code()."<br/>";
    echo $department->get_dept_name()."<br/>";
    echo $department->get_no_of_student()."<br/>";
    echo 'Name Reg No'. '<br/>';
    /* @var $a_student Student*/
        foreach($department->get_all_students() as $a_student)
        {
            echo $a_student->get_student_name()." ";
            echo $a_student->get_reg_no()."<br>";
        }
