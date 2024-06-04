<?php
$servername = "localhost";
$username = "userdb";
$password = "databaza";
$dbname = "northwind";

// Vytvorenie pripojenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola pripojenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
