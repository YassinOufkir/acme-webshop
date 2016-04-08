<?php
// standaard wachtwoord en naam omdat we geen database gebruiken
$user = 'ayy';
$pass = 'lmao';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {
            // cookie bechimmeld na 1 jaar
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'https://raptorcloud.net/school/acme/webshop-acme/');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'https://raptorcloud.net/school/acme/webshop-acme/');
        
        } else {
            // zapt de cookie weg als de client zijn browser sluit (soort van....)
            setcookie('username', $_POST['username'], false, '/account', 'https://raptorcloud.net/school/acme/webshop-acme/');
            setcookie('password', md5($_POST['password']), false, '/account', 'https://raptorcloud.net/school/acme/webshop-acme/');
        }
        header('Location: index.php');
        // error handling (moet nog veranderd worden)
    } else {
        echo 'Username/Password Invalid';
    }
    
} else {
    echo 'You must supply a username and password.';
}
?>