
<?php

include("dbconnect.php");
include("connect.php");
include("dbcon.php");

?>

      <link rel="stylesheet" href="css/cd.css">
    <script src="js/cardgame.js"></script>









   <?php

    $position = $_POST["positionname"];

  $_SESSION["deptname"] = $position;
   

            $deptname = $_SESSION["deptname"];


            $table2 = "select * from departments where department = '$deptname'";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  


                $depId = $row["departmentId"];


        }





            $table2 = "select * from positions where depId = '$depId'";
            $run_query2b = mysqli_query($c11,$table2);



            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
  
        

        <option><?php echo $row['position']; ?></option>
        <?php
        }
?>


