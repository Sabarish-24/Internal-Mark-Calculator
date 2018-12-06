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
$attr1 = $_POST['attr1'];
$attr2 = $_POST['attr2'];
$sqlD = "use ".$dbName.";";
if($conn -> query($sqlD)){
$sqlT = "create table ".$tableName."(".$attr1.", ".$attr2.");";
if($conn -> query($sqlT))
echo "Table created!";
else
echo "Error creating table!";
}e
lse
echo "Error changing database!";
}
$conn->close();
?>