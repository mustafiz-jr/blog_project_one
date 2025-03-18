<?php

include("database.php");

$search = isset($_GET['search']) ? $_GET['search'] : "";

if ($search) {
    $data = "SELECT * FORM `data` WHERE `title` LIKE '%S" . $search . "%S' ";
    $result = $connect->query($data);
} else {


    $data = "SELECT * FROM `data`";

    $result = $connect->query($data);
}
