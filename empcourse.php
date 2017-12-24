<!DOCTYPE html>
<html lang="en">
<html>
         <?php    
                                session_start();
                                include("dbcon.php"); 
                               include("javascript.php"); 
  
if(isset($_SESSION["uid"]))



{










if($_SESSION["getuser"] != 25) //ADMIN

{
  

        echo"<script>window.open('login2.php','_self')</script>";

        exit();

}





}


else

{


          echo"<script>window.open('login2.php','_self')</script>";
        exit();


}


?>

<head>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | HR</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>




    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


</head>

<style type="text/css">
   body
 
{    



    background: url("img/landing.png")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>



<?php include 'banner.php' ?>


<body>


<!--Mask-->
<div class="view">
    <!--Intro content-->
<div class="container">
<div class="col-md-3">
<br><br><br>



<h1 style="color: white;"><b>Start Module</b></h1>
<form action="empmodule.php" method="post">
 <button type="submit" class="btn btn-info" onclick="dolog('Start Module')" name="startcourse">Start Now!</button>
</form>
</div>
</div>
    <!--/Intro content-->
</div>
<!--/.Mask-->


</body>






    <!-- SCRIPTS -->
    <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</html>