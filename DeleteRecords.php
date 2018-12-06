<?php
$sname = "localhost";
$user = "root";
$pass = "password";
$conn = new mysqli($sname, $user, $pass);
if($conn->connect_error)
die("Connection failure".$conn->connect_error);
else{
$dbName = $_POST['dbName'];
$tableName = $_POST['tableName'];
$attrname = $_POST['attrname'];
$attrval = $_POST['attrval'];
$sqlD = "use $dbName;";
if($conn -> query($sqlD))
{
$sqlT = "Delete from $tableName where $attrname = $attrval;";
if($conn -> query($sqlT))
echo "Row deleted!";
else
echo "Error deleting row!";
}e
lse
echo "Error changing database!";
}
$conn->close();
?>