<?php 


$db = mysqli_connect("localhost", "root", "", "accounts");

function sql_query($sql)
{   
    global $db;
    return mysqli_query($db, $sql);
}
function redirect($page)
{
    header("Location: $page");
}

function vd($arg){
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}