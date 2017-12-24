<?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
<?php



$mdlid=$_SESSION['idmod'];
$uid=$_SESSION['uid'];


	$ch=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where `moduleid`='".$mdlid."'");
while ($che1=mysqli_fetch_assoc($ch))
{	
$_SESSION['road']=$che1['courseid'];
}




date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");
$value=$D." ".$T;

$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
while ($check = mysqli_fetch_assoc($check1))
{
	$remarks="Finish Module and No Quiz : ".$check['modulename'];
	
}
$remarks2=$remarks;






$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());




$sensai=mysqli_query($connhalcyon,"UPDATE mdl_progress Set `status`='Completed',`quiz_status`='Completed',`datetime_end`='$value',`quiz_total`='0',`isFinish`='1' WHERE moduleId='".$mdlid."' And userId='".$uid."'");









/////////////////////////////////////////////// logs











$logcom=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
	while ($logcom1 = mysqli_fetch_assoc($logcom))

{

	$itonacourseid=$logcom1['courseid'];
}


$counter=0;
$total=0;
$logfin=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `courseid`='".$itonacourseid."'");
	while ($logfin1 = mysqli_fetch_assoc($logfin))

{

	 $itonamoduleid=$logfin1['moduleid'];

$counter=$counter+1;
//echo " module : ". $itonamoduleid."<br><br>";


$logmpid2=mysqli_query($connhalcyon,"SELECT * FROM `mdl_progress` where  `moduleId`='".$itonamoduleid."' and `userId`='".$_SESSION['uid']."' and `isFinish`='1' ");
$logmpid3 = mysqli_num_rows($logmpid2);



$total=$total+$logmpid3;



}



		

//echo " counter : ". $counter."<br>";
//echo " total : ". $total ."<br><br>";


if($counter==$total)
{
//-----------------------------------update if finish
$duks=mysqli_query($connhalcyon,"UPDATE cor_progress SET `status`='Completed',`datetime_end`='".$value."',`isFinish`='1' where posId='".$_SESSION['posId']."' and `courseId`='".$itonacourseid."' and `userId`='".$_SESSION['uid']."'");

//-----------------------------------

}
else
{

}






$logcor=mysqli_query($connhalcyon,"SELECT * FROM `cor_progress` where  `courseId`='".$itonacourseid."' and `userId`='".$_SESSION['uid']."' and `posId`='".$_SESSION['posId']."'");
while($logcor1= mysqli_fetch_assoc($logcor))
{
$taposnaba=$logcor1['isFinish'];

}

if(($taposnaba)=='1')
{




			$check11mo=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where   `moduleid`='".$_SESSION['idmod']."'");

					while ($check111mo= mysqli_fetch_assoc($check11mo))
					{


								$check22mo=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where   `courseid`='".$check111mo['courseid']."'");

								while ($check222mo= mysqli_fetch_assoc($check22mo))
							{
							$cmorem="Complete Course : ".$check222mo['coursename'];
							$sqllogmo = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$cmorem."','$D','$T')";
							$loginmo = mysqli_query($connlog, $sqllogmo) or die (mysqli_error());
								}

				
					}



}









////////////////////////////////////////////
				





?>
