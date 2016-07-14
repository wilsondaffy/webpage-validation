<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travel Planner</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<?php
// define variables and set to empty values
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
}
	
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-color: #527294">
			<div class="row"><br>
				<div class="col-md-4"><div style="float:right">
					<img alt="Bootstrap Image Preview" src="images/worldmap.png" width="150px" height="150px" class="img-thumbnail">
				</div></div>
				<div class="col-md-8">
					<div class="page-header"><div style="float:right">
						<h1>
							Planning!!! <small style="color: #8f9699">Amazing Tours</small>
						</h1></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default navbar-inverse" role="navigation">
						<div class="navbar-header">
							 
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="home.html">Travel Planner</a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="home.html">Home</a>
								</li>
								<li>
									<a href="Service.html">Services</a>
								</li>
								<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="Gallery.html">Images</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="Gallery.html">Special Events</a>
										</li>
										<li class="divider">
										</li>
										<!--<li>
											<a href="#">Contact details</a>
										</li>-->
									</ul>
								</li>
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control">
								</div> 
								<button type="submit" class="btn btn-default">
									Submit
								</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="sign.php">Sign Up</a>
								</li>
								<li class="active">
									<a href="login.php">Login</a>
								</li>							
								<li>
									<a href="Contact.html">Contact Us</a>
									
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<!--<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</li>-->
							</ul>
						</div>
						
					</nav>
				</div>
			</div>
			<div class="row">
				<!--<div class="col-md-12">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Services</a>
						</li>
						<li class="disabled">
							<a href="#">Gallery</a>
						</li>
						<li class="dropdown pull-right">
							 <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>-->
			</div>
		</div>
	</div>
	<div class="row">
		<!--<div class="col-md-12">
			<div class="carousel slide" id="carousel-64613">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-64613">
					</li>
					<li data-slide-to="1" data-target="#carousel-64613">
					</li>
					<li data-slide-to="2" data-target="#carousel-64613">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src=".\images\1.jpg" width="100%" height="10%">
						<div class="carousel-caption">
							<h4>
								Europe
							</h4>
							<p>
								Best place to visit in Europe, the great palace of Europe.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src=".\images\2.jpg" width="100%" height="10%">
						<div class="carousel-caption">
							<h4>
								North America
							</h4>
							<p>
								Mount Rainier National Park, Washington, USA.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src=".\images\3.jpg" width="100%" height="10%">
						<div class="carousel-caption">
							<h4>
								City Of Belgium
							</h4>
							<p>
								Night Time colourful view of Belgium City.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-64613" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-64613" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div><br><br><br>-->
				<div class="col-md-8">
					<div class="page-header"><div style="float:left">
						<h1>
							Reset your password  <small style="color: #8f9699"></small>
						</h1></div>
					</div>
				</div>
<div class="row" >
		<div class="col-md-12" style="background-color: #527294"><br><br><br><br><br><br>
			<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
					 
					<label for="inputEmail3" class="col-sm-2 control-label" style="font-size: 30px">
						<!--&#x2709; -->
					</label>
					<div class="col-sm-7">
						<h3>We will send you an email to reset your password.</h3><br>
						<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Enter your Email Id">
						<span class="error"  style="color:#8f9699">* <?php echo $emailErr;?></span>
					</div>
					
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="hyperlink">
							 
							<label>
								<a href="home.html" style="color:#8f9699"> Go to home</a> | <a href="sign.php" style="color:#8f9699"> Create a new account.</a>
							</label>
						</div>
					</div>
					<!--<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							 
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>-->
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</div>
				</div>
			</form><br><br><br><br><br><br>
		</div>
	</div>		
		
		
		
		
		
		
			<div class="row">
				<div class="col-md-12">
					<div class="row" >
						<!--<div class="col-md-8">
							<h2>
								Contact Info
							</h2>
							<p>
								Welcome to our Website. We are glad to have you around. If you need to contact us, you can use the details below.
							</p>
							<p>
								<b>Phone :</b><small>022-12345678</small><br><b>Email :<a href="abc@xyz.com" target="_blank"><small>abc@xyz.com</small></a><br><b>Address :</b><small>Rose villa, Rose street, Rose City, xyz.</small>
							</p>
						</div>-->
					<div class="col-md-12"><br>
							
							<p><center>
								 	&copy; Practice Website - Travel PLANNER 2016 
							<br><center></p>
							
						</div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>