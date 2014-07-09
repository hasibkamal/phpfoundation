<?php
function getGrade($marks)
{
   //$marks=79;

if($marks>79 && $marks<=100)
{
    $grade= 'A+';
}
elseif($marks>69 && $marks<80)
{
    $grade= 'A';
}
elseif($marks>59 && $marks<70)
{
    $grade= 'A-';
}
elseif($marks>49 && $marks<60)
{
    $grade= 'B';
}
elseif($marks>39 && $marks<50)
{
    $grade= 'C';
}
elseif($marks>69 && $marks<80)
    {
    $grade= 'D';
    }
 else
 {
     $grade= 'F';
 }
 
 return $grade;
}

//calling function

echo getGrade(77);