<?php
$user = 'ayy';
$pass = 'lmao';

	if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    
    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {    
        header('Location: login.html');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }
    
	} else {
    header('Location: index.php');
	}
?>