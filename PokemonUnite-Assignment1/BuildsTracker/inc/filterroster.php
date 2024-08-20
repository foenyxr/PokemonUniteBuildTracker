<?php

print_r($_POST);

$pokeName = $_GET['pokeName'];
$pokeImage = $_GET['pokeImage'];
$pokeRole = $_GET['pokeRole'];
$pokeStyle = $_GET['pokeStyle'];

$pokeName = mysqli_real_escape_string($connect, $pokeName);
$pokeImage = mysqli_real_escape_string($connect, $pokeImage);
$pokeRole = mysqli_real_escape_string($connect, $pokeRole);
$pokeStyle = mysqli_real_escape_string($connect, $pokeStyle)


      $connect = mysqli_connect('localhost', 'root', 'root', 'pokemon_unite_db');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM pokemondata';
      $pokemon = mysqli_query($connect, $query);


$result = mysqli_query($connect, $query);

if($result) {
    header("Location: ../index.php");
} else {
    echo "Failed: " . mysqli_error($connect);
}


?>