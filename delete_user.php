<?php 

require "utils.php";
$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id= " .$id;

sql_query($sql);

redirect("index.php");