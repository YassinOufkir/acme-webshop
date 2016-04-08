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
		<?php include check.php; ?>
		<div class="navbar navbar-inverse navbar-static-top" id="navbar">
		
			<div class="container">
				
				<button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

				</button>
				
				<div class="collapse navbar-collapse navHeaderCollapse" id="menu">
				<a href="index.html" class="navbar-brand" id="nametag"><b>High Quality Arms</b></a>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="store.php"><b>STORE</b></a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>
						<li><a href="#"><img src="img/twitter.png" width="20" height="16" ></a></li>
						<li><a href="#"><img src="img/insta.png" width="20" height="20" class="socialmedia"></a></li>
						<li><a href="#"><img src="img/facebook.png" width="20" height="20" class="socialmedia"></a></li>
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
      	<button type="button" class="btn btn-primary">Submit</button>
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

							<img src="img/sliderphoto1.jpg" class="img-responsive">

						</div>

						<div class="item">

							<img src="img/sliderphoto2.jpg" class="img-responsive">

						</div>

						<div class="item">

							<img src="img/sliderphoto3.jpg" class="img-responsive">

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

				<div id="profile" class="text-center">	
					<div class="profilefoto" id="left"></div>
					<div class="profilefoto"></div>
					<div class="profilefoto" id="right"></div>
				</div>

				<div class="abouttext text-center">
				<h4>We from HQA are trained profesionals in selling, preparing and guiding fire arms, our knowledge about fire arms dates back to the wwII.
				If you need information and guidance, HQA is the place to be!  </h4>
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













<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>