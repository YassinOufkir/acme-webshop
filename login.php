<?php
// standaard wachtwoord en naam omdat we geen database gebruiken
$user = 'user';
$pass = 'user';
if (isset($_POST['username']) && isset($_POST['password'])) {
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {
            // cookie bechimmeld na 1 jaar
            setcookie('username', $_POST['username'], time()+60*60*6);
            setcookie('password', $_POST['password'], time()+60*60*6);
        
        } else {
            // zapt de cookie weg als de client zijn browser sluit (soort van....)
            setcookie('username', $_POST['username'], false);
            setcookie('password', $_POST['password'], false);
        }
        header('Location: index.php');
        // error handling (moet nog veranderd worden)
    } 
    else 
    {
        echo '<script>console.log("Wrong password/username")</script>';
    }
    
} else {
    echo '<script>console.log("No inputs")</script>';
}
?>