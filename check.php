<?php
	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
 	
    if (($_POST['username'] != $user) || ($_POST['password'] != $pass)) {    
        echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log In - wrong</a></li>";
    } elseif(($_POST['username'] == $user) || ($_POST['password'] == $pass)) {
        echo "<li><a href='#' data-toggle='modal' data-target='#login'>Welcome back</a></li>";
    }
    
	} else {
    	echo "<li><a href='#' data-toggle='modal' data-target='#login'>Log In</a></li>";
	}
?>