<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Responsive image slider thumbnail </title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
        <style type="text/css">
            *{padding:0; margin:0;}
         img {max-width:100%; display: block;}
         .cycle-slideshow{
            width:100%;
            max-width: 960px;
            display: block;
            position: relative;
            margin: 50px 200px;
            
         }
         .cycle-pre,.cycle-next {
            width:50px;
            height:50px;
            display: block;
            position: absolute;
            top: 40%;
            z-index: 99999;
            cursor: pointer;
            text-align: center;
            color: #fff;
            font-size: 200%;
         }
         .cycle-pre {margin-left: auto;}
         .cycle-next {right:30%;}
         /* Thumbnails */
         .cycle-pager {
            width:100%;
            text-align: center;
            display: block;
            margin:-40px -160px;
            position: absolute;
            bottom:0;
            z-index: 99999;
            cursor: pointer;
            
         }
         .cycle-pager a{
            display: block;
            margin:0 10px;
            opacity:0.5;
            border:2px solid rgba(255,255,255,0.30);
         }
         .cycle-pager .cycle-pager-active{opacity:1;
         border:2px solid rgba(255,255,255,0.70);
         }
         .cycle-pager .thumb{
            width:15%;
         }
         .thumb{display: block;}
            
        </style>
        
    </head>
    <body>
        <div class="container">
        
  <!-- Slider -->
  <div class="cycle-slideshow" data-cycle-pager-template="<a class='thumb' href='#'> <img src='{{src}}' > </a>">
    
    <span class="cycle-pager"></span>
    <span class="cycle-pre">&#9001;</span>
    <span class="cycle-next">&#9002;</span>
    
    	<?php

session_start();

		mysql_connect("localhost","indrajeetsingh","8605244154");
		mysql_select_db("indrajeetsingh");
				$query="select * from product limit 0,4";
				$result=mysql_query($query);
				while($row=mysql_fetch_array($result))
				if($row!=0)
				{	
				
				?>
    
        <img src="miage/<?php echo $row['image1'];?>">
        <!--<img src="img/2.jpg" alt="suchit">
        <img src="img/3.jpg" alt="suchit">
        <img src="img/4.jpg" alt="suchit">
        <img src="img/5.jpg" alt="suchit">/-->
    
    
  </div><?php
				}
				?>
    <!-- End -->
    </div>
    </body>
    
</html>