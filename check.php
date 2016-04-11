<?php
	$user = 'user';
	$pass = 'user';
	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
 	echo "<script>console.log('".$_COOKIE['username'] . $_COOKIE['password']."')</script>";
    if (($_COOKIE['username'] != $user) || ($_COOKIE['password'] != $pass)) {    
        echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log in</a></li><script>window.alert('wrong username/password')</script>";
    } elseif(($_COOKIE['username'] == $user) || ($_COOKIE['password'] == $pass)) {
        echo "<li><a href='#' data-toggle='modal' data-target='#login'>Welcome back</a></li>";
    }
    
	} else {
    	echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log In</a></li><script>window.alert('No username/password given')</script>";
	}
?>