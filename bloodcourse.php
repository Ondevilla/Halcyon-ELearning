<?php include 'connect.php' ?>

<?php include 'javascript.php' ?>
<?php



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;
 
 $valueID=$_GET['v'];


//kapag walang module sa course

$orangei=mysqli_query($connhalcyon,"SELECT * FROM `cor_progress` WHERE posId='".$_SESSION['posId']."' and  `userId`='".$_SESSION['uid']."' and `courseId`='".$valueID."'" );
while($orgi=mysqli_fetch_assoc($orangei))
{
		if($orgi['isStart']==1)
{


}
else
	{
			$orangeii=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` WHERE  `courseid`='".$orgi['courseId']."'" );
			$orgii=mysqli_num_rows($orangeii);
			if($orgii==0)
			{
			mysqli_query($connhalcyon,"UPDATE cor_progress SET `datetime_start`='$value',`datetime_end`='$value',`status`='Completed',`isStart`='1',`isFinish`='1' where posId='".$_SESSION['posId']."' and  `userId`='".$_SESSION['uid']."' and `courseId`='".$valueID."'");


				$check1=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$valueID."'");
				while ($check = mysqli_fetch_assoc($check1))
				{
					$remarks="Start and Finish Course: ".$check['coursename'] ." ";
				

				}
				$remarks2=$remarks;
			

				$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
				$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());


			

			}
	}
}

////////////////////////

$orange=mysqli_query($connhalcyon,"SELECT * FROM `cor_progress` WHERE  posId='".$_SESSION['posId']."' and `userId`='".$_SESSION['uid']."' and `courseId`='".$valueID."'" );

$org=mysqli_fetch_assoc($orange);

if($org['isStart']==1)
{


}

else
{
	mysqli_query($connhalcyon,"UPDATE cor_progress SET `datetime_start`='$value',`status`='On-going',`isStart`='1' where  posId='".$_SESSION['posId']."' and `userId`='".$_SESSION['uid']."' and `courseId`='".$valueID."'");


$check1=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$valueID."'");
while ($check = mysqli_fetch_assoc($check1))
{
	$remarks="Start Course : ".$check['coursename'];

}
		$check11ko=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where `jobid`='".$_SESSION['posId']."' and `courseid`='".$che1['courseId']."'");
						{
							while($check111ko= mysqli_fetch_assoc($check11ko))

							$remarks1ko=" as ".$check111ko['positionname'];


						}

$remarks2=$remarks.$remarks1ko;


$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());



}


?>
