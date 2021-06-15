<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat";
 
// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢測連線
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
} 
 
$sql="INSERT INTO adopter (adopter_name, adopter_phone, adopter_email)
VALUES ('$_POST[adopter_name]', '$_POST[adopter_phone]', '$_POST[adopter_email]' )";
 
if ($conn->query($sql) === TRUE) {
    echo "新資料寫入成功, 三秒後返回上一頁";
    header("Refresh:3 ;url=adopter.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>