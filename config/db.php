<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hrm";

    // Handles create connection
    $conn = new mysqli($servername, $username, $password);

    // Handle check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create db if none
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === FALSE) {
        echo "Error creatinf database: " . $conn->error;
    }

    // Choose db
    $conn->select_db($dbname);
?>