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
$sqlD = "use ".$dbName.";";
if($conn -> query($sqlD)){
$sqlT = "select * from $tableName;";
$res = $conn -> query($sqlT);
if($res -> num_rows > 0){
echo "Table: $tableName<br><br>";
while($row = $res -> fetch_assoc()){
echo "ID: ". $row["ID"];
echo " ";
echo "<br>Name: ". $row["Name"];
echo "<br><br>";
}
}e
lse
echo "No entries found!";
}e
lse
echo "Error changing database!";
}
$conn->close();
?>