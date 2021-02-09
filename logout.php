<?php
session_start();
session_destroy();
unset($_SESSION['user_id']);

//session_destory();
$_SESSION = array();
header("Location:login.php");
exit;

?>