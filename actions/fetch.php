<?php

include("database.php");

$search = isset($_GET['search']) ? $_GET['search'] : "";

if ($search) {
    $data = "SELECT * FROM `data` WHERE `title` LIKE '%s" . $search . "%s' ";
    $result = $connect->query($data);
} else {
    $data = "SELECT * FROM `data`";

    $result = $connect->query($data);
}
