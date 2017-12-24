<!DOCTYPE html>
<html >
<head>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
  <meta charset="UTF-8">
  <title>Halcyon | Login</title>
        <?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:800,600,300'>

      <link rel="stylesheet" href="css/st2.css">

  
</head>

<body>
  <!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<div class="landing">
  <div class="base">
    <div class="image">
      <img src="img/trafalgar1.png"  height="100%" width="100%" />
    </div>
    <div class="copy">
      <div class="logo">
   
      </div>
    <div class="title">

    <br>
       Halcyon Marine <br> Healthcare Systems<br></div>
 
        <div class="text" >

        "The Gold Standard in Maritime Healthcare"

   <img src="img/halcyony.jpg" style="position:absolute;left:60%;width:300px;height: 300px;opacity:0.8;">
</div>
  <div class="allright"> 
   <form method="post" action="login2.php">

   <br>
    <br>
     <br>
        Username
        <br>

      <input style="  color: #282652;
    width: 300px;
    font-size: 90%;
    border-color: #00b8d4;
    padding: 10px;
    border-radius: 5px;
    position: absolute;
    

    background-color:white;
    border:  1px solid #ccc;
    border-color:#00b8d4;
    border-radius: 5px;
    outline: 1;
    height: 1rem;

    font-size: 1rem;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;

    "



      type="text" name="user">
      <br><br><br>
      Password<br>
        <input style="  color: #282652;
    width: 300px;
    font-size: 90%;
    border-color: #00b8d4;
    padding: 10px;
    border-radius: 5px;
    position: absolute;
    

    background-color:white;
    border:  1px solid #ccc;
    border-color:#00b8d4;
    border-radius: 5px;
    outline: 1;
    height: 1rem;

    font-size: 1rem;
    box-shadow: none;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    transition: all .3s;
"


 type="password" name="pass" >

      <br>
   
      <a class="cta" onmousemove="">Login</a>
      <button style="opacity: 0;"class="buts" type="submit" name="submit">login</button>
      </form>
      </div>
    </div>
  </div>
</div>



<?php




