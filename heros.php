<?php

$timestamp ="1644621513";
$apiKey = "2b39da01cf9ba2ccbd9bc17cbef43871";
$hash = "6f63ee24605ab7a7add61066a65e129e";

$jsonMarvel = file_get_contents("http://gateway.marvel.com/v1/public/characters?ts=${timestamp}&apikey=${apiKey}&hash=${hash}");
  $marvel = json_decode($jsonMarvel);
  $heros = $marvel->data->results;
  foreach ($heros as $hero){
    
    
    print_r(
      '<img src='.$hero->thumbnail->path.'.'.$hero->thumbnail->extension.' alt="" width="500" height="600">'.'<br>'.
      $hero->name.'<br>'.'<br>'.
      $hero->description.'<br>'.'<br>'
    
      );
  }
  
