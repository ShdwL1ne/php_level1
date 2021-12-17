<?php
require "config.php";
$action = $_GET['action'];
$id = $_GET['id'];
$link = $_GET['img'];

if ($action == 'counter') {
    $sql = "UPDATE goods SET counter = counter + 1 WHERE id = $id";
    if (mysqli_query($connect, $sql)) {
        header("Location: fullimage.php?img=$link");
    }
}
