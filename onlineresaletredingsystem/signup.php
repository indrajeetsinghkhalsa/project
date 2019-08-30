<?php
require('connection.php');

if(isset($_POST['submit']))
{
$name=$_POST['firstname'];
$lname=$_POST['lastname'];
$contact_no=$_POST['contact_no'];
$uid_no=$_POST['UID_no'];
$state=$_POST['country'];
$email=$_POST['email_address'];
$password=$_POST['password'];
$password1=$_POST['re_password'];

$ecpasd=md5($password);
$ecpasd1=md5($password1);


	$res1=mysql_query("select * from signup where uid_no='$uid_no'");

	$count=mysql_num_rows($res1);
		if($count!=0)

	{
		?>

			

					  <script src="index.php">alert("You Have Already Registered Please Login..");</script>			 

					<?php

	}

 	 else 

 	{
			if($ecpasd!=$ecpasd1)
				{
					echo "<script>alert('pleas enter correct password');</script>";	
					
				}

		 else if(strlen($contact_no)<10 || strlen($contact_no)>10) 
				{
					echo 'Please enter a valid phone number';
				}
				
		 else if(strlen($uid_no)<12 || strlen($uid_no)>12 ) 
				{
					echo 'Please enter a valid UID no ';
				}

		 else if($result=mysql_query($query="insert into signup(fname,lname,email,password,contact_no,uid_no,state) values('$name','$lname','$email','$ecpasd','$contact_no','$uid_no','$state')"))
 		{

			 echo "<script>alert('You Have Successfully Registered Please Login..');</script>";	
					
					mysql_query("insert into login(username,password) select email,password from signup");


			 header('location:index1.php');

 		}
		
		else
		{
			echo "invalid";
		}

 	}



}

else
	{
		echo "their is problem";
	}
	

?>

