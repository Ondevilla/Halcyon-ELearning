<?php include 'connect.php' ?>
<?php include 'import.css.js.php' ?>

<?php include 'javascript.php' ?>
<?php







date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;
$totalz=mysqli_query($connhalcyon,"SELECT `score` FROM `result` where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");
$totalx=0;
while ($brox=mysqli_fetch_assoc($totalz))
{	
	$totalx=$totalx+$brox['score'];

}

mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_end`='".$value."',`status`='Completed',`quiz_status`= 'Completed', `quiz_total`='".$totalx."' where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");




	$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
	while ($check = mysqli_fetch_assoc($check1))
	{
	$remarks="Finish quiz on module ".$check['modulename'];
	$check11=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

		while ($check111= mysqli_fetch_assoc($check11))
		{
			$remarks1=" from course ".$check111['positionname'];
		}

}


$remarks2=$remarks." ".$remarks1." and got score of ".$totalx;






$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());
?>
