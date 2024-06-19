<?php 
      $connect = mysqli_connect('localhost', 'root', 'root', 'publicschools');
      if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = 'SELECT * FROM schools';
      $schools = mysqli_query($connect, $query);
      // echo '<pre>';
      // echo print_r($students);
      // echo '</pre>';
  ?>