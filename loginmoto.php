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

      <link rel="stylesheet"  href="css/st2.css">

  
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
   <form method="post" action="loginmoto.php">

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

include ('HALCYON UPDATE/H_QUERIES.php');
if ((isset($user))||(isset($pass)) )
{







$quer1 =finduser($user,$pass);


$urow = mysqli_fetch_assoc($quer1);

 $box=$urow['userId'];
 $posId=$urow['positionId'];
 $fulln=$urow['fullname'];
 $_SESSION['HorS']=$urow['entityId'];
 $_SESSION['fn']=$urow['fn'];
 $_SESSION['fn1']=$urow['fn'];
 $AR=$urow['accessright'];
global $box;
global $posId;
global $fulln;
global $AR;





                    


          if ($AR==23)
          {

          finduser23();

          }
          else
          {

        
            if ($AR==24)
            {
            finduser24();
            }
            else
            {
         
              if ($AR==25)
              {
              finduser25();
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


?> 
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <script src="js/indexmoko2.js"></script>

</body>
</html>
