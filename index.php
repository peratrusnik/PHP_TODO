<?php


require "utils.php";

$sql = "SELECT * FROM users";
$query = sql_query($sql);
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);




require "views/index.view.php";



// $sql = 'SELECT * FROM todo';
// $query = mysqli_query($db , $sql);
// $todos = mysqli_fetch_all($query, MYSQLI_ASSOC);

// $colors = [null, "primary", "secondary", "danger"];

// require "index.view.php";
