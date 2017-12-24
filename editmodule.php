<?php
session_start();
include("dbcon.php");

?>
<span style="text-align: left;"><h5>Module Title</h5></span>


<?php

			$moduleid = $_POST["employee_id"];
			$_SESSION["editmod"] = $_POST["employee_id"];
            $table2 = "select * from modules WHERE id = '$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                {  

             


?>
<input type="text" placeholder="<?php echo $row["modulename"]; ?>" name="editmod1" ></input>






<?php


}


?>


<br><br>
