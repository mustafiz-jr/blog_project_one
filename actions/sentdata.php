<?php
include("database.php");



$senddata = sprintf(
    "INSERT INTO `data` (`title` , `short_des` , `description`) VALUES ('%s','%s','%s')",
    $_POST['title'],
    $_POST['short_des'],
    $_POST['description']
);


$result = $connect->query($senddata);

if ($result) {
    return header("Location: /reports.php");
    echo ("data is entered!");
} else {
    echo ("error!" . $connect->error);
    die();
}
