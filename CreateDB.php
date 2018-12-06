<?php
$sname = "localhost";
$user = "root";
$pass = "password";
$conn = new mysqli($sname, $user, $pass);
if($conn->connect_error)
die("Connection failure".$conn->connect_error);
else{
$dbName = $_POST['dbName'];
$sql = "Create database $dbName;";
if($conn -> query($sql))
echo "Database created!";
else
echo "Error creating database!";
}
$conn->close();
?>