<?php

$AC=$_POST["maccount"];
$passwd=$_POST["mpassword"];


if ($_POST["maccount"]='catmanager')
{
echo "登入成功";
header("Refresh:3 ;url=http://localhost/test2/cat.html");    
}
?>
	
