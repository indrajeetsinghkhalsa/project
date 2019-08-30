<?php
session_start();

require 'connection.php';
if(isset($_POST['Submit']))
{
	$p_name=$_POST['product'];
	$price=$_POST['price'];
	$warranty=$_POST['warranty'];
	$description=$_POST['description'];
	$category=$_POST['select'];
	$query=mysql_query("insert into product1(p_name,price,warranty,description,category) values('$p_name','$price','$warranty','$description','$category')");
	header ('location:save_create_image_thumnail_php_mysql/image.php');
}
else {
	echo "their is problem";
}
?>