<html>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Otrss</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/popup.css" rel="stylesheet">
	<style>
		button.button{
			margin-top:20px;
			color:
		}
		
	</style>
  </head>
  <body>
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php">HOME</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 	 	
					<ul class="nav navbar-nav">
						
							<!--<button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sell</button> -->
							<li >
							<a  onclick="document.getElementById('id01').style.display='block'" >Sell</a>
						</li>
						
						
						<li  class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by <br/>category<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="search.php?item=laptop">laptop</a>
								</li>
								<li>
									<a href="search.php?item=mobile">Mobile</a>
								</li>
								<li>
									<a href="search.php?item=camera">camera</a>
								</li>
								<li>
									<a href="search.php?item=music">music</a>
								</li>
								<li>
									<a href="search.php?item=book">book</a>
								</li>
								<li>
									<a href="search.php?item=furniture">furniture</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" method="post" action="search.php" role="search">
						<div class="form-group">
							<input type="text" name='item' class="form-control">
						</div> 
						<button type="submit"  class="btn btn-default">
							Search
						</button>
										</form>
	<div class="log1">
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
				<div id="id01" class="modal">
					<form class="modal-content animate" method="post" action="login1.php">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close ">&times;</span>
							<div class="container">
								<label><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="uname" required>
								<label><b>Password</b></label>
								<input type="password" placeholder="Enter Password" name="psw" required><br/>
								<input type="checkbox" checked="checked"> Remember me<br/>        
								<button type="submit" name="login" class = "login">Login</button>
							</div>
						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<span class="psw">Forgot <a href="forgetpwd.php">password?</a></span>
								<a href="signup.html">Create account</a>
								<script>// Get the modal
									var modal = document.getElementById('id01');
									// When the user clicks anywhere outside of the modal, close it
									window.onclick = function(event) {
									if (event.target == modal) {
									modal.style.display = "none";
									}
								}
							</script>
						</div>
						</div>
					 </form>
					
 
	</div>
</nav>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>