<?php 

require "utils.php";
$sql = "SELECT * FROM users";
$users = mysqli_fetch_all(sql_query($sql), MYSQLI_ASSOC);
require "views/edit_delete.view.php";