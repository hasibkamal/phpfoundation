<?php

$films = array("genres" => array("comedy", "tragedy","action","romance"),
               "film_titles"=>array("Big","Star Wars", "Titanic", "French Kiss"),
               "stars" => array("Bill Murray", "Mark Hammel", "Leonard DiCaprio", "Cate Blanchette"),
);


//print_r($films);

$genre=array_shift($films);
//$output=array();
//print_r($genre);

foreach($films as $info)
{
    $newinfo=array();
    
    foreach($genre as $index=>$name)
    {
        $newinfo[$name]=$info[index];
    }
    $output[]=$newinfo;
}
//var_dump($output);