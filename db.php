<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";
                
// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");
// 檢測連線
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
} 
?>