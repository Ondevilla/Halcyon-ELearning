
<!DOCTYPE html>
<html lang="en">
<html>
<?php

session_start();
include("dbcon.php");


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
  height: 100%;
}


</style>
     


</head>








<!--Navbar-->
<?php include 'banner.php' ?>



<body>


<br><br><br>
<div class="container" >

<div class="row" >





<?php
    
/*include ('HALCYON UPDATE/H_QUERIES.php');
usercourse();*/

?>



<br><br>




<!-- ////////////////////////////////////////////////////////////// -->



         


<!--/.Accordion wrapper-->




<!-- ////////////////////////////////////////////////////////////// -->



<!--/.Accordion wrapper-->



<div id="displaymod" ></div>



  
<?php 
        



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

?>




<div class="col-md-4">
<div class="wrapper">
    <div class="clash-card " >
      <div class="clash-card__image clash-card__image" style="background-color: black;">
        <?php 
             $xQx = "select * from courseposition WHERE courseid =  '".$row['courseId']."'";
           $xQx2 = mysqli_query($dbcon,$xQx);  
           $ooo=mysqli_fetch_assoc($xQx2);


           
           echo "<img src='". $ooo['image'] ."' />";
           
            /*echo "<img src='attachment/img/1.jpeg' />";*/
        ?>
  
      </div>

      <div class="clash-card__unit-name"><p><?php echo $row['coursename']; ?></p></div>
  



<?php


  echo "<div id='panel".$x1."' style='display: none;'>    <hr>";

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


<button style="width: 800%;background-color:#fdd835;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';
}
elseif($sous['status']=='On-going')
{
  echo '

<button style="width: 80%;background-color:#00b0ff;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';

}
elseif(($sous['status']=='Completed')||($sous['isFinish']=='1'))
{
  echo '

<button style="width: 80%;background-color:#00c853;"   id="'.$row1['moduleid'].'"  class="btn  btn-xs view_module"> '.$row1["modulename"].' </button><br>

';
}



else
  { }



               }

?>
</div>
    <hr>
   <div class="clash-card__unit-stats clash-card__unit-stats clearfix " >
  

                     <a  onclick="blood('<?php echo $row["courseId"]; ?>')"    >

                              <h5 class="mb-0" style="">
                            <center><?php 




                            if($row['status']=='Pending')
                            {
                              echo "<p style='background-color:#fdd835;width:92%;padding:20px 0px;border-radius:0px 0px 10px 10px;' >PENDING</p>";
                            }
                              if($row['status']=='On-going')
                            {
                             echo "<p style='background-color:#00b0ff;width:92%;padding:20px 0px;border-radius:0px 0px 10px 10px;'>ON GOING</p>";
                            }
                              if($row['status']=='Completed')
                            {
                               echo "<p style='background-color:#00c853;width:92%;padding:20px 0px;border-radius:0px 0px 10px 10px;'>COMPLETED</p>";
                            }





                          }
                            ?> 
                    </center> 
              <script>
                    

                    function blood(bad)
                {

      for (i = 0; i < 100; i++) { 
        $("#panel"+i).slideToggle("slow");
      }
              v=bad;

              destination="bloodcourse.php?v="+v;
              var xhr=new XMLHttpRequest();
              xhr.open("GET",destination,true);
              xhr.send();
              xhr.onreadystatechange=function() {if(xhr.readyState==4 && xhr.status==200) {}}
            }


                </script>
                          </h5>
                          </a>


      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  

  
 
  </div> 

</div> 




</div>

</body>





<script>
    



$(document).on('click', '.view_module', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                /*$.ajax(
                {  
                     url:"startmodule.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#displaymod').html(data);                           
                  
                     }  
                });  */
                window.location.href="startmodule.php?v="+employee_id;
           }            
      });   

</script>

   <!-- SCRIPTS -->
   <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</html>