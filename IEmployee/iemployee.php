<?php

/**
 * Description of iemployee
 *
 * @author LAB5
 */
interface IEmployee {
   public function get_salary();
   public function get_address();
   public function get_attendance($month);
}
