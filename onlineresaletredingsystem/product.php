<?php session_start();?>
<?php 


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	include"crousel.php";
	include "navbar2.php";
}
else 
{	include "crousel.php";
	include "login.php";
}
?>

<?php

 $code=$_GET['code'];
			
?>

             <table style="height:auto; margin-bottom:200px; width:1050px; margin:auto;border:0px solid #A69688; border-radius:5px; background-color:#FFFFFF; ">



             <tr><td>

        <?php

			include ('connection.php');

			 $query="select * from product2 where id='$code'";

			 $result=mysql_query($query);

			while($row=mysql_fetch_array($result))

		      {

				  $image=$row['image1'];



					$pro_name=$row['product_name'];

					 $price=$row['offer_price'];

					  $code =$row['product_code'];

		  ?>



          <!--left image--> <div style="height:300px; width:400px; border:0px solid #990000; margin-top:10px; float:left;" align="center"><a href="images1/<?php echo $row['image1'];?>"  class="pirobox" title="<?php echo $row['p_name'];?>"><img src="image1/<?php echo $row['image1'];?>" height="150" width="200" style="margin-top:20px; border:0px solid #0000FF;" ></a></div><!--left image close-->



          <!--product details--> <div style="height:auto; width:600px; border:0px solid #990000; float:left;" >

           <div style="height:30px; width:500px;border:0px solid #000000; color:#269FB2; margin-top:20px;" ><b><font size="+1"><?php echo $row['p_name'];?></font></b></div>

          <!--waranty--> <div style="height:60px; width:600px;border:0px solid #000000; margin-top:10px;"  >

           <table><tr><td style="color:#17626C;"><b>Description:</b></td><td><?php echo $row['description'];?></td></tr>

           <tr> <td style="color:#17626C;"><b>Price </b></td><td> <?php echo $row['price'];?></td></tr>



           </table>



           </div><!--waranty close-->

           <!--price--> <div style="height:100px; width:600px;border:0px solid #000000; margin-top:5px;"  >

          <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>MRP</b><br>Rs. <?php echo $row['price'];?></p></div>



            <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>Offer Price</b><br>Rs. <?php echo $row['offer_price'];?></p></div>



             <div style="border:10px solid #E0E0E0; width:100px; float:left;"><p align="center"><b>You Save<br></b>Rs. <b style="color:#FF0000;"><?php echo $row['save'];?></b></p></div>



           </div><!--price close-->

             <div style="border:0px solid #000000; width:500px; height:50px;">

             <form name="form1" method="post" action="cart.php">

            <table><tr><td style="color:#17626C;"><b>Quantity:&nbsp;&nbsp;</b></td><td> <input type="text" name="quantity" value="1" style="width:50px;">

			</td></tr>     </table>

           <div style="height:50px; border:0px solid #000000; width:150px; margin-left:20px; margin-top:10px;" >




<a  href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;">


         <input type="submit" name="submit" value="ADD TO CART" style="border:0px solid #000000; border-radius:10px; height:40px; width:140px; background-color:#7CE1D6; font:bold; ">
</a>


           </div></form></div><!--product details close-->

           </div>

           </td></tr>

        </table>



           <table  style="margin:auto; background-color:#FFFFFF; width:1050px; height:auto; margin:auto;">

           <tr><td>

           <div style="margin:auto; width:1050px; height:auto;">

            <div style="height:30px; width:130px; margin-left:25px; background-color:#269FB2; color:#FFFFFF;border:1px solid #B9B9B9;border-radius:8px 8px 0 0;" align="center"><p style="margin-top:10px;"><b>Quick Overview</b></p></div>



           <table border="0" style="width:1000px; height:auto; border:1px solid #B9B9B9; border-radius:5px;" align="center">

		  <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Product Name</td><td><?php echo $row['product_name'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Product Description</td><td><?php echo $row['description'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Brand</td><td><?php echo $row['brand'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Category</td><td><?php echo $row['category'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Features</td><td><?php echo $row['features'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Plateform</td><td><?php echo $row['plateform'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Model</td><td><?php echo $row['model'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Type</td><td><?php echo $row['type'];?></td></tr>

          <tr><td style="background-color:#F6F6F6; width:300px; font-size:15px;">Display</td><td><?php echo $row['display'];?></td></tr> </table>

		<?php

		}

		?>

         </div>

  </td></tr></table>


