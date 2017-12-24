<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/Fontmoken.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/yesno.css">





<?php if ($_SESSION['HorS']==1){?>
<header style="background-color:white;">


<center>
<a href="main.php">
<img src="img/halogo.png" class="img-fluid" >
</a>
</center>

</header>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<header style="background-color:white;">


<center>
<a href="main.php">
<img src="img/Shiptoshore.png" class="img-fluid" >
</a>
</center>

</header>

 <?php } ?>








  <!--Navbar-->
<nav >
    <div class="overlay-navigation" >
  <nav role="navigation">
    <ul>

 
                <?php 

include("dbcon.php");


$val="Start Module";
$qwek=mysqli_query($dbcon,"SELECT * FROM `log` WHERE `user`='".$_SESSION['fn']."' and `remarks`='".$val."' ");
$qwekqwek=mysqli_fetch_assoc($qwek);

if(isset($qwekqwek['id']))
{
    echo '<li><a href="empmodule.php" data-content="Main"><i class="fa fa-book"></i><br>Course</a></li>';
}
else
{
    echo '<li><a href="empcourse.php" data-content="Main"><i class="fa fa-book"></i><br>Course</a></li>';

}

?>



      



      <li><a href="employee.php" data-content="Employee"><i class="fa fa-user"></i><br>Employee</a></li>
      <li><a href="#" data-content=""></a></li>
      <li><a href="#" data-content=""></a></li>

      <li><a href="logout.php" data-content="Logout Now"><i class="fa fa-sign-out"></i><br>Logout</a></li>
    </ul>
  </nav>
</div>

<section class="home" >
  <div class="open-overlay" >
    <span class="bar-top"></span>
    <span class="bar-middle"></span>
    <span class="bar-bottom"></span>
  </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

    <script src="js/indexsu.js"></script>
</nav>

