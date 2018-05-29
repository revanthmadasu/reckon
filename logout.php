<?php
session_start();
$id=$_SESSION['id'];
$_SESSION=array();
setcookie(session_name(),'',time()-2592000,'/');
session_destroy();
echo $id.' logged out';
echo '<br><a href="index.html">home</a>';
?>