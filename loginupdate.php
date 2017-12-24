<?php 
session_start();
include("import.css.js.php");

include("dbcon.php");
//for course

$tuxing="select * from cor_progress where  posId='".$_SESSION['posId']."' and  userId='".$_SESSION['uid']."'";
$run_q=mysqli_query($dbcon,$tuxing);

while($quitprog=mysqli_fetch_assoc($run_q))
{

  $dusk[]=$quitprog['courseId'];

}

$tuxing1="SELECT * FROM fcourse AS f INNER JOIN courseposition AS c ON f.id=c.courseid where f.isActive='1' and `jobid`='".$_SESSION['posId']."' ";
$run_q1=mysqli_query($dbcon,$tuxing1);

while($quitprog1=mysqli_fetch_assoc($run_q1))
{

 $dusk1[]=$quitprog1['courseid'];

}

$result=array_values(array_diff($dusk1, $dusk));
 $countingstar=count($result);


$i2= $_SESSION['uid'];
$i3=$_SESSION['posId'];

  for($wx=0;$wx<=($countingstar-1);$wx++)
      {
            $civic=mysqli_query($dbcon,"SELECT * FROM `courseposition` WHERE `courseid`='".$result[$wx]."'");
            $mydb=mysqli_fetch_assoc($civic);
            //echo $mydb['coursename'];  
            //echo '<option value="'.$result[$wx].'">'.$mydb['coursename'].' </option>';
   




  $selcor=mysqli_query($dbcon,"SELECT * FROM `fcourse` where `id`='".$result[$wx]."'");
  $pickcor=mysqli_fetch_assoc($selcor);
  $i4=$pickcor['coursename'];



  $addcor=mysqli_query($dbcon,"INSERT INTO cor_progress (`userId`,`posId`,`status`,`courseId`,`coursename`) VALUES ('".$i2."','".$i3."','Pending','".$result[$wx]."','".$i4."')");



  $quantum2=mysqli_query($dbcon,"SELECT * FROM coursemodule WHERE courseid='".$result[$wx]."'");
  
      while($physics2=mysqli_fetch_assoc($quantum2))
      {
    
      mysqli_query($dbcon,"INSERT INTO mdl_progress(`userId`,`moduleId`,`status`,`quiz_status`) VALUES ('".$i2."','".$physics2['moduleid']."','Pending','Pending')");

      $quantum3=mysqli_query($dbcon,"SELECT * FROM questions WHERE moduleid='".$physics2['moduleid']."'");


        
        while ($physics3=mysqli_fetch_assoc($quantum3) )
        {
            mysqli_query($dbcon,"INSERT INTO result(`questionid`,`moduleId`,`userId`,`score`,`isAnswer`) VALUES ('".$physics3['questionid']."','".$physics3['moduleid']."','".$i2."','0','0')");


            
        }

      }










date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;





  $check11=mysqli_query($dbcon,"SELECT * FROM `courseposition` where  `courseid`='".$result[$wx]."'");

    while ($check111= mysqli_fetch_assoc($check11))
    {
      $remarks1="Add Course : ".$check111['coursename'];
    }


$remarks2=$remarks1;



$sqllog = "INSERT INTO log (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($dbcon, $sqllog) or die (mysqli_error());
}



///// for module



$short=mysqli_query($dbcon,"SELECT * FROM  cor_progress where `userId`='".$_SESSION['uid']."' and `posId`='".$_SESSION['posId']."'");
while ($shorts=mysqli_fetch_assoc($short))
{
  $shortmodule=mysqli_query($dbcon,"SELECT * FROM coursemodule where `courseid`='".$shorts['courseId']."'");
  while ($lmodule=mysqli_fetch_assoc($shortmodule))
  {
   

   $long="SELECT * FROM mdl_progress where `userId`='".$_SESSION['uid']."' and `moduleId`='".$lmodule['moduleid']."'  ";       

  $live=mysqli_query($dbcon,$long) ;

  while ($die=mysqli_fetch_assoc($live))
  {  

 $livelong[]=$die['moduleId']; 

     $MAHIRAPTOAH=mysqli_query($dbcon,"SELECT * FROM `result` where `userId`='".$_SESSION['uid']."' and `moduleid`='".$die['moduleId']."'");

      while ($mahirapba=mysqli_fetch_assoc($MAHIRAPTOAH))

      {
 $saktonaba[]=$mahirapba['questionid'];

      }


  }    

  }

}



