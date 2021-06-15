<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");

$id = $_POST['id'];
$sex = $_POST['sex'];
$color = $_POST['color'];
$years = $_POST['years'];
$where_adopt = $_POST['where_adopt'];

$sql = "UPDATE cat_id SET sex = '$sex', color = '$color', years = '$years', where_adopt = '$where_adopt' WHERE id = '$id'";

$res = $conn->query($sql);
$conn->close();
?>