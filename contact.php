<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="contactstyle.css" rel="stylesheet">
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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Username:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="text" class="control-label">Password:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      	 <button type="button" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

		<div id="header" class="row">

			<div id="logo">
				<h1><b>Contact</b></h1>
				
			</div>
			<div class="col-lg-12" id="headerimg">

				<img src="img/sliderphoto3.jpg" class="img-responsive">
				
			</div>

		</div>


		
		
		<div class="midcontent">
				<div  class="row" id="receiptform">

					<div class="col-lg-4" id="forms">
						<h2>Contact us</h2>			
						<form method="GET" action="form.php">

  							<div class="form-group">
   								<label for="exampleInputEmail1">Name</label>
    							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  							</div>
 					 		<div class="form-group">
    							<label>Email adress</label>
   								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  							</div>
  							<div class="form-group">
   								<label for="exampleInputFile">Comment</label>
    							<textarea class="form-control" id="message-text" rows="11" cols="50"></textarea>
    					
 							</div>
  							<div id="submitbutton">
  								<button type="submit" class="btn btn-default"><b>Submit</b></button>
  							</div>
						</form>	
					
					</div>

					<div class="col-lg-4">
						
					</div>

					<div class="col-lg-4" id="contactgegevens">
						<h2 class="#">Contact information</h2>

						<ul class="info">
							<li> <div id="glyphs" class="glyphicon glyphicon-earphone"></div><label>015-1234567</label></li>
							<li> <div id="glyphs" class="glyphicon glyphicon-envelope"></div><label>info@HQA.com</label></li>
							<li> <div id="glyphs" class="glyphicon glyphicon-globe"></div><label>www.HQA.com</label></li>
							<li> <div id="glyphs" class="glyphicon glyphicon-road"></div><label>Paulkrugerlaan 52, 1234AB</label></li>
							<li> <div id="glyphs" class="glyphicon glyphicon-time"></div><label>Ma - Vr | 08:30 - 18:00</label></li>
						</ul>
						
						<div id="map" class="maps">
				 			<div id="map"></div>
   					 		<script>
      							function initMap() {
       			 				var mapDiv = document.getElementById('map');
        						var map = new google.maps.Map(mapDiv, {
          						center: {lat: 44.540, lng: -78.546},
          						zoom: 8
        						});
      							}
    						</script>
   							 <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        					async defer></script>
				 			</div>
						</div>
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