<?php include 'connect.php' ?>
<?php include 'import.css.js.php' ?>

<?php include 'javascript.php' ?>
<?php



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;







mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_start`='$value',`datetime_end`='$value',`status`='On-going' where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");





$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
while ($check = mysqli_fetch_assoc($check1))
{
	$remarks="Start Quiz : ".$check['modulename'];
	$check11=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

		while ($check111= mysqli_fetch_assoc($check11))
		{
			$remarks1=" from course ".$check111['coursename'];
		}

}
$remarks2=$remarks.$remarks1;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());

?>
