<?php /* session_start();



if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 



echo "<script>alert('Please Login First....');<script>";

header('location:index.php'); 

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];
 */
 ?>







<!DOCTYPE html>

<html>

<head>

<title>NEW PASSWORD</title>


</head>

<body>

<!--slider down data-->

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

            <tr><td>

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#D3D1D1; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

          <div style="height:auto; width:1050px; ">

            

            <!--registration form--><div style="border:0px solid #999999; border-radius:5px; height:auto; width:780px; float:left; margin-left:5px; margin-top:10px;">

    

   <center>

    <form id="form1" name="form1" method="post" action="confirmpwd.php" style="margin:auto;" >

              <table>

              <tr>

                    <td height="35" colspan="2"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:25px; color:#960A0C;">Change Password</td>

                  

                </tr>

           

<tr>

<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">

NEW PASSWORD</td>

 <td><input type="password" name="pwd" ></td>

</tr>



<tr>

<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">CONFIRM PASSWORD</td>

<td><input type="password" name="pwd1"></td>

</tr>
<tr>

<td></td>

<td >

<input type="submit" name="confirm1" value="Confirm" >

</td>

</tr>

</table>

               

              </form ></center>

            

            </div></div><!--registration form-->

              

              </td></tr>         

             </table>           

                       

        </div><!--slider down close-->


         

 

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

<?php
session_start();

include ('connection.php');
if( (isset($_POST["confirm1"])))
			{ 
$email=$_SESSION['email'];

$password=$_POST['pwd'];

$password1=$_POST["pwd1"];

$pwd=md5($password);
$pwd1=md5($password1);
if($pwd==$pwd1)
{
$que="update login set password='$pwd' where username='$email' ";
					$row=mysql_query($que);
					$count=mysql_num_rows($row);
					
					if ($count==0)
					{
						mysql_query("update signup set password='$pwd' where email='$email'");
						echo "<script>alert('Successfuly Change Password')</script>";
						include ('index1.php');
						
					}
	
}
}
else {
	echo "their is problem";
}


?>