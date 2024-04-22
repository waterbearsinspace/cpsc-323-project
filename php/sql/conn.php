<?php
    $DB_SERVER = "localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    $DB_DATABASE = "cpsc_332_project";

    $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>