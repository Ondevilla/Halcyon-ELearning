

<html>
<head>
<?php session_start();?>

<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Logs</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Logs</title>

 <?php } ?>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/tableta.css">
<link rel="stylesheet" type="text/css" href="sm/dist/sweetalert.css">

<link rel="stylesheet"  type="text/css" href="css/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<!-- JS -->
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src="js/mdb.min.js"></script>

<script src="sm/dist/sweetalert.min.js"></script>


  
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/datatable.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>

<script type="text/javascript" src="js/tether.min.js"></script>

<?php include 'javascript.php' ?>




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/yesno.css">






<style type="text/css">
#grid-data{
  box-sizing: border-box;
  overflow: hidden;

  border-collapse: collapse;
  
  width: 100%;

  border-radius: .5em;
  box-shadow: 0 0 .5em #000;


}
select {

  /* styling */

  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;

  padding: 0em 1.5em 0em 0.5em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}


/* arrows */

select{
  background:url(images/sort_desc.png) 40px 5px #fcfcfc;
  border-color: blue;
  background-repeat: no-repeat;

}


label
{

  font-size: 1.5em;
}

select:focus {
  background:url(images/sort_asc.png) 40px 15px #fcfcfc;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}






select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}




input[type=text] {
 
    color:white;
    background-color:#33b5e5;
      width:  90%;
 
    text-align: center;


    transition: ease-in-out, width .35s ease-in-out;
    border-radius:2px;
    border-color:2px solid #00bfa5 ;
    font-size: 1em;
    padding:  2px;
    
  }

input[type=text]:focus{
    background:#33b5e5;
    color:white;
width:  90%;
    text-align: center;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9) inset;
    text-shadow: 0 2px 3px rgba(0,0,0,0.1);
    content:"search";
    outline:0;
     border-radius:2px;
       border-color:2px solid #00bfa5 ;
        padding:  2px;
}



th {
  text-align: center;
  color:white;
  padding: 0px;
  font-size: 1em;

}

td 
{
  text-align: center;
      padding-top: 10px;
      padding-bottom: 10px;
      font-size: 0.9em;

}
td span
{


}

#logtbl_info
{
    font-family: 'Agency FB';
}
</style>

<style type="text/css">


input[type=date]
{
  position: relative;
    width: 50px; height: 50px;
    color: black;
       background-repeat: no-repeat;
         background-position: right;
   background-size: 50px 50px;
   border:0;
   cursor:  hand;
}
.date1 {

     background-image: url("images/Calendar1.png");
  
}
 .date2 {

     background-image: url("images/Calendar2.png");

}
.clear{
     background-image: url("images/Calendar3.png");
    position: relative;
    width: 50px; height: 50px;
    color: black;
       background-repeat: no-repeat;
         background-position: right;
   background-size: 50px 50px;
   border:0;
  
}


input[type=date]::-webkit-datetime-edit,input[type=date]::-webkit-inner-spin-button, input[type=date]::-webkit-clear-button {
    display: none;
}

input[type=date]::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 3px;
    right: 0;
    color: black;
     width: 50px; height: 50px;
       opacity:   0;

}
.export{
    position: relative;
    width: 50px; height: 50px;
    color: black;
       background-repeat: no-repeat;
       background-position: 99%;
   background-size: 50px 50px;
   background-color: #558b2f;
   border:0;
  background-image: url("img/xls.jpg");
  cursor:  hand;
text-align:   center; 
padding-top :  15PX;
font-size:  1em;
color:white;

border-radius :   25px 25px 25px 25px;
}

.formatxls{
  
padding:  3px;
   background-color: #558b2f;


border-radius :   25px 25px 25px 25px;
}
.clear[type=date]::-webkit-calendar-picker-indicator {
left:-200px;

}
</style>    


    
  </head>



  <body>
     <!--Navbar-->
<nav style="position:absolute;">
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

<section class="home">
  <div class="open-overlay" >
    <span class="bar-top"></span>
    <span class="bar-middle"></span>
    <span class="bar-bottom"></span>
  </div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

    <script src="js/indexsu.js"></script>
</nav>





<?php if ($_SESSION['HorS']==1){?>
<header style="background-color:white;">
  
<div class="container" >
<div class="col-md-12">
<center>
<a href="admin.php">

<img src="img/halogo.png" class="img-fluid" >
</a>
</center>
</div>
</div>
</header>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<header style="background-color:white;">
  
<div class="container" >
<div class="col-md-12">
<center>
<a href="admin.php">
<img src="img/Shiptoshore.png" class="img-fluid" >
</a>
</center>
</div>
</div>
</header>

 <?php } ?>






 <div class="container">
 <div class="row">
<div class="col-md-3 " style="width: 100%;">
<br>
    <table  width="100%" cellspacing="10" style="  " >     
            <tr >
             <td style="  background-color:#0099CC; font-size:1em; color:white; border-radius :   2px 0px 0px 2px;" ><span> ID</span></td>
            <td style="  background-color:#0099CC;  border-radius :   0px 2px 2px 0px;">
            <input type="text" id="0"  class="employee-search-input">
            </td>
            </tr>
    <tr><td></td><td></td></tr>
            <tr>
              <td style="  background-color:#0099CC; font-size:1em; color:white; border-radius :   2px 0px 0px 2px;" ><span> USER</span></td>
                  <td style="  background-color:#0099CC;  border-radius :   0px 2px 2px 0px;">
            <input type="text" id="1" class="employee-search-input">
            </td></tr>
     <tr><td></td><td></td></tr>
            <tr>
               <td style="  background-color:#0099CC; font-size:1em; color:white; border-radius :   2px 0px 0px 2px;" ><span> REMARKS</span></td>
              <td style="  background-color:#0099CC;  border-radius :   0px 2px 2px 0px;">
            <input type="text" id="2" class="employee-search-input" >
            </td></tr>
        


     <tr><td></td><td></td></tr>



      
              <tr> 
                <td style="  background-color:#0099CC;  font-size:1em;color:white; border-radius :   2px 0px 0px 2px;" ><span> DATE</span></td>
             <td style="  background-color:#0099CC;  border-radius :   0px 2px 2px 0px;">
            <input type="text" id="x">
             </td></tr>
      <tr><td></td><td></td></tr>
             <tr>
             <td>
             </td>
                <td >
            <input type="date" id="date1"   class="date1" >
            <input type="date" id="date2"      class="date2"   disabled>
            <input type="date" id="clear" class="clear">
             </td>
             </tr>
    <tr><td></td><td></td></tr>
            
            <tr>
              <td style="  background-color:#0099CC; font-size:1em; color:white; border-radius :   2px 0px 0px 2px;" ><span> TIME</span></td>
                <td style="  background-color:#0099CC;  border-radius :   0px 2px 2px 0px;">
                <input type="text" id="4" class="employee-search-input" ></td></tr>
                    <tr><td></td><td></td></tr>
      </table>

                            <div class="row formatxls">
                       
                       <span style="width:100%" onclick="dolog('Export Excel')" class="export" id="export">EXPORT EXCEL</span>
                    
                            </div>

</div>


<div class="col-md-9">
<br>
      <table id="grid-data"  class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="info-color-dark">ID</th>
            <th class="info-color-dark">USER</th>
            <th class="info-color-dark">REMARKS</th>
            <th class="info-color-dark">DATE</th>
            <th class="info-color-dark">TIME</th>
      
          
          </tr>
        </thead>

      </table>
</div>
</div>
</div>

  

  </body>
</html>
