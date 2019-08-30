<?php
session_start();

if (isset($_POST['login']))
	{
		require ('connection.php');

					$email=$_POST['uname'];

					$psw=$_POST['psw'];
					
					$password=md5($psw);


					$que="select * from login where username='$email' and password='$password'";
					$row=mysql_query($que);
					$count=mysql_num_rows($row);
					
					if ($count!=0)
					{
						$_SESSION['email']="$email";

						$_SESSION['pwd']="$password";
						
						header("location:index1.php");
						
						
					}
					else if($count==0)
					{

						echo "<script >alert('plz enter correct email/password');</script>";
						include('index.php');
						
						
					}



else 
{
	echo "there is problem:";
}

}

?>