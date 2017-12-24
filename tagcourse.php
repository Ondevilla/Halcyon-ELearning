<?php
session_start();
include("dbcon.php");

include("dbconnect.php");





$get =   $_SESSION["poscheck1"];







if(isset($_SESSION['poscheck']))
{
 $jobid=$get;

            $table2 = "select * from positions WHERE positionId = '$jobid'";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))


{ 

       echo " <h4>Selected Job Position</h4>
        <h5> ".$row["position"]."  </h5><br>

        ";
 
		
} 
?>










        <select name="getpos" class="form-control selectpicker">
        <option value="">Course ...</option>
        <?php
 
            $table2 = "select * from fcourse WHERE isActive = '1'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["coursename"]; ?></option>
        <?php
        }
        ?>
        </select>





<?php



}
else

{
echo "Warning You Forgot to Select a Course On Dropdown List !";
}



?>

