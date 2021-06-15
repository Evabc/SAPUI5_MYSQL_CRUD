<?php

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];


// 建立連線資料庫
include("db.php");
                        
$sql="INSERT INTO contact (name, phone, email, message)
VALUES ('$name','$phone','$email','$message')";
 
if ($conn->query($sql) === TRUE) {
    echo "已留言成功, 三秒後返回上一頁";
    header("Refresh:3 ;url=contact.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();	
   
?>
