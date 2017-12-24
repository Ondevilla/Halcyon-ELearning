<?php




session_start();
include("dbcon.php");
$courseid = $_POST["employee_id"];

            $table2 = "select * from fcourse WHERE id = '$courseid'";
            $run_query2a = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2a))

{  
?>


<center><b><h3> Course Title :  </h3></b></center>
<center><b><h5><?php echo $row["coursename"]; ?></h5></b></center><br>
<center><b><h3> Course Description :  </h3></b></center>
<center><b><h5><?php echo $row["cdetails"]; ?></h5></b></center><br>
<center><b><h3> Image :  </h3></b></center>
<center><b><h5><img src="<?php echo $row["image"];?>" class="img-fluid" style="height:350px;"></h5></b></center>

<?php
 }









?>