$short1=mysqli_query($dbcon,"SELECT * FROM  cor_progress where `userId`='".$_SESSION['uid']."' and `posId`='".$_SESSION['posId']."'");
while ($shorts=mysqli_fetch_assoc($short1))
{
  $shortmodule1=mysqli_query($dbcon,"SELECT * FROM coursemodule where `courseid`='".$shorts['courseId']."'");
  while ($lmodule1=mysqli_fetch_assoc($shortmodule1))
  {

   $long1="SELECT * FROM modules where `id`='".$lmodule1['moduleid']."'  ";       

  $live1=mysqli_query($dbcon,$long1) ;

  while ($die1=mysqli_fetch_assoc($live1))
  {  

     $livelongf[]=$die1['id'];

        $MAHIRAPTOAH1=mysqli_query($dbcon,"SELECT * FROM `questions` where  `moduleid`='".$die1['id']."'");

      while ($mahirapba1=mysqli_fetch_assoc($MAHIRAPTOAH1))

      {

 $saktonaba1[]=$mahirapba1['questionid'];
      }




  }    

  }

}

   
















$resulta=array_values(array_diff($livelongf,$livelong));
 $counting=count($resulta);

  for($w11=0;$w11<=($counting-1);$w11++)
      {
            $civic1=mysqli_query($dbcon,"SELECT * FROM `coursemodule` WHERE `moduleid`='".$resulta[$w11]."'");
            $mydb1=mysqli_fetch_assoc($civic1);

           // echo $mydb1['coursename'];  
           // echo '<option value="'.$resulta[$w11].'">'.$mydb1['modulename'].' </option>';


////////////////////

 
  mysqli_query($dbcon,"INSERT INTO mdl_progress(`userId`,`moduleId`,`status`,`quiz_status`) VALUES ('".$_SESSION['uid']."','".$resulta[$w11]."','Pending','Pending')");

      $quantum3=mysqli_query($dbcon,"SELECT * FROM questions WHERE moduleid='".$resulta[$w11]."'");


        
        while ($physics3=mysqli_fetch_assoc($quantum3) )
        {
            mysqli_query($dbcon,"INSERT INTO result(`questionid`,`moduleId`,`userId`,`score`,`isAnswer`) VALUES ('".$physics3['questionid']."','".$resulta[$w11]."','".$_SESSION['uid']."','0','0')");


            
        }


 $variable=mysqli_query($dbcon,"SELECT * FROM `coursemodule` where `moduleid`='".$resulta[$w11]."'  ");
while ($var=mysqli_fetch_assoc($variable))
{



mysqli_query($dbcon,"UPDATE cor_progress SET `datetime_end`=NULL,`status`='On-going',`isFinish`='NULL' where `userId`='".$_SESSION['uid']."' and `courseId`='".$var['courseid']."' and `posId`='".$_SESSION['posId']."' ");


}   



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;



$check1=mysqli_query($dbcon,"SELECT * FROM `coursemodule` where  `moduleid`='".$resulta[$w11]."'");
while ($check = mysqli_fetch_assoc($check1))
{
  $remarks23="Update New Module : ".$check['modulename'];
  $check11=mysqli_query($dbcon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

    while ($check111= mysqli_fetch_assoc($check11))
    {
      $remarks123=" from course ".$check111['coursename'];
    }

}
$remarks25=$remarks23.$remarks123;



$sqllog = "INSERT INTO log (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($dbcon, $sqllog) or die (mysqli_error());
}

 //////////////////////


$resultb=array_values(array_diff($saktonaba1,$saktonaba));
 $counting1=count($resultb);


 for ($xml=0;$xml<=($counting1-1);$xml++)
 {

  $isog=mysqli_query($dbcon,"SELECT * FROM questions where `questionid`='".$resultb[$xml]."'");
  while($badong=mysqli_fetch_assoc($isog))
  {
   $parasamerge[]=$badong['moduleid'];
  }

   
 }


if (isset($parasamerge))
{
$resultparamodule = array_values(array_unique($parasamerge));
 $bilangresultparamodule=count($resultparamodule);








  for($w12=0;$w12<=($bilangresultparamodule-1);$w12++)

      { 


            $civic22=mysqli_query($dbcon,"SELECT * FROM `mdl_progress` WHERE `userId`='".$_SESSION['uid']."' and `moduleid`='".$resultparamodule[$w12]."'");
            $mydb22=mysqli_num_rows($civic22);
          
            $civic222=mysqli_query($dbcon,"SELECT * FROM `mdl_retake` WHERE `userId`='".$_SESSION['uid']."' and `moduleid`='".$resultparamodule[$w12]."'");
            $mydb222=mysqli_num_rows($civic222);


           $mydbcount=$mydb22+$mydb222;
           //echo "|[";
        // echo $w12;
         //echo "]|";
          if ($mydbcount==3)
          {
            unset($resultparamodule[$w12]);
          }
          else
          {
            $norow[]=$w12;
          }


           

      }
      //  echo "|";  echo "|";  echo "|";
  if(isset($norow))    
  {    

$bilangnorow=count($norow);
if(isset($bilangnorow))
{





for($w11=0;$w11<=($bilangnorow-1);$w11++)
{

 echo $resultparamodule[$norow[$w11]];
 echo " | ";

           $civic2=mysqli_query($dbcon,"SELECT * FROM `coursemodule` WHERE `moduleid`='".$resultparamodule[$norow[$w11]]."'");
           $mydb2=mysqli_fetch_assoc($civic2);
         
          // echo '<option value="'.$resultparamodule[$norow[$w11]].'">'.$mydb2['modulename'].' </option>';








      $quantum3=mysqli_query($dbcon,"SELECT * FROM questions WHERE moduleid='".$resultparamodule[$norow[$w11]]."'");
      while($uno=mysqli_fetch_assoc($quantum3))
      {
        echo " | ";
     echo      $unos[]=$uno['questionid'];
      }
      $quantum4=mysqli_query($dbcon,"SELECT * FROM result WHERE moduleId='".$resultparamodule[$norow[$w11]]."'");
        while($dos=mysqli_fetch_assoc($quantum4))
      {
        echo " | ";
      echo      $doss[]=$dos['questionid'];
      }
      if (!isset($doss))
      {
        $doss[]="";
      }



$cnn=array_values(array_diff($unos,$doss));
 echo $abs=count($cnn);


        

        for ($cbn=0;$cbn<=($abs-1);$cbn++)
        {
        mysqli_query($dbcon,"INSERT INTO result(`questionid`,`moduleId`,`userId`,`score`,`isAnswer`) VALUES ('".$cnn[$cbn]."','".$resultparamodule[$norow[$w11]]."','".$_SESSION['uid']."','0','0')");

        }
       // while ($physics3=mysqli_fetch_assoc($quantum3) )
        //{
       //     mysqli_query($dbcon,"INSERT INTO result(`questionid`,`moduleId`,`userId`,`score`,`isAnswer`) VALUES ('".$physics3['questionid']."','".$resultparamodule[$norow[$w11]]."','".$_SESSION['uid']."','0','0')");
        //}


 $variable=mysqli_query($dbcon,"SELECT * FROM `coursemodule` where `moduleid`='".$resultparamodule[$norow[$w11]]."'  ");
while ($var=mysqli_fetch_assoc($variable))
{



mysqli_query($dbcon,"UPDATE cor_progress SET `datetime_end`=NULL,`status`='On-going',`isFinish`='NULL' where `userId`='".$_SESSION['uid']."' and `courseId`='".$var['courseid']."' and `posId`='".$_SESSION['posId']."' ");


}   


if($cbn!=0)
{
            date_default_timezone_set('Asia/manila');
            $D=date("Y-m-d");
                      
            date_default_timezone_set('Asia/manila');
            $T=date("g:i:s A");

            $value=$D." ".$T;



            $check1=mysqli_query($dbcon,"SELECT * FROM `coursemodule` where  `moduleid`='".$resultparamodule[$norow[$w11]]."'");
            while ($check = mysqli_fetch_assoc($check1))
            {
              $remarks111111="Update Question Module : ".$check['modulename'];
              $check11=mysqli_query($dbcon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

                while ($check111= mysqli_fetch_assoc($check11))
                {
                  $remarks17=" from course ".$check111['coursename'];
                }

            }
            $remarks3=$remarks111111.$remarks17;



            $sqllog = "INSERT INTO log (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks3."','$D','$T')";
            $login = mysqli_query($dbcon, $sqllog) or die (mysqli_error());
}

}
}/// end ffor

}//end if
}




$remarksall="";
if(isset($remarks2)) //course
{
  $remarksall.="| ".$remarks2;
}
if(isset($remarks25)) // new module
{
  $remarksall.=" | ".$remarks25;
}
if(isset($remarks3))
//new question
{
  $remarksall.=" | ".$remarks3;
}
 $_SESSION['SESSIONS']=$remarksall;



    //echo "<script>window.location.assign('main.php')</script>";

      





?>

<script>
   
  var userlog = "<?php echo utf8_encode($fulln); ?>";
                  swal({
                  title: "Logged in Successful !",
                  text: "Welcome " + userlog + "! \n \n <?php echo $remarksall; ?>" ,
                  type: "success",
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(){
                  setTimeout(function(){
              window.location.assign('main.php');
                     
                  }, 2000);
                });

              
     
              </script>

