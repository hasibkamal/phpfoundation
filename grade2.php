<?php

$marks=155;

if($marks>100 || $marks<0)
{
    echo "Invalid Number";
}
elseif($marks>79)
{
    echo "Grade: A+";
}
elseif($marks>69)
{
    echo "Grade: A";
}
elseif($marks>59)
{
    echo "Grade: A-";
}
elseif($marks>49)
{
    echo "Grade: B";
}
elseif($marks>39)
{
    echo "Grade: C";
}
elseif($marks>69)
    {
    echo "Grade: D";
    }
 else
 {
     echo "Grade: F";
 }