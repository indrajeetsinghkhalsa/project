<?php 

session_start();

require 'connection.php';

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:login.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];


if(isset($_POST['submit']))
{
	$p_name=$_POST['product'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];
	$image3=$_FILES['image3']['name'];
	$image4=$_FILES['image4']['name'];
	$image5=$_FILES['image5']['name']; 
	move_uploaded_file($_FILES["image1"]["tmp_name"],"image1/".$_FILES["image1"]["name"]); 
	move_uploaded_file($_FILES["image2"]["tmp_name"],"image1/".$_FILES["image2"]["name"]);
	move_uploaded_file($_FILES["image3"]["tmp_name"],"image1/".$_FILES["image3"]["name"]);
	move_uploaded_file($_FILES["image4"]["tmp_name"],"image1/".$_FILES["image4"]["name"]);
	move_uploaded_file($_FILES["image5"]["tmp_name"],"image1/".$_FILES["image5"]["name"]);
	
	$query="insert into product2(email,p_name,price,description,category,image1,image2,image3,image4,image5) values('$email','$p_name','$price','$description','$category','$image1','$image2','$image3','$image4','$image5')";
	
	if(mysql_query($query))
	{
		echo"<script>alert('DATA INSERTED SUCCESSFULLY');</script>";
	include "index1.php";
	}
	else 
	{
		echo "their is problem:";
	}
}
?>