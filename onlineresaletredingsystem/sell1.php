<?php
include 'navbar2.php';

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sell</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style>
	body{
		background-image: url("sell4.jpg");
	}
	input.txt1{
	  width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	  box-shadow: 10px 10px 5px black;
}
input.ip{
	color:white;
	margin-top:-10px;
		input[type=file] 
    width: 10%;
    background-color: white;
	opacity:0.7;
    color: white;
    padding: 14px 20px;
    margin: 8px 60PX;
    border: none;
	font-weight:bold;
font-family:Arial;
    border-radius: 4px;
    cursor: pointer;
	  -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
	 box-shadow: 10px 10px 5px black;
}


/* input[type=file]:hover {
 background-color: #00E6FF;
 width:20%;
   box-shadow: 10px 10px 5px black;

	
}*/
	
textarea.txt2{
  width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	  box-shadow: 10px 10px 5px black;
}
	
	legend.legend{
		width:40%;
		height: auto;
		border:2px dashed transparent;
		color:white;
		padding-bottom: 20px;
		
	}
	legend.legend1{
		width:40%;
		height: auto;
		border:2px dashed transparent;
		color:#929299;
		padding-bottom: 20px;
		margin-top:150px;
		font-family: Copperplate Gothic Light;
	}

	fieldset.fs{
		width: 60%;
		height:500px;
		border:2px groove tranparent;
		
		margin:100px 0px;
	/*	background-image: url("sellwala.jpg"); */
	}
	fieldset.fs1{
		width: 50%;
		height:400px;
		margin-top:0px;
		border:2px groove #929299 ;
		box-shadow: 10px 10px 5px black;
	}	
	
	input[type=submit] {
    width: 10%;
    background-color: #908888;
    color: white;
    padding: 14px 20px;
    
    border: none;
	font-weight:bold;
font-family:Arial;
margin-top:50px;
    border-radius: 4px;
    cursor: pointer;
	  -webkit-transition: width 2s; /* For Safari 3.1 to 6.0 */
    transition: width 2s;
}


input[type=submit]:hover {
 background-color: #00E6FF;
 width:20%;
   box-shadow: 10px 10px 5px black;
}
}
	input.button{
		margin:30px 0px;
	}
	label.li{
		color:#929299;
		
		font-family: Copperplate Gothic Light;
	}
	select.sel{
		  width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
		  box-shadow: 10px 10px 5px black;

}
p.ph{
	color:white;
}

	
</style>
</head>

</center>
<body>
	<center>
	<fieldset class="fs">
		<legend class="legend">Product Information</legend>
		<form action="image.php" method="post" enctype="multipart/form-data">
			<label class="li">Product Name:</label><br />
			<input class="txt1" type="text" name="product" placeholder="Enter product name"> <br> 
			<label class="li">Product Price: </label><br />
			<input class="txt1" type="text" name="price" placeholder="Enter Price" > <br> <br>
			<label class="li">Description:</label><br>
			<textarea class="txt2" type="text" name="description" placeholder="Enter Description" > </textarea> <br>
			<label class="li"   >product Category: </label><br>
			<select class="sel"  name="category"  >
				<option value="mobile"  placeholder="Select"></option>
				<option value="mobile">Mobile</option>
  				<option value="camera">Camera</option>
  				<option value="furniture">Furniture</option>
  				<option value="Laptop">Laptop</option>
				<option value="music">Music</option>
				<option value="book">book</option>
			</select> <br><br>
			<fieldset class="fs1" >
				<legend class="legend1" > Upload image </legend>
				
				<!--	<p class="ph" >image1</p> --><input class="ip" type="file" name="image1" value="1024" style="color:black; ">
				<!--	<p class="ph" >image2</p> --><input class="ip" type="file" name="image2" value="1024" style="color:black; ">
				<!--	<p class="ph" >image3</p>--><input class="ip" type="file" name="image3" value="1024"style="color:black;" >
				<!--	<p class="ph" >image4</p>--><input class="ip" type="file" name="image4" value="1024"style="color:black;">
				<!--	<p class="ph" >image5</p>--><input class="ip" type="file" name="image5" value="1024"style="color:black;"> <br>
				
			</fieldset> 
			<input class="button" type="submit" name="submit" value="SUBMIT"><br />
		</form>
	</fieldset>
	
</body>
</html>