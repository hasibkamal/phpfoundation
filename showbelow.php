<?php
class show_below
{
function show_info($id,$name,$salary)
{
$id;
$name;
$salary;

echo "Id: ".$id."<br/>"."Name: ".$name."<br/>"."Salary: ".$salary;
}

function show_info_below($id,$name,$salary)
{
$id;
$name;
$salary;
echo "<br/>"."<br/>";
echo "Id: "."<br/>"."Name: "."<br/>"."Salary: ";
echo "<br/>";
echo "Id: ".$id.", "."Name: ".$name.", "."Salary: ".$salary;
}
}
$obj_show_below= new show_below();

echo $obj_show_below->show_info(007,"James",10000);
echo $obj_show_below->show_info_below(007,"James",10000);
