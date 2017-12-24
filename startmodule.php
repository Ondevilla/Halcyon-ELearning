
<!DOCTYPE html>
<html lang="en">
<html>
<?php


include("dbcon.php");

include("connect.php");

include("importscript.php");









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


  
      <link rel="stylesheet" href="css/cd.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/Fontmoken.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->


<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>



<style type="text/css">

.container {
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  height: 500px;
 
}

.clear {
  clear: both;
}

.progress_bar {
  max-width: 820px;
  width: 80%;
  margin: 5px auto 0;
  position: relative;
  height: 50px;
  z-index: 0;
}
.progress_bar hr.all_steps {
  width: 80%;
  height: 50px;
  border: none;
  background: #ffffff;
  border-bottom: 1px solid #fff;
  position: absolute;
  bottom: 10px;
  left: 10%;
  z-index: 1;
}
.progress_bar hr.current_steps {
  width: 0%;
  border: 0;
  height: 50px;
  background: #0099cc;
  position: absolute;
  bottom: 12px;
  left: 10%;
  z-index: 3;
}
::-webkit-scrollbar {
display: none;
}
.progress_bar div.step {
  float: left;
  width: 20%;
  height: 50px;
  text-align: center;
  font-size: 12px;
  color: #ccc;
  position: relative;
  text-shadow: 1px 1px #fff;
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  -ms-transition: all 0.3s ease-in;
  -o-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
}
.progress_bar div.step:before {
  position: absolute;
  width: 12px;
  height: 12px;
  border-radius: 20px;
  border: 2px solid transparent;
  background: #0099cc;
  bottom: 14px;
  left: 50%;
  margin-left: -6px;
  content: '';
  z-index: 4;
  display: none;
}
.progress_bar div.step:after {
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 20px;
  border: 2px solid #DDDDDD;
  background: #DDDDDD;
  bottom: 12px;
  left: 50%;
  margin-left: -8px;
  content: '';
  z-index: 2;
}
.progress_bar div.step.current {
  color: #222;
}
.progress_bar div.step.current:before {
  display: block;
}
.progress_bar div.step.complete {
  color: #888;
  cursor: pointer;
}
.progress_bar div.step.complete:before {
  display: block;
}
.progress_bar div.step.complete:hover {
  color: #555;
}

#blocks {
  width: 100%;
  position: relative;

}
#blocks .block {
  position: absolute;
  width: 100%;
  left: 100%;
  height: 100%;
}
#blocks .block .wrap {
  width: 80%;
  margin: 0 auto;
} 

/* CSS BUTTON By http://codepen.io/daneden/pen/rcFJE*/
.butt {
  /* Additions */
  cursor: pointer;
  margin-right: 5px;
  /* End Additions */
  font-size: .825em;
  text-decoration: none;
  font-weight: 700;
  padding: .35em 1em;
  background-color: #0099cc;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  border-radius: 3px;
  color: rgba(0, 0, 0, 0.6);
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2), inset 0 1px 2px rgba(255, 255, 255, 0.7);
}

.butt:hover, .butt.hover {
  background-color: #fff;
}

.butt:active, .butt.active {
  background-color: #d0d3d6;
  background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
  box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.2), inset 0 2px 5px rgba(0, 0, 0, 0.2), 0 1px rgba(255, 255, 255, 0.2);
}


@media screen and (min-width: 320px) {


    .paasaka
    {
max-width:420px; 
height:50%;
    }
 
        .cortex
    {
width:380px;

height:280px;

    }
.pa
{
height: 480px;
}
.sukat
    {
     width:380px;

height:280px;
    }

}

@media screen and (min-width: 768px) {


    .paasaka
    {
max-width:750px; 
height:70%;
    }
  
        .cortex
    {
width:720px;
height:400px;

    }
.pa
{
height: 600px;
}
.sukat {
        width:720px;
height:400px;
    }

}

@media screen and (min-width: 1024px) {

    .paasaka
    {
max-width:980px; 
height:85%;
    }
        .cortex
    {
width:950px;
height:450px;
}
.pa
{
height: 600px;
}
.sukat {
      width:950px;
height:450px;
    }
}


