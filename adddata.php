<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");


$sql = "INSERT INTO cat_id (id, sex, color, years, where_adopt)
VALUES('$_POST[id]', '$_POST[sex]', '$_POST[color]', '$_POST[years]', '$_POST[where_adopt]')";

$res = $conn->query($sql);

$conn->close();
?>