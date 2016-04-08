<?php
// standaard wachtwoord en naam omdat we geen database gebruiken
$user = 'ayy';
$pass = 'lmao';
echo "<h1>login</h1>";
if (isset($_POST['username']) && isset($_POST['password'])) {
    echo "post";
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {//aanpassen
            echo "rememberme";
            // cookie bechimmeld na 1 jaar
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'https://raptorcloud.net/');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'https://raptorcloud.net/');
        
        } else {
            echo "rememberme not";
            //\ zapt de cookie weg als de client zijn browser sluit (soort van....)
            setcookie('username', $_POST['username'], false, '/account', 'https://raptorcloud.net/');
            setcookie('password', md5($_POST['password']), false, '/account', 'https://raptorcloud.net/');
        }
  //  header('Location: login.php');
        // error handling (moet nog veranderd worden)
    } 
    else 
    {
        echo '<p>Username/Password Invalid</p>';
    }
    
} else {
    echo '<p>You must supply a username and password.</p>';
}
?>