<?php

print_r($_POST);

$pokeName = $_POST['pokeName'];
$pokeImage = $_POST['pokeImage'];
$pokeRole = $_POST['pokeRole'];
$pokeStyle = $_POST['pokeStyle'];

include '../reusable/conn.php';

$query = "UPDATE pokemondata SET
            `image_url` = '" . mysqli_real_escape_string($connect, $pokeImage) . "',
            `Role` = '" . mysqli_real_escape_string($connect, $pokeRole) . "',
            `Style` = '" . mysqli_real_escape_string($connect, $pokeStyle) . "'
            WHERE `Name` = '" . mysqli_real_escape_string($connect, $pokeName) . "'";

$result = mysqli_query($connect, $query);

if($result) {
    header("Location: ../index.php");
} else {
    echo "Failed: " . mysqli_error($connect);
}


?>