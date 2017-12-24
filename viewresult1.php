
 <?php  
 //pagination.php  

include("dbcon.php");
include("connect.php");
?>

<div class="card">
    <h3 class="card-header primary-color white-text">QUIZ INFORMATION</h3>
    <div class="card-block">
<table class="table table-striped table-bordered">
  <thead>

<style type="text/css">
th {
    text-align: center;
    color: #33b5e5;
}
</style>
    <tr>
      <th>Date/time Start</th>
       <th>Date/Time Start</th>
      <th>Status</th>
    <th>Quiz Total</th>
    </tr>
  </thead>
  <tbody>

 <?php  
include("dbcon.php");

$courseId = $_POST["employee_id"];



$query = "SELECT * FROM coursemodule where courseid = '$courseId'";  
$result = mysqli_query($dbcon, $query); 



 while($row = mysqli_fetch_array($result))  
 {
  //Quiz Latest result
    $query1 = "SELECT * FROM mdl_progress where moduleId = '".$row['moduleid']."'";  
    $result1 = mysqli_query($dbcon, $query1); 

     while($row1 = mysqli_fetch_array($result1))  
     {
        
  ?><td colspan="4"><?php echo $row["modulename"]; ?></td><?php
        ?><tr><td><?php echo $row1["datetime_start"]; ?></td><?php
        ?><td><?php echo $row1["datetime_end"]; ?></td><?php
        ?><td><?php echo $row1["status"]; ?></td><?php
        ?><td><?php echo $row1["quiz_total"]; ?></td></tr><?php
        //Quiz Retake result

        $query2 = "SELECT * FROM mdl_retake where moduleId =  '".$row1['moduleId']."' ORDER BY user_mpID DESC";  
        $result2 = mysqli_query($dbcon, $query2); 

         while($row2 = mysqli_fetch_array($result2))  
         {  

           
        ?><tr><td><?php echo $row2["datetime_start"]; ?></td><?php
        ?><td><?php echo $row2["datetime_end"]; ?></td><?php
        ?><td><?php echo $row2["status"]; ?></td><?php
        ?><td><?php echo $row2["quiz_total"]; ?></td></tr><?php
?>


<?php
  }
}
}
?>

  </tbody>
</table>
    </div>
</div>
<p></p>

