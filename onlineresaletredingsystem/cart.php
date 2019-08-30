<?php
require 'connection.php';
session_start();
?>
<?php
$code=$_GET['code'];
if((!isset($_SESSION['email'])) || (!isset($_SESSION['pwd'])))
{
	header('location:index.php');
}
else 
{
	$query="insert into shopping_cart";
	if(!mysql_query($query))
	{
	header("location:index1.php");
	}
	else 
	{
		echo "their is problem:";
	}
}

?>

<?php
session_start();
 $code=$_GET['code'];?>
<?php
		include('connection.php');
		if(isset($_POST['submit']))
		{
		if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))
			{
				header('Location:login.php');
			}
			else
			{
				$query="select * from product where product_code='$code'";
				$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				{
					$image=$row['image1'];
					$pro_name=$row['product_name'];
					$price=$row['offer_price'];
					$code =$row['product_code'];
				}
				$email=$_SESSION['email'];
				$quantity=$_POST['quantity'];
			/*	echo "$email";

				echo "$code";

				echo "$pro_name";

				echo "$image";

				echo "$quantity";

				echo "$price";*/
				$queryadd="insert into shopping_cart values('','$email','$code','$pro_name','$image','$quantity','$price','')";
				$rsadd=mysql_query($queryadd);
				if($rsadd)
				{
					$del="delect from 'product' where product_code='$code' ";
					 header('location:cartdetails.php');
				}
			}
		}
?>