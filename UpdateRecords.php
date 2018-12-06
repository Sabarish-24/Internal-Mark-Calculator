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
$sqlT = "update $tableName set $attr2name = '$attr2val' where $attr1name =
$attr1val;";
if($conn -> query($sqlT))
echo "Value updated!";
else
echo "Error updating value!";
}e
lse
echo "Error changing database!";
}
$conn->close();
?>