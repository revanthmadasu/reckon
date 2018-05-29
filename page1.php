<?php
 session_start();
 if(isset($_SESSION['id']))
 {
 echo '<h1>'.$_SESSION['id'];
 echo '<br><a href="logout.php">Logout</a>';
 }
 else
 echo '<a href="index.html">Login to continue</a>';
?>