if (isset($_POST['submit']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];

$user=stripslashes($user);
$pass=stripslashes($pass);


if ((isset($user))||(isset($pass)) )
{






$sql1="CALL check_user('$user','$pass')";
$quer1 = mysqli_query($c1,$sql1);

$urow = mysqli_fetch_assoc($quer1);

$box=$urow['userId'];

$posId=$urow['positionId'];
$fulln=$urow['fullname'];
  $_SESSION['HorS']=$urow['entityId'];
  if (isset($box)) 
  {
    
    $sql11="CALL check_app('$box','7')";
    $quer11= mysqli_query($c2,$sql11);

    $urow1 = mysqli_fetch_assoc($quer11);
    $boxx=$urow1['applicationId'];


    if (isset($boxx))
    {

                    

        $quer3= mysqli_query($c3,"CALL check_module('$box','23','0')");
          $mrow = mysqli_num_rows($quer3);
          if ($mrow != 0)
          {
  $_SESSION['fn']=($fulln);
    $_SESSION['fn1']=$fulln;
  $_SESSION['uid']=$box;
  $_SESSION["getuser"] = 23;


                    ?>
            <script >
            v='Logged In';

destination="ajaxlog.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      
      }
     }

                  var userlog = "<?php echo utf8_encode($fulln); ?>";
                  swal({
                  title: "Logged in Successful !",
                  text: "Welcome " + userlog + " !",
                  type: "success",
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  setTimeout(function(){
                     window.location.href="admin.php";
                  }, 2000);
                });
     
              </script>

              <?php
          }
          else
          {

            $quer4= mysqli_query($c4,"CALL check_module('$box','24','0')");
            $mrow2 = mysqli_num_rows($quer4);
            if ($mrow2 != 0)
            {
  $_SESSION['uid']=$box;

  $_SESSION['fn']=utf8_encode($fulln);
  $_SESSION['fn1']=$fulln;
      $_SESSION["getuser"] = 24;


                      ?>
            <script >

            v='Logged In';





destination="ajaxlog.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      
      }
     }

                  var userlog = "<?php echo utf8_encode($fulln); ?>";
                  swal({
                  title: "Logged in Successful !",
                  text: "Welcome " + userlog + " !",
                  type: "success",
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  setTimeout(function(){




                     window.location.href="hr.php";
                  }, 2000);
                });
     
              </script>

              <?php
            }
            else
            {
              $quer5= mysqli_query($c5,"CALL check_module('$box','25','0')");
              $mrow3 = mysqli_num_rows($quer5);
              if ($mrow3 != 0)
              {


                          
  $_SESSION["getuser"] = 25;
            $_SESSION['uid']=$box;
            $_SESSION['posId']=$posId;
            $_SESSION['fn']=utf8_encode($fulln);
              $_SESSION['fn1']=$fulln;


$quantum12=mysqli_query($connhalcyon,"SELECT * FROM courseposition WHERE jobid='".$posId."'");
$physics12=mysqli_fetch_assoc($quantum12);
$_SESSION['pn']=$physics12['positionname'];



$quantum=mysqli_query($connhalcyon,"SELECT * FROM cor_progress WHERE userId='".$box."' and posId='".$_SESSION['posId']."'");
$physics=mysqli_fetch_assoc($quantum);
//check the userid in database if they have records
if (!isset($physics['userId']))
{
date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("H:i:s");

$value=$D." ".$T;







mysqli_query($connhalcyon,"INSERT INTO cor_progress(`userId`,`status`,`datetime_start`) VALUES ('".$box."',Pending','".$value."')");

$quantum1=mysqli_query($connhalcyon,"SELECT * FROM courseposition WHERE jobid='".$posId."'");



//get its position to get there courses
while($physics1=mysqli_fetch_assoc($quantum1))              
{

mysqli_query($connhalcyon,"INSERT INTO cor_progress(`userId`,`posId`,`status`,`courseId`,`coursename`) VALUES ('".$box."','".$_SESSION['posId']."','Pending','".$physics1['courseid']."','".$physics1['coursename']."')");

    $quantum2=mysqli_query($connhalcyon,"SELECT * FROM coursemodule WHERE courseid='".$physics1['courseid']."'");
  
      while($physics2=mysqli_fetch_assoc($quantum2))
      {
    
      mysqli_query($connhalcyon,"INSERT INTO mdl_progress(`userId`,`moduleId`,`status`,`quiz_status`) VALUES ('".$box."','".$physics2['moduleid']."','Pending','Pending')");

      $quantum3=mysqli_query($connhalcyon,"SELECT * FROM questions WHERE moduleid='".$physics2['moduleid']."'");


        
        while ($physics3=mysqli_fetch_assoc($quantum3) )
        {
            mysqli_query($connhalcyon,"INSERT INTO result(`questionid`,`moduleId`,`userId`,`score`,`isAnswer`) VALUES ('".$physics3['questionid']."','".$physics3['moduleid']."','".$box."','0','0')");


            
        }

      }
}

          ?>


            <script >
v='Logged In';

destination="ajaxlog.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      
      }
     }




  var userlog = "<?php echo utf8_encode($fulln); ?>";
                  swal({
                  title: "Logged in Successful !",
                  text: "Welcome " + userlog + " !",
                  type: "success",
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  setTimeout(function(){
                     window.location.href="main.php";
                  }, 2000);
                });

              
     
              </script>

              <?php
}
/////////////////////////////////////////////////////////////////// updates
else
{
          ?>


            <script >
v='Logged In';

destination="ajaxlog.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {

        <?php include('loginupdate.php'); ?>
      
      }
     }






              <?php



}
                











              }
              else
              {
                echo'<script>swal({
                  title: "No Access !",
                text: "You have no access on the system",
                type: "error",
                  confirmButtonText: "Okay"
                });</script>';
              }

            }
            
          }

                    
    }
    else
    {
      echo'<script>swal({
      title: "No Access !",
      text: "You have no access on the application",
      type: "error",
      confirmButtonText: "Okay"
      });</script>';
    }

        

              


              
                  
      
      
  
  }
  else
  {
      echo'<script>swal({
        title: "Logged in Failed !",
        text: "Wrong Username or Password !",
        type: "error",
        confirmButtonText: "Okay"
      });</script>';
  }
              



}
 else
  {
      echo'<script>swal({
        title: "Logged in Failed !",
        text: "No Username or Password Entered!",
        type: "error",
        confirmButtonText: "Okay"
      });</script>';
  }
       
} 

else
{

}


?>  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/indexmoko2.js"></script>

</body>
</html>
