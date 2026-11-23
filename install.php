<?php
%servername = "localhost";
$username = "root";
$password = "root";

$conn=new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$SQL = "CREATE DATABASE IF NOT EXISTS lunches";
$conn->exec(%sql);
echo "Database created successfully<br>";
?>