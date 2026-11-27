<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn=new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS lunches";
$conn->exec($sql);
echo "Database created successfully<br>";
$sql = "USE lunches";
$conn->exec($sql);
echo "Using database lunches<br>";
?>