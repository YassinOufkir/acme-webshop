<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="storestyle.css" rel="stylesheet">
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
						<li><a href="#" data-toggle="modal" data-target="#shoppincart"><img src="img/shoppingcart.png" width="30" height="30"></a></li>
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

<div class="modal fade text-center" id="shoppincart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog"  role="document">
    <div class="modal-content" id="logwindow">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel"><b>Shoppingcart</b></h3>
      </div>
      <div class="modal-body">
          <div class="form-group" id="shoppingproductss">
          	<h4>Your Products</h4>
            <img src="img/Rifle/rifle1.png" width="100" height="40" class=" miniproducts img-responsive">
            <img src="img/Rifle/rifle3.png" width="100" height="40" class=" miniproducts img-responsive">
            <img src="img/Shotguns/shotgun3.png" width="100" height="40" class=" miniproducts img-responsive">
             </div>
             <div>
             <input  class="buttonproducts" type="submit" name="submit" value="delete product">
            <input  class="buttonproducts" type="submit" name="submit" value="delete product">
            <input  class="buttonproducts" type="submit" name="submit" value="delete product">

             </div>
          <div class="form-group">
          </div>
          <div class="form-group">
          </div>
      </div>
      <div class="modal-footer">
<<<<<<< HEAD
      	<button type="button" class="btn btn-primary">Check out</button>
=======
      	<button type="button" class="btn btn-primary">Order</button>
>>>>>>> f2f9f6644430632cadaabf5ff7c3a79d4eb10b0e
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
		</div>
		</div>
		<div id="header" class="row">
			<div id="logo">
				<h1><b>STORE</b></h1>
				
			</div>
			<div class="col-lg-12" id="headerimg">
				<img src="img/sliderphoto1.jpg" class="img-responsive">
				
				
			</div>
		</div>
		
		
		<div class="midcontent">
			
			<div id="text" class="text-center">
				<p>
					<h1 class="hqatitle">Assault Rifles</h1>
					<hr>
				</p>
			</div>
			<div class="row" id="gallery" id="storeitem">
				<div class="col-xs-3">
					<div class="thumbnail" >
						<h3><b>Famas F1</b></h3>
						<img src="img/Rifle/rifle1.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>2</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Rifle/rifle2.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>12</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Rifle/rifle3.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>9</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Rifle/rifle4.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>7</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
			</div>
			<div id="text2" class="text-center">
				<p>
					<h1 class="hqatitle">Shotguns</h1>
					<hr>
				</p>
			</div>
			<div class="row" id="gallery" id="storeitem">
				<div class="col-xs-3">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Shotguns/shotgun1.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>3</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Shotguns/shotgun2.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>3</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Shotguns/shotgun3.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>15</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail">
						<h3><b>Famas F1</b></h3>
						<img src="img/Shotguns/shotgun4.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>21</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
			</div>
			<div id="text2" class="text-center">
				<p>
					<h1 class="hqatitle">Pistols</h1>
					<hr>
				</p>
			</div>
			<div class="row" id="gallery">
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail2">
						<h3><b>Famas F1</b></h3>
						<img src="img/Pistols/pistol1.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>4</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail2">
						<h3><b>Famas F1</b></h3>
						<img src="img/Pistols/pistol2.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>4</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail2">
						<h3><b>Famas F1</b></h3>
						<img src="img/Pistols/pistol3.png" width="300" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>4</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
						</div>
					</div>
				</div>
				
				<div class="col-xs-3" id="storeitem">
					<div class="thumbnail2">
						<h3><b>Famas F1</b></h3>
						<img src="img/Pistols/pistol4.png" width="250" height="122" class="img-responsive">
						<div class="weps">
							<h4>$1199,00</h4>
							<p>Available stock : <b>4</b></p>
							<p>A mid to long rifle, perfect for assault combat. Available with Red-Dot Scope</p>
						</div>
						<div class="sbutton">
							<input type="submit" name="submit" value="Add to cart">
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="js/bootstrap.js"></script>
		</body>
	</html>