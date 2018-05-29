<?php
 $hn='localhost';
 $db='predictor';
 $conn=new mysqli($hn,'root','',$db);
 if($conn->connect_error) die($conn->connect_error);
 echo 'connected';
 $password=hash('ripemd128',$_POST['password']);
 $query='insert into user_details values ("'.$_POST['name'].'","'.$_POST['emailid'].'","'.$_POST["phone"].'","'.$_POST["dob"].'","'.$password.'");';
 $result=$conn->query($query);
 if(!$result) echo 'INSERT failed : $query<br>'.$conn->error;
 ?>