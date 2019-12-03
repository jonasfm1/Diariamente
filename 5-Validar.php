<?PHP
session_start();
if(!$_SESSION['Usuario']) {
    header('Location: 1-LoginScreen.php');
    exit();
}