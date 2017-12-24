<!DOCTYPE html>
<html lang="en">
<html>

<?php

session_start();
include("dbcon.php");

if(isset($_SESSION["uid"]))



{










if($_SESSION["getuser"] != 24) //ADMIN

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
<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Maintenance</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Maintenance</title>

 <?php } ?>

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


  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link href="css/Fontmoken.css" rel="stylesheet">
      <link rel="stylesheet" href="css/yesno.css">

</head>







<body>
    
<?php include 'bannerhr.php' ?>

    <!--Intro content-->

   


                              <div class="full-bg-img flex-center" style="z-index:-10;">
                         <div class="container ">
                         <div class="row">     
                         <div class="col-md-6">
<!--Card-->
<div id ="cardo" class="card-overlay">


    <!--Content-->
    <div class="text-center">
        <div class="card-block">
            <h1><i class="fa fa-book" style="font-size: 210px;"></i></h1>
            <h3>Courses</h3>

            <a class="btn btn-info" href="ecourse.php"><i class="fa fa-clone left"></i> View Course</a>
        </div>
    </div>
</div>
<!--/.Card-->

</div>

<div class="col-md-6">

<!--Card-->
<div id ="cardo" class="card-overlay">


    <!--Content-->
    <div class="text-center">
        <div class="card-block">
            <h1><i class="fa fa-desktop" style="font-size: 200px;"></i></h1>
            <h3>Module</h3>

            <a class="btn btn-info" href="emodule.php"><i class="fa fa-clone left"></i> View Module</a>
        </div>
    </div>
</div>
<!--/.Card-->


</div>
</div>
</div>

      
    <!--/Intro content-->
</div>
</div>

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