<?php 
      $connect = mysqli_connect('localhost', 'root', 'root', 'pokemon_unite_db');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM pokemondata';
      $pokemon = mysqli_query($connect, $query);
  ?>