@media screen and (min-width: 1440px) {


    .paasaka
    {
max-width:1330px; 
height:90%;
    }

    .cortex
    {
width:1300px;
height:600px;

    }
.pa
{
height: 800px;
}
.sukat {
        height: 600px;
        width: 1300px;
    }
}






</style>



</head>
<body>

<?php include 'banner.php' ?>


<!--Navbar-->



<?php



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;




$_SESSION["idmod"] =  $_GET["v"]; 




$orangee=mysqli_query($connhalcyon,"SELECT * FROM `mdl_progress` WHERE `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION["idmod"]."'" );

$orge=mysqli_fetch_assoc($orangee);

if($orge['isStart']==1)
{


}

else
{

$dame=mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_start`='$value',`status`='On-going',`isStart`='1' where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION["idmod"]."'");


$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
while ($check = mysqli_fetch_assoc($check1))
{
  $remarks="Start Module : ".$check['modulename'];
  $check11=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

    while ($check111= mysqli_fetch_assoc($check11))
    {
      $remarks1=" from course ".$check111['coursename'];
    }

}
$remarks2=$remarks." ".$remarks1;

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','".$value."','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());

}
?>







<?php 
$kenneth=mysqli_query($dbcon,"SELECT * FROM imagetable where moduleid = '".$_SESSION["idmod"]."'");

$numnins=0;
while($numnin=mysqli_fetch_assoc($kenneth))
{
$numnins=$numnins+1;
$numnina[]=$numnin['imagename'];
$modlinkimg[]="Modalxx".$numnins;
}
for ($xny=0;$xny<$numnins;$xny++)
{


echo  '<div class="modal " id="'.$modlinkimg[$xny].'" style="background-color:black;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >";' ?>
    <div class="modal-dialog paasaka" role="document" >
        <!--Content-->
        <div class="modal-content pa" style="border-radius:20px;">
            <!--Header-->
            <div class="modal-header  btn-info" style="border-radius: 20px 20px 0px 0px;" >
                
                <h4 class="modal-title" style="color:white;" id="myModalLabel">&nbsp;&nbsp;&nbsp;IMAGE</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->



<div class="modal-body">
<?php
echo '<img class="cortex"   src="'.$numnina[$xny].'" >';
?>
</div>
            <!--Footer-->
            <div class="modal-footer">
    
                <button type="button" class="btn btn-info  " data-dismiss="modal">Close</button>
            </div>
        </div>   </form>
        <!--/.Content-->
    </div>
</div>



<?php } ?>







<?php 
$cortez=mysqli_query($dbcon,"SELECT * FROM flashtable where moduleid = '".$_SESSION["idmod"]."'");

$numcor=0;
while($ncortez=mysqli_fetch_assoc($cortez))
{
$numcor=$numcor+1;
$ncorteza[]=$ncortez['flashname'];
$modlinkfla[]="Modalx".$numcor;
}
for ($xny1=0;$xny1<$numcor;$xny1++)
{


echo  '<div class="modal " id="'.$modlinkfla[$xny1].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="background-color:black;">";' ?>
    <div class="modal-dialog paasaka" role="document" >
        <!--Content-->
        <div class="modal-content pa" style="background-color:black;" style="border-radius:20px;">
            <!--Header-->
            <div class="modal-header" style="background-color:black;" >
                
                <h4 class="modal-title" style="color:white;" id="myModalLabel">&nbsp;&nbsp;&nbsp;FLASH</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color:white;">&times;</span>
                </button>
            </div>
            <!--Body-->



<div class="modal-body" style="background-color:black;">
<?php
echo '<embed class="sukat" src="'.$ncorteza[$xny1].'" >';
?>
</div>
            <!--Footer-->
       
        </div>   </form>
        <!--/.Content-->
    </div>
</div>



<?php } ?>










      <br>
<div class="container"  style="overflow-y:scroll;">
  <div class="progress_bar">
      <hr class="all_steps">
      <hr class="current_steps">

      
      <div class="step current"  id="step1" data-step="1">
         <br><br> Overview
      </div>
      <div class="step" id="step2" data-step="2">
        <br><br> Video
      </div>
      <div class="step" id="step3" data-step="3">
        <br><br>  Image
      </div>
      <div class="step" id="step4" data-step="4">
         <br><br> Flash
      </div>
      <div class="step" id="step5" data-step="5">
         <br><br> Quiz
      </div>
  </div>




<div id="blocks" >
  <div class="block" id="block1" style="left: 0%;">
    <div class="wrap">
      <a onclick="step_process(1, 2)" class="btn btn-info btn-sm">Next</a> 
           <div class="container" >  
                <div class="col-md-12"  id="pagination_data1" >  
                </div>  
           </div> 
      <br />
    </div>
  </div>
  <div class="block" id="block2">
    <div class="wrap">
      <a onclick="step_process(2, 1, 'desc')" class="btn btn-info btn-sm">Prev</a><a onclick="step_process(2, 3)" class="btn btn-info btn-sm">Next</a>
       <!-- From Table video displaying video-->
    
           <div class="container">  
                <div class="col-md-12" id="pagination_data">  
                </div>  
           </div>  
     
      <br />
      
    </div>
  </div>
  <div class="block" id="block3">
    <div class="wrap">
       <a onclick="step_process(3, 2, 'desc')" class="btn btn-info btn-sm">Prev</a><a onclick="step_process(3, 4)" class="btn btn-info btn-sm">Next</a>
           <div class="container">  
                <div class="col-md-12" id="pagination_data2">  
                </div>  
           </div>  
      <br />
     
    </div>
  </div>
  <div class="block" id="block4">
    <div class="wrap">
      <a onclick="step_process(4, 3, 'desc')" class="btn btn-info btn-sm">Prev</a><a onclick="step_process(4, 5)" class="btn btn-info btn-sm">Next</a>
           <div class="container">  
                <div class="col-md-12" id="pagination_data3">  
                </div>  
           </div>  
      <br />
     
    </div>
  </div>
  <div class="block" id="block5">
    <div class="wrap">
          <a onclick="step_process(5, 4, 'desc')" class="btn btn-info btn-sm">Prev</a><a class="btn btn-info btn-sm" href="startquiz.php" style="color: black;">Start Quiz</a>
          <div class="container">  
                <div class="col-md-12" id="pagination_data4">  
                </div>  
           </div>   
          <br>
          <br>
      <center>
      <p>


      </p></center>

    </div>
  </div>
</div>
<br class="clear" />
</div>



    <script src="js/index1.js"></script>


<link href="css/Fontmoken.css" rel="stylesheet">


 <script>  
 $(document).ready(function()
 {  
  //video
      load_data();  
      function load_data(page)  
      {  
           $.ajax(
           {  
                url:"videopagi.php", 
    
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  

  //overview
      load_data1();  
      function load_data1(page)  
      {  
           $.ajax(
           {  
                url:"overpagi.php",   
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#pagination_data1').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link1', function(){  
           var page = $(this).attr("id");  
           load_data1(page);  
      });  

  //image
       load_data2();  
      function load_data2(page)  
      {  
           $.ajax(
           {  
                url:"imagepagi.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#pagination_data2').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link2', function(){  
           var page = $(this).attr("id");  
           load_data2(page);  
      });  

  //summary
        load_data3();  
      function load_data3(page)  
      {  
           $.ajax(
           {  
                url:"summarypagi.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#pagination_data3').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link3', function(){  
           var page = $(this).attr("id");  
           load_data3(page);  
      });

  //retake
      load_data4();  
      function load_data4(page)  
      {  
           $.ajax(
           {  
                url:"retakepagi.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#pagination_data4').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link3', function(){  
           var page = $(this).attr("id");  
           load_data4(page);  
      });
 }); 



 </script>  

<?php include ("slider.php"); ?>

</script>

   <!-- SCRIPTS -->
   <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    </html>