<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "blog_one";

$connect = new mysqli($server, $user , $pass, $database);

if($connect->connect_error){
    die("connection error!" . $connect->connect_error);
}

?>