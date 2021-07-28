<?php

$conn = new mysqli('localhost', 'root', '', 'silogan');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>