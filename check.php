<?php
$user = 'ayy';
$pass = 'lmao';

	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    
    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {    
        echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log In</a></li>";
    } else {
        echo "<p>Welcome back " . $_COOKIE['username']."</p>";
    }
    
	} else {
    	echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log In</a></li>";
	}
?>