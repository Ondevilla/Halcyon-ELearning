<?php
session_start();
include("dbcon.php");
$Flashid = $_POST["employee_id"];


?>

 
<h4><p align="left">Flash Title :</p></h4>
<?php             $table2 = "select * from flashtable WHERE flashid ='$Flashid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  

                	?>
<h5><?php echo $row["flashtitle"];?></h5>
<br>
<h4><p align="left">Flash :</p></h4>

<center>
<embed style="height: 350px; width: 100%;" src="<?php echo $row['flashname'];?>">
</center>
<?php
}
?>