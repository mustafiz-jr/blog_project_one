<?php
include("database.php");





$delete = sprintf("DELETE FROM `data` WHERE `id`='%s'", $_GET['id']);

$result = $connect->query($delete);

if ($result) {
    header("location: /reports.php");
    die();
} else {
    echo "Error!" . $connect->connect_error;
}
