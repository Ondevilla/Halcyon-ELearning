
<style type="text/css">
th {
    text-align: center;
    color: #33b5e5;
}
</style>
<?php

include("dbconnect.php");
include("connect.php");
include("dbcon.php");
?>

<div class="card">
    <h3 class="card-header primary-color white-text">MIS Courses</h3>
    <div class="card-block">
<table class="table table-striped table-bordered">
  <thead>
    <tr>

      <th>Course Name</th>
      <th>Remarks</th>

    </tr>
  </thead>
  <tbody>

<?php
$empId1 = $_POST["employee_id"];




              $query = "SELECT * FROM users where empId = '".$empId1."'";  
              $resulta = mysqli_query($c1, $query); 

              while($row = mysqli_fetch_array($resulta))  
              { 

                $empId = $row["userId"];

              }











$prox[]=0;

   $table21 = "select * from cor_progress WHERE userId = '".$empId."'";
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



  
       

           
              $query = "SELECT * FROM cor_progress where userId = '".$empId."' and courseId IN (".implode(',',$prox).")";  
              $result = mysqli_query($dbcon, $query); 

              while($row = mysqli_fetch_array($result))  
              { 

?>     

    <tr>




      <th scope="row"><input type="button" value="<?php echo $row['coursename']?>" name="view" id="<?php echo $row['courseId']?>" class="btn btn-info btn-xs sup1"/> </th>
      <td>


<?php
      if($row["status"] == "Pending")
{
        ?>


    <a style="color:red;">Pending</a>

    <?php
}


      if($row["status"] == "On-going")


{
?>


    <a style="color:orange;">On-going</a>
<?php
}

      if($row["status"] == "Completed")
      {
?>



    <a style="color:green;">Completed</a>

    <?php
}
    ?>
      </td>



    </tr>

<?php



                }
              


?>
  </tbody>
</table>
    </div>
</div>


<script>

$(document).on('click', '.sup1', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewresult1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail2').html(data);  
              
                     }  
                });  
           }            
      });   




</script>