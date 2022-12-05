<?php
//logout
session_start();
session_destroy();
$_SESSION['success'] = "" ;
header("Location: index.php");

?>