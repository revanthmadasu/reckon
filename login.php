<?php
if(!isset($_SESSION['id']))
{ $hn='localhost';
 $db='predictor';
$conn=new mysqli($hn,'root','',$db);
 $query='select * from user_details where email_id="'.$_POST['id'].'" and password="'.$_POST['password'].'";';
 $result=$conn->query($query);
 $rows=$result->num_rows;
 $id=$_POST['id'];
 if($rows==1)
 {
    session_start();
    $_SESSION['id']=$id;
 }
 else 
  echo "invalid id/password";
}
 ?>
<html>
    <head>
        <title>
            Predictor
        </title>
        <link rel="icon" href="images/favicon.gif" type="image/gif" sizes="32x32">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
        
        #header 
        {
            position: fixed;
            width: 80%;
            top: 3%;
            right:10%;
            left:10%;
            align:center;
        }
        </style>
    </head>
    <body>
    <div>
    <header role="banner" id="header">
        <nav class="navbar navbar-static-top navbar-inverse" style="background:#000000;">
        <div class="container-fluid">
            <div class="navbar-header">
             <ul class="nav navbar-nav navbar-left ">
                 <li><image src="images/logo.png"></image></li> 
                <li><h3 style="font-family: 'Pacifico', cursive; color:white" align="justify">&nbspPredictor</h3></li>
             </ul> 
            </div>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
             <ul class="nav navbar-nav navbar-right ">
                <li><a ><span class="glyphicon glyphicon-log-in"></span><?php echo $_POST["id"];?></a></li>
                <li><a href='logout.php'><span class="glyphicon glyphicon-user"></span> LogOut</a></li>
            </ul>
            </div>
         </div>
         </nav>
              </header>
        </div>
        <div>
        <section>
        <a href="predict.php">Predict</a>
        </section>
        </div>
    </body>
</html>

<?php
/*
 $hn='localhost';
 $db='predictor';
$conn=new mysqli($hn,'root','',$db);
 if($conn->connect_error) die($conn->connect_error);
 else echo "connected";
 $query='select * from user_details where email_id="'.$_POST['id'].'" and password="'.$_POST['password'].'";';
 echo "<br>";
 $result=$conn->query($query);
 $rows=$result->num_rows;
 $id=$_POST['id'];
 if($rows==1)
 {
    echo "logged in";
    session_start();
    $_SESSION['id']=$id;
    echo '<br><a href="predict.php">Predict</a>';
 }
 else 
  echo "invalid id/password";
 */
 ?>