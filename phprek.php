<?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
<?php



$mdlid=$_SESSION['idmod'];
$uid=$_SESSION['uid'];
date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");
$value=$D." ".$T;

$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
while ($check = mysqli_fetch_assoc($check1))
{
	$remarks="Retake quiz on module ".$check['modulename'];
	$check11=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

		while ($check111= mysqli_fetch_assoc($check11))
		{
			$remarks1=" from course ".$check111['positionname'];
		}

}
$remarks2=$remarks." ".$remarks1;






$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());




$querty=mysqli_query($connhalcyon,"SELECT * FROM mdl_progress where moduleId='".$mdlid."' And userId='".$uid."'");

$row=mysqli_fetch_assoc($querty);
$i1=$row['userId'];
$i2=$row['moduleId'];
$i3='Completed';
$i4='Completed';
$i5=$row['datetime_start'];
$i6=$row['datetime_end'];






$totalz=mysqli_query($connhalcyon,"SELECT `score` FROM `result` where moduleId='".$mdlid."' And userId='".$uid."'");
$totalx=0;
while ($brox=mysqli_fetch_assoc($totalz))
{	
	$totalx=$totalx+$brox['score'];

}

$i7=$totalx;





mysqli_query($connhalcyon,"INSERT INTO mdl_retake (`userId`,`moduleId`,`status`,`quiz_status`,`datetime_start`,`datetime_end`,`quiz_total`) Values ('$i1','$i2','$i3','$i4','$i5','$i6','$i7') ");


mysqli_query($connhalcyon,"UPDATE mdl_progress Set `status`='On-going',`quiz_status`='Pending',`datetime_start`='null',`datetime_end`='null',`quiz_total`='null' WHERE moduleId='".$mdlid."' And userId='".$uid."'");


mysqli_query($connhalcyon,"UPDATE result Set `score`='0',`isAnswer`='0' WHERE moduleId='".$mdlid."' And userId='".$uid."'");




mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_start`='$value',`datetime_end`='$value',`status`='On-going' where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");

?>
