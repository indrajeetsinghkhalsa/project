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

<title>Forget Password</title>


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

    <form id="form2" name="form2" method="post" action="" style="margin:auto;" >
	<form name='form3' method="post" action="confirmpwd.php">
              <table>

              <tr>

                    <td height="35" colspan="2"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:25px; color:#960A0C;">Confirm Email And UID NO. TO Change Your Password</td>

                  

                </tr>

           

<tr>

<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">

Email ID:</td>

 <td><input type="text" name="email" ></td>

</tr>



<tr>

<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">UID NO:</td>

<td><input type="tel" name="no"></td>

</tr>
<tr>

<td></td>

<td >

<input type="submit" name="confirm" value="Confirm" >

</td>

</tr>

</table>

               
			  </form>
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



/* if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ header('location:index1.php');

	}

	else

	{ */

if(isset($_POST["confirm"]))

{ 

$email=$_POST['email'];

$uidno=$_POST["no"];

$que="select * from signup where email='$email' and uid_no='$uidno'";
					$row=mysql_query($que);
					$count=mysql_num_rows($row);
					//$row1=mysql_fetch_array($count)
					
					if ($count!=0)
					{
					
					header("location:confirmpwd.php");
					$_SESSION['email1']="$email";
						
					}
					else {
						
						echo "<script>alert('plz provide valide Email and UID NO')</script>";
						
					}
	
}


?>



