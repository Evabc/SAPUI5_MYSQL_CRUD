<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST['id'];

$sql = "DELETE FROM cat_id WHERE id = '$id' ";
$res = $conn->query($sql);

$mysqli->close();

?>