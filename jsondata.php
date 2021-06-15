<?php
header("Content-Type:text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");
$sql ="SELECT * FROM cat_id";

$res = $conn->query($sql);

$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result, 
array('id'=>$row[0],'sex'=>$row[1],'color'=>$row[2],'years'=>$row[3],'where_adopt'=>$row[4]));
}

$baris = array('catSet' => $result);
print json_encode($baris);
?>
