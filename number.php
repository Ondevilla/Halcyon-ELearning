   <?php include 'javascript.php' ?>
   <?php include 'connect.php' ?>
   <?php 
          
   
          $value=$_GET['v'];


          $Uanswer=strripos( $value, "-id-");
          $iden= strpos($value, "-id-");

          $Uans=substr($value,0,$Uanswer) ;
          $ide=substr($value,$iden+4);


       


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$userpx=$_SESSION['uid'];
$modpx=$_SESSION["idmod"];
$value=$D ." ".$T;

mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_end`='$value' where `userId`='".$userpx."' AND `moduleId`='".$modpx."'");

          $sqlisanswer="UPDATE result AS r INNER JOIN questions AS q ON r.questionid = q.questionid  SET r.isAnswer='1' WHERE r.moduleId='".$modpx."' AND r.userId='".$userpx."' AND r.questionid='".$ide."' ";
           $query1 = mysqli_query($connhalcyon,$sqlisanswer);





           $sqluseranswer="SELECT * FROM result AS r INNER JOIN questions AS q ON r.questionid = q.questionid  WHERE r.moduleId='".$modpx."' AND r.userId='".$userpx."' AND r.questionid='".$ide."'";

              $query2 = mysqli_query($connhalcyon,$sqluseranswer);

              while ($drow=mysqli_fetch_assoc($query2))
              {
                $correct=$drow['questionanswer'];
              }

      ?>
      <script>alert(<?php  echo $correct ?>)</script>
      <?php

              if ($correct == $Uans)
              {


                $sqlisanswer123="UPDATE result AS r INNER JOIN questions AS q ON r.questionid = q.questionid  SET r.score='1' WHERE r.moduleId='".$modpx."' AND r.userId='".$userpx."' AND r.questionid='".$ide."'";
           $query123 = mysqli_query($connhalcyon,$sqlisanswer123);
            }
            else
            {


                    $sqlisanswer123="UPDATE result AS r INNER JOIN questions AS q ON r.questionid = q.questionid  SET r.score='0' WHERE r.moduleId='".$modpx."' AND r.userId='".$userpx."' AND r.questionid='".$ide."'";
                   $query123 = mysqli_query($connhalcyon,$sqlisanswer123);
               }


           ?>
        