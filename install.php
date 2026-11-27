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
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Forename VARCHAR(20) NOT NULL, 
Surname VARCHAR(20) NOT NULL, 
Password VARCHAR(200) NOT NULL, 
Year int(2) NOT NULL,
House VARCHAR(20) NOT NULL,  
Balance DECIMAL(5,2) NOT NULL, 
Role TINYINT(1) NOT NULL, 
Username VARCHAR(20) NOT NULL);
");
$stmt->execute();
echo("tbluser made");
?>