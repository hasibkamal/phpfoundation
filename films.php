<?php

$films = array("genres" => array("comedy", "tragedy","action","romance"),
               "film_titles"=>array("Big","Star Wars", "Titanic", "French Kiss"),
               "stars" => array("Bill Murray", "Mark Hammel", "Leonard DiCaprio", "Cate Blanchette"),
                );


//print_r($films);


//print_r($genre);

/*$output=array();

foreach($films as $info)
{
    $newinfo=array();
 
    foreach($genre as $film_title>$star)
    {
        //$newinfo[$name]=$info[index];
        echo $film_title."-".$star;
        
    }
    
  /*$output[]=$newinfo;
}
var_dump($output); */

function info_by_genre($genre)
{
$films = array("genres" => array("comedy", "tragedy","action","romance"),
               "film_titles"=>array("Big","Star Wars", "Titanic", "French Kiss"),
               "stars" => array("Bill Murray", "Mark Hammel", "Leonard DiCaprio", "Cate Blanchette"),
                );
$genre=$films["genres"];
$film_title= $films["film_titles"];
$star = $films["stars"];
if($genre=$genre[1])
{
    echo "Film Title: ".$film_title[1]."<br/>";
    echo "Star: ".$star[1];
}
elseif($genre=$genre[2])
{
       echo "Film Title: ".$film_title[2]."<br/>";
    echo "Star: ".$star[2];
}
elseif($genre=$genre[3])
{
        echo "Film Title: ".$film_title[3]."<br/>";
    echo "Star: ".$star[3];
}
else
{
       echo "Film Title: ".$film_title[4]."<br/>";
    echo "Star: ".$star[4];
}

}

info_by_genre("comedy");