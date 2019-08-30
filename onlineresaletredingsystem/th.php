<!--slider down data-->

            <div style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

            <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  laptop/computer   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->  


			 <table align="center">

               <tr style="height:200px; width:820px ">

             <?php

			 include('connection.php');

			 $query="select * from product2 where category='Laptop'  limit 0,4";

			 $result=mysql_query($query);

			 $i=1;

				while($row=mysql_fetch_array($result))

				{

		?>

                   <td  style=" width:255px; border:0px solid #0000CC;"align="center" >
 
                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:150px; width:230px; border:0px solid #000000;border-radius:15px; margin-top:10px;" align="center"><a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><img src="image1/<?php echo $row['image1'];?>" height="130" width="185"></a></div> 

                    <div style="height:120px; width:215px; border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['p_name'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Category:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['category'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><input type="button" class="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#000000	; border:0px solid #333333; border-radius:5px; color:#FFFFFF; "  } ></a></td>

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

?>

           

 </table>

 <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

                                               <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% TV CLOSE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->



            <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%   MUSIC   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

			 <table  align="center">

               <tr style="height:200px; width:820px">

               <?php

			 include('connection.php');

			 $query="select * from product2 where category='mobile' limit 0,4";

			 $result=mysql_query($query);

			 $i=1;

				while($row=mysql_fetch_array($result))

				{

                 ?>

                   <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left;border:0px solid #000000;border-radius:15px;" align="center"><a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><img src="image1/<?php echo $row['image5'];?>" height="170" width="180"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['p_name'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['category'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['price'];?> </td></tr>

                    </table>



                   <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="demo3.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#000000; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

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

                                  ?>

	  </table>

                                         <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

                                                      <!--%%%%%%%%%%%%%%%%%%%%%%%%%%     MUSIC CLOSE    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->



            <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%           CAMERAS              %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

			 <table align="center">

               <tr style="height:200px; width:820px">

               

                

             <?php

			 include('connection.php');

			 $query="select * from product2 where category='laptop' limit 0,4";

			 $result=mysql_query($query);

			 $i=1;

				while($row=mysql_fetch_array($result))

				{



		?>

                 <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left;border:0px solid #000000;border-radius:15px;" align="center"><a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><img src="image1/<?php echo $row['image4'];?>"     height="170" width="180"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['p_name'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['category'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#000000; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

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

?>

           

        </table>

<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->



            <!--%%%%%%%%%%%%%%%%%%%%%%%%%% % MOBILES  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->        

			 <table  align="center">

               <tr style="height:200px; width:820px">

               

                

             <?php

			 include('connection.php');

			 $query="select * from product2 where category='mobile' limit 0,4";

			 $result=mysql_query($query);

			 $i=1;

				while($row=mysql_fetch_array($result))

				{



		?>

                  <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                    <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9; /* border-radius:10px; */ margin-left:12px; margin-top:20px;"> 

                    <div style="height:170px; width:230px; float:left; margin-top:10px;border:0px solid #000000;border-radius:15px;" align="center"><a href="demo3.php?code=<?php echo $row['id']; ?>" style="text-decoration:none;"><img src="image1/<?php echo $row['image1'];?>"  height="130" width="200" style="border:#00CC33 0px solid; margin-top:10px;"></a></div> 

                    <div style="height:120px; width:215px; float:left;border:0px solid #000000;border-radius:15px; margin-left:8px;">

                    <table border="0">

                    <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['p_name'];?></b></font></td></tr>                   

                    <tr><td height="20"><b>category:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['category'];?></td></tr>

                    <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">Rs. </td><td><?php echo $row['price'];?> </td></tr>

                    </table>



                    <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="demo3.php?code=<?php echo $row['id'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#000000; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

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

?>

     </td>      

        </table>

              <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  MOBILES CLOSE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

                                              <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->







         <!--slider down close-->