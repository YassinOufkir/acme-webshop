<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-static-top" id="navbar">
			
			<div class="container">
				
				<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				
				<div class="collapse navbar-collapse navHeaderCollapse" id="menu">
					<a href="index.php" class="navbar-brand" id="nametag"><b>High Quality Arms</b></a>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="store.php"><b>STORE</b></a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php include 'check.php'; ?>
						<li><a href="#"><img src="img/twitter.png" width="20" height="16" ></a></li>
						<li><a href="#"><img src="img/insta.png" width="20" height="20" class="socialmedia"></a></li>
						<li><a href="#"><img src="img/facebook.png" width="20" height="20" class="socialmedia"></a></li>
						<li><a href="#"><img src="img/shoppingcart.png" width="30" height="30"></a></li>
					</ul>
					
				</div>
			</div>
		</div>
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog"  role="document">
				<div class="modal-content" id="logwindow">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title" id="exampleModalLabel">Log in</h3>
					</div>
					<form name="login" method="post" action="login.php">
						<div class="modal-body">
							<div class="form-group">
								<label for="recipient-name" class="control-label">Username:</label>
								<input name="username" type="text" class="form-control" id="recipient-name">
							</div>
							<div class="form-group">
								<label for="text" class="control-label">Password:</label>
								<input name="password" type="password" class="form-control" id="recipient-name">
							</div>
						</div>
						<div class="modal-footer">
							<label for="text" class="control-label">remember me</label><input type="checkbox" name="rememberme" value="false">
							<input type="submit" name="submit" value="submit" class="btn btn-primary"S>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="header" class="row">
			<div id="logo">
				<img src="img/logo2.png" alt="Header Logo">
				<h1>We Deliver <br> You Destroy!</h1>
				
			</div>
			<div class="col-lg-12" id="slider">
				<div id="the-slider"  class="carousel slide  hidden-xs" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#the-slider" data-slide-to="0" class="active"></li>
						<li data-target="#the-slider" data-slide-to="1"></li>
						<li data-target="#the-slider" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/9e139d84b7a317a16157564ca75f2d8c.gif" class="img-responsive" alt="gifstart" style="width: 1920px; height: 721px; ">
						</div>
						<div class="item">
							<img src="img/view.jpg" class="img-responsive" style="width: 1920px; height: 721px;">
						</div>
						<div class="item">
							<img src="img/Rifle.png" class="img-responsive" style="height: 721px; width: 1920px;">
						</div>
					</div>
					
					
				</div>
				
				
			</div>
		</div>
		
		
		<div class="midcontent">


				
				<div id="text" class="text-center">	
					<p>
						<h1 class="hqatitle">The HQA Team</h1>
						<hr>
					</p>
				</div>


				
			<div class="abouttext text-center">

				We from HQA are trained profesionals in selling, preparing and guiding fire arms, our knowledge about fire arms dates back to the WWII.<br/><br/>
				If you need information and guidance, HQA is the place to be! Check out our <a href="contact.html" style="color: red;">ABOUT</a> page if you need any kind help. <br/><br/>


					We offer quick and completly FREE shipping, worldwide.<br/><br/>

					Check out our products at our
				</div>

				<div id="text" class="text-center">	
					<p>
						<h1 class="hqatitle">Montage</h1>
						<hr>
					</p>
				</div>

				<div class="vid">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/o63FwCn8dgo" frameborder="0" allowfullscreen></iframe>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/cevzDKW90j0" frameborder="0" allowfullscreen></iframe>
				</div>

			
			
		
			</div>

		<div id="footer">
			<div class="footerimg">
				<img src="img/logo2.png" width="200" height="200" alt="Header Logo">
			</div>
			<div id="footermenu">
				<ul class="list-inline text-center">
					<li><em><span class="glyphicon glyphicon-copyright-mark"></span> 2016 Copyright HQA. All Rights Reserved</em></li>
					<li><a href="index.html">Home</a></li>
					<li><a href="About.html">STORE</a></li>
					<li><a href="Work.html">Contact</a></li>
				</ul>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="mouse-script.js"></script>
	</body>
</html>