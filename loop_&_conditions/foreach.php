<?php
$cars= array('toyata','sedan','mitsubishi','oto');
$fruits=array('a'=>'apple',
    'b'=>'Banana',
    'c'=>'orange');
$i;
//optimized code
$length=count($cars);

for($i=0;$i<=$length;$i++)
    {
    echo $cars[$i]."<br/>";
}

//echo $cars[0]."<br/>";
//echo $cars[1]."<br/>";
//echo $cars[2]."<br/>";

foreach($fruits as $key=>$value)
{
    echo $key."=".$value."<Br/>";
}