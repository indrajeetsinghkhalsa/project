<?php session_start();?>
<?php 


if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	include "navbar2.php";
}
else 
{	
	include "navbar3.php";
}
?>

<?php

 $code=$_GET['code'];
			
?>

<!DOCTYPE html>
<html>
<head>
    <title>ORTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/3/ninja-slider.css" rel="stylesheet" />
    <script src="css/3/ninja-slider.js"></script>
    <link href="css/3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="css/3/thumbnail-slider.js" type="text/javascript"></script>
	<link href="css/3/popup.css" rel="stylesheet" />
	<link href="css/3/bootstrap-theme.min.css" rel="stylesheet" />
	 <link href="css/3/style.css" rel="stylesheet" />
	 <link href="css/3/Titile.css" rel="stylesheet" />
	  <link href="css/3/button.css" rel="stylesheet" />
	  	  <link href="css/3/table.css" rel="stylesheet" />
		   <link href="css/3/Recent.css" rel="stylesheet" />
		   		   <link href="css/3/Buy.css" rel="stylesheet" />
		   		   <link href="css/3/phara.css" rel="stylesheet" />


	    <link href="css/3/bootstrap.min.css" rel="stylesheet" />
		<style>
			fieldset.pd{
				width:40%;
				border: 2px solid red;
			}
			div.container{
				width:200px;
				height: 200px;
			}
		</style>
</head>

<body>
<?php
require '../connection.php';
$query="select * from product2 where id='$code'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
	if($row!=0)
{
	
?>

    <!--start-->

    <div style="width:1000px";><!--badawala slider--->
        <div id="ninja-slider" style="float:right;">
            <div class="slider-inner">
                <ul>
                   <li><a class="ns-img" href="image1/<?php echo $row['image1'];?>"></a></li>
                    <li><a class="ns-img" href="image1/<?php echo $row['image2'];?>"></a></li>
                    <li><a class="ns-img" href="image1/<?php echo $row['image3'];?>"></a></li>
                    <li><a class="ns-img" href="image1/<?php echo $row['image4'];?>"></a></li>
                    <li><a class="ns-img" href="image1/<?php echo $row['image5'];?>"></a></li>
                   
                </ul>
            </div>
        </div>
        <div id="thumbnail-slider" style="float:right;">
            <div class="inner">
                <ul>
              
                     <li>
                        <a class="thumb" href="image1/<?php echo $row['image1'];?>"></a>
                    </li>
                    <li>
                        <a class="thumb" href="image1/<?php echo $row['image2'];?>"></a>
                    </li>
                    <li>
                        <a class="thumb" href="image1/<?php echo $row['image3'];?>"></a>
                    </li>
                    <li>
                        <a class="thumb" href="image1/<?php echo $row['image4'];?>"></a>
                    </li>
                    <li>
                        <a class="thumb" href="image1/<?php echo $row['image5'];?>"></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

<h2 class="pr"><strong>PRODUCT DETAIL</strong></h2>
<p class="s3">Product Name:  <?php echo $row['p_name']?></p>
<p class="s1">Price:  		 <?php echo $row['price']?></p></br>
<p class="s2">Description:   <?php echo $row['description']?></p>
<?php
if(isset($_SESSION['email'])&&isset($_SESSION['pwd']))
{
	?>
<a href="pay.html">
<button class="Buy"  >Buy</button>
</a>
<?php
}
else
{
	echo "<script>alert('plz login');<script>";
	
}?>
</form>
<?php
}?>
