<?php
require_once("index.php");
$busca = $_POST['busca'];

$timestamp ="1644621513";
$apiKey = "2b39da01cf9ba2ccbd9bc17cbef43871";
$hash = "6f63ee24605ab7a7add61066a65e129e";

$buscaInicial = "http://gateway.marvel.com:80/v1/public/characters?orderBy=name&limit=100&ts=${timestamp}&apikey=${apiKey}&hash=${hash}";

if (isset($busca)) {
  $buscaInicial = "http://gateway.marvel.com:80/v1/public/characters?nameStartsWith=${busca}&orderBy=name&limit=100&ts=${timestamp}&apikey=${apiKey}&hash=${hash}";
   
}

$jsonMarvel = file_get_contents($buscaInicial);
  $marvel = json_decode($jsonMarvel);
  $heros = $marvel->data->results;
  if (isset($busca)) {
  var_dump($busca);
}
  
  foreach ($heros as $hero){
    
    
  echo(
    
      '<div class="card mb-1 mx-1 shadow rounded">
        <img src='.$hero->thumbnail->path.'.'.$hero->thumbnail->extension.' class="card-img-top" alt="">
        <div class="card-body bg-danger text-center">
        <h3>'.$hero->name.'</h3>
        <p class="card-text">'.$hero->description.'</p>
        </div>
      </div>'
      

    );
      
  };
  
  
  ?>
  
