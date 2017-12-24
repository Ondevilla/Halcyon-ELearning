<?php

include ("connect.php");

$_SESSION["disable"] = $_POST["employee_id"];
$corid = $_POST["employee_id"];
$query1 = mysqli_query($connhalcyon,"SELECT * From fcourse WHERE id = '$corid'");

while($row = mysqli_fetch_assoc($query1))
{

	$_SESSION["coursename"] = $row["coursename"];
}




echo "<center>Are you sure you want to disable this course?</center>";




?>