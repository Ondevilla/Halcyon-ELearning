<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="css/Fontmoken.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/yesno.css">




<?php if ($_SESSION['HorS']==1){?>
<header style="background-color:white;">
  
<div class="container" >

<center>
<a href="admin.php">
<img src="img/halogo.png" class="img-fluid" >
</a>
</center>
</div>
</header>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<header style="background-color:white;">
  
<div class="container" >

<center>
<a href="admin.php">
<img src="img/Shiptoshore.png" class="img-fluid" >
</a>
</center>
</div>
</header>

 <?php } ?>







  <!--Navbar-->
<nav >
    <div class="overlay-navigation" style="position:fixed;">
  <nav role="navigation">
    <ul>
 
     <li><a href="logg.php" data-content="Manage History Log"><i class="fa fa-book"></i><br>Audit Logs</a></li>
      <li><a href="admin1.php" data-content="Manage Courses & Modules"><i class="fa fa-cogs"></i><br>Maintenance</a></li>
      <li><a href="aemployeetb.php" data-content="View Employees"><i class="fa fa-users"></i><br>Employee Management</a></li>
      <li><a href="#"></a></li>

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

