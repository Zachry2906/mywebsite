<?php 

session_start();
$_SESSION = [];
session_destroy();
session_unset();

setcookie('id', '', time()-100);
setcookie('key', '', time()-100);

header("Location: login.php");
exit;
?>