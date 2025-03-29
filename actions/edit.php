<?php
include("database.php");

$id = $_POST['id'];
$title = $_POST['title'];
$short_des = $_POST['short_des'];
$description = $_POST['description'];

$update = sprintf("UPDATE `data` SET   `title`='$title' , `short_des`='$short_des' , `description`='$description' WHERE `id`='$id'");

$result = $connect->query($update);

if ($result) {
    echo ("Data is updated!");
    header("location: /reports.php");
} else {
    echo ("error!" . $connect->error);
    die();
}
