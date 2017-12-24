<!DOCTYPE html>
<html lang="en">
<html>

<script type="text/javascript">
    



</script>
<?php include ('connect.php');
?>





<?php





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






<style type="text/css">
    body{

     
   
    height: 100%;


    background: url("img/kentomoto.gif")no-repeat center center fixed;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    }

</style>




<head>
<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Main</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Main</title>

 <?php } ?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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



<head>
    

<div class="container">
<div class="container">

</div>
</div>
</head>

<?php include 'banner.php' ?>



<body>

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