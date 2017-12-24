<?php
include("dbconnect.php");

include("dbcon.php");
session_start();



?>

<br><br>
<br><br>
      <link rel="stylesheet" href="css/cd.css">
    <script src="js/cardgame.js"></script>

<div class="row">
<?php

  $position = $_POST["positionname"];


$_SESSION['poscheck'] = $_POST["positionname"];


  $rax=mysqli_query($c11,"SELECT * FROM positions WHERE position LIKE '%$position%'");
  $raxy=mysqli_fetch_assoc($rax);
  $_SESSION["poscheck1"] = $raxy['positionId'] ;

       $table2 = "SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition WHERE `jobid` = '".$raxy['positionId']."' UNION SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition_all WHERE `jobid` = '".$raxy['positionId']."' UNION SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition_dept WHERE `jobid` = '".$raxy['positionId']."'";
            $run_query2b = mysqli_query($dbcon,$table2);
          




            if(mysqli_num_rows($run_query2b) > 0)
{

?>



  <?php

  		







          $table2 = "SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition WHERE `jobid` = '".$raxy['positionId']."'
UNION SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition_all WHERE `jobid` = '".$raxy['positionId']."'
UNION SELECT positionname,coursename,courseid,jobid,image,imagebg,imagetheme FROM courseposition_dept WHERE `jobid` = '".$raxy['positionId']."'";












            $run_query2btest = mysqli_query($dbcon,$table2);










            while($row = mysqli_fetch_array($run_query2btest))

{  



  ?>











<!--/.Card-->
 <div class="col-md-4">
  
  <div class="wrappered">
    <div class="clash-card ">
      <div class="clash-card__image" style="background-color: <?php echo $row["imagebg"]; ?> ;background-size: cover;">
        <img src=  "<?php echo
$row["image"]; ?>" />
      </div>

      <div class="clash-card__unit-name"><?php echo
$row["positionname"]; ?></div>
      <div class="clash-card__unit-description">
        <?php echo
$row["coursename"]; ?>
      </div>

      <div class="clash-card__unit-stats clearfix" style="background-color: <?php echo $row["imagetheme"]; ?>;">

        <a  style="padding:0px;" name="view" value="View" id="<?php echo $row["courseid"]; ?>" class="view_data"> 

            <div class="one-third"  >
              <div class="stat" > 

               
                <i class="fa fa-eye" aria-hidden="true"></i>
               

                </div>
              <div class="stat-value">VIEW</div>
            </div>

         </a>

         <a  style="padding:0px;" name="view" value="View" id="<?php echo $row["courseid"]; ?>"  class="view_datahere"> 

                        <div class="one-third">
                          <div class="stat">

                             
                                  <i class="fa fa-edit" aria-hidden="true"></i>
                               

                          </div>
                          <div class="stat-value">EDIT</div>
                        </div>
        </a> 

          <a style="padding:0px;" name="view" value="View" id="<?php echo $row["courseid"]; ?>"  class="view_data2"> 
                    <div class="one-third no-border">
                      <div class="stat">
                        
                        
                              <i class="fa fa-ban" aria-hidden="true"></i>
                            

                      </div>
                      <div class="stat-value">DELETE</div>
                    </div>
          </a>



      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper -->
  


</div>
<!--/.Card-->











<?php




}



?>



<?php
}


else

{

 echo '<center>Data Not Found</center>';


}
?>


</div>
<script>
$(document).on('click', '.view_data', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });   

  

  

$(document).on('click', '.view_datahere', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"select1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detailnew').html(data);  
                          $('#dataModalnew').modal('show');  
                     }  
                });  
           }            
      });   

$(document).on('click', '.view_data2', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"select2.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail2').html(data);  
                          $('#dataModal2').modal('show');  
                     }  
                });  
           }            
      });   






 </script>


