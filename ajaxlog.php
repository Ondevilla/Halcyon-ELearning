<?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
<?php


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");
											





$remark=$_GET["v"];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','$remark','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());

?>