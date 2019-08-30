<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
						<li >
							<a href="">Sell</a>
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
				
						</li>
					</ul>
				</div>
				
			</nav>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>