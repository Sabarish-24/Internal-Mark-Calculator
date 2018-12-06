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
$attr1name = $_POST['attr1name'];
$attr2name = $_POST['attr2name'];
$attr1val = $_POST['attr1val'];
$attr2val = $_POST['attr2val'];
$sqlD = "use $dbName;";
if($conn -> query($sqlD))
{
$sqlT = "Insert into $tableName($attr1name, $attr2name) values($attr1val,
'$attr2val');";
if($conn -> query($sqlT))
echo "Values inserted!";
else
echo "Error inserting values!";
}e
lse
echo "Error changing database!";
}
$conn->close();
?>