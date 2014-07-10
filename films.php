<?php
$films = array("genres" => array("comedy", "tragedy","action","romance"),
               "film_titles"=>array("Big","Star Wars", "Titanic", "French Kiss"),
               "stars" => array("Bill Murray", "Mark Hammel", "Leonard DiCaprio", "Cate Blanchette"),
                );

$genre=$films["genres"];
$film_title= $films["film_titles"];
$star = $films["stars"];


function info_by_genre($inputgenre)
{
global $genre;
global $film_title;
global $star;

if($inputgenre==$genre[0])
{
    echo "Film Title: ".$film_title[0]."<br/>";
    echo "Star: ".$star[0];
}
elseif($inputgenre==$genre[1])
{
     echo "Film Title: ".$film_title[1]."<br/>";
    echo "Star: ".$star[1];
}
elseif($inputgenre==$genre[2])
{
        echo "Film Title: ".$film_title[2]."<br/>";
    echo "Star: ".$star[2];
}
else
{ 
    echo "Film Title: ".$film_title[3]."<br/>";
    echo "Star: ".$star[3];
    
 }

}

info_by_genre("action"); 