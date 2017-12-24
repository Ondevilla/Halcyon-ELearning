<?php 
function finduser($user,$pass)
{
	global $c1;
	$sql1="SELECT * FROM  account where username='$user' and password='$pass'";
	$quer1 = mysqli_query($c1,$sql1);
	return $quer1;
}

function finduser23()
{
  global $fulln;
  global $box;
  $_SESSION['uid']=$box;
  $_SESSION["getuser"] = 23;
  ?>
  <script >
	            v='Logged In';

	destination="ajaxlog.php?v="+v;
	var xhr=new XMLHttpRequest();
	xhr.open("GET",destination,true);
	xhr.send();
	xhr.onreadystatechange=function() {if(xhr.readyState==4 && xhr.status==200) {}}

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

function finduser24()
{
	global $fulln;
  	global $box;
	$_SESSION['uid']=$box;
    $_SESSION["getuser"] = 24;
    ?>
    <script >

            v='Logged In';

			destination="ajaxlog.php?v="+v;
			var xhr=new XMLHttpRequest();
			xhr.open("GET",destination,true);
			xhr.send();
			xhr.onreadystatechange=function() {if(xhr.readyState==4 && xhr.status==200) {}}

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

function finduser25()
{
			global $fulln;
  			global $box;
  			global $posId;
  			global $connhalcyon;
  	
  			$_SESSION["getuser"] = 25;

            $_SESSION['uid']=$box;
            $_SESSION['posId']=$posId;
   


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

function usercourse()
{
		global $dbcon;

      
       $table21 = "select * from cor_progress WHERE  posId='".$_SESSION['posId']."' and  userId = '".$_SESSION['uid']."'";
           $run_query2b1 = mysqli_query($dbcon,$table21);

           while($rowpy = mysqli_fetch_assoc($run_query2b1))
           {
    
              
            $table211 = "select * from coursemodule WHERE  `courseid`='".$rowpy['courseId']."'";
           $run_query2b11 = mysqli_query($dbcon,$table211);

             while($rowpy1 = mysqli_fetch_assoc($run_query2b11))
             {
           
                $prox[]=$rowpy1['courseid'];
             }
           }



  
           $table2 = "select * from cor_progress WHERE  posId='".$_SESSION['posId']."' and  userId = '".$_SESSION['uid']."' and courseId IN (".implode(',',$prox).")";
           $run_query2b = mysqli_query($dbcon,$table2);





  
$x1=0;
           while($row = mysqli_fetch_assoc($run_query2b))

               {  
            
                 $x1=$x1+1;


$c="#c".$x1;
$cc="c".$x1;





?>
 




<div class="card">
        <div class="card-header" style="background-color:white;border:1px solid #424242;" role="tab" id="headingTwo">
            <a  onclick="blood('<?php echo $row["courseId"]; ?>')"  data-toggle="collapse" data-parent="#accordion" aria-expanded="false"  href="<?php echo $c; ?>" aria-controls="<?php echo $cc; ?>">

                <h5 class="mb-0">
              <center><p><?php echo $row['coursename']; ?></p><?php 




              if($row['status']=='Pending')
              {
                echo "<img src='img/pending.gif' height='50' width='150'>";
              }
                if($row['status']=='On-going')
              {
               echo "<img src='img/inprogress.gif' height='50' width='150'>"; 
              }
                if($row['status']=='Completed')
              {
                echo "<img src='img/completed.jpg' height='50' width='150'>";
              }






              ?> </center> 
<script>
      

      function blood(bad)
  {

v=bad;

destination="bloodcourse.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
    
      }
     }



      }


  </script>
            </h5>
            </a>
        </div>
        <div  class="collapse" role="tabpanel" aria-labelledby="headingTwo" id="<?php echo $cc; ?>">
            <div class="card-block">
            
 
            <?php
              $table3 = "select * from coursemodule WHERE courseid =  '".$row['courseId']."'";
           $run_query2c = mysqli_query($dbcon,$table3);  

      

           
           while($row1 = mysqli_fetch_assoc($run_query2c))

               {


 $table31 = "select * from mdl_progress WHERE moduleId =  '".$row1['moduleid']."'";
           $run_query2c1 = mysqli_query($dbcon,$table31);  
           $sous=mysqli_fetch_assoc($run_query2c1);



if($sous['status']=='Pending')
{
echo '

<button style="width: 100%;background-color:#fdd835;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';
}
if($sous['status']=='On-going')
{
  echo '

<button style="width: 100%;background-color:#00b0ff;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';

}
if(($sous['status']=='Completed')||($sous['isFinish']=='1'))
{
  echo '

<button style="width: 100%;background-color:#00c853;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';
}





               }
               ?>


            </div>
        </div>
    </div>

    <?php
}

}

?>