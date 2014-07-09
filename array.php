<?php
//Array

$cars= array('toyata','sedan','mitsubishi');
//echo gettype($cars);
$cars[]='Premeo';
$cars[8]='Oto';
$cars['c'] ='Corola';
$cars[] ='Corla';
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<br/>-----------------------<br/>";

//Associative Array
$fruits=array('a'=>'apple','b'=>'Banana');
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo $fruits['a'];

echo "<br/>-----------------------<br/>";

//2D array
$arr2D=array($cars,$fruits);
echo "<pre>";
print_r($arr2D);
echo "</pre>";

echo $arr2D[0][8];