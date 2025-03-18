<?php
include("database.php");


$select = sprintf("SELECT * FROM `data` WHERE `id`='%s'", $_GET['id']);

$result = $connect->query($select);
$row = $result->fetch_assoc();

if ($row['status'] == 0) {
    $select = sprintf("UPDATE `data` SET `status`= 1 WHERE `id`=%s", $_GET['id']);
} else {
    $select = sprintf("UPDATE `data` SET `status`= 0 WHERE `id`=%s", $_GET['id']);
}

$result = $connect->query($select);

if ($result) {
    return header("location: /reports.php");
} else {
    echo "error" . $connect->error;
    die();
}
