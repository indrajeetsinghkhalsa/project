<?php session_start();?>
<?php 


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	include "navbar2.php";
}
else 
{
	include "login.php";
}
?>
 


<!--slider down data-->

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

               <tr><td>   <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  LAPTOP %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->  

			 <table align="left">

               <tr style="height:200px; width:820px ">

             <?php
			 
			 
			/*  $_SESSION['name']=$_GET['item']; */

			 include('connection.php');
			
			if((isset($_POST['item'])) || ($_GET['item']))
			{
				$item1=$_POST['item'];
				$item2=$_GET['item'];
			 $query="select * from product2 where category='$item1' or category='$item2'";

			 $result=mysql_query($query);

			 $i=1;

				while($row=mysql_fetch_array($result))
				if($row!=0)
				{

		?>

                   <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; border:0px solid #000000;border-radius:15px;margin-top:10px;" align="center"><a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><img src="image1/<?php echo $row['image1'];?>" height="140" width="190" ></div> 

                    <div style="height:120px; width:215px; border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['p_name'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Category:</td>

                    <td colspan="2" style=" margin-left:5px;"></b><?php echo $row['category'];?></td>

                    </tr>

                    <tr>

                    <td height="20"><strong>Price:&nbsp;</strong></td>

                    <td style="color:#FF0000; width:10px;">Rs. </td>

                    <td><?php echo $row['price'];?> </td>

                    </tr>

                    </table>



                   <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                           </tr>

                    </table></div>

          </div>

            

                     </div>

                  </td>

		<?php if($i%4==0)

		{?>

     </tr>

     

		<?php	

		}

	$i=$i+1;

				}
				else {
					
					if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	echo "<Script >alert('Search Item Not Found');</Script>";
		header('location:index1.php');
}
else 
{
	echo "<Script >alert('Search Item Not Found');</Script>";
		header('location:index.php');
}
		
					}
	}
	else {
		echo "<Script scr='index1.php'>alert('their is problem')</Script>";
		}

?> 

           

 </table>

                                  <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

                                               <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Product %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

</td>

                           </tr>

                           

                           <tr><td>&nbsp;</td></tr>

                    </table><!--slider down close--><?php
?>