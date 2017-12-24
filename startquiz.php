<html>
<head>
<?php include 'connect.php' ?>
<?php include 'import.css.js.php' ?>

<?php include 'javascript.php' ?>
<?php 


if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Start Quiz</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Start Quiz</title>

 <?php } ?>




<link href="css/Fontmoken.css" rel="stylesheet">
<style type="text/css">
.bg
{
	 background: url("img/3.gif");
    background-size: 75% 75%;

    background-repeat: no-repeat;
    background-position: center; 
    height: 100%;
}
button
{
	
}

</style>

</head>


<body style="	   background-color: #455b66;">

<?php 




if(isset($_SESSION['idmod'])) 
{


$check1=mysqli_query($connhalcyon,"SELECT `quiz_status` FROM `mdl_progress` where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");
$check = mysqli_fetch_assoc($check1);

$ismeron=mysqli_query($connhalcyon,"SELECT * FROM `questions` where  `moduleid`='".$_SESSION['idmod']."'");
$meronn = mysqli_num_rows($ismeron);

	if ($meronn!=0)
	{


$sqlmotopo=mysqli_query($connhalcyon,"SELECT * FROM `mdl_retake` where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");
$exceed=mysqli_num_rows($sqlmotopo);

///////////////////////////////////////////////////////////////////////////////////             3 retry
					if($exceed==2)
					{
							?>

								<script>
								swal({
														  title: "3 Tries Only",
														  text: "You can only take a quiz 3 times!",
														  type: "error",
														  closeOnConfirm: false,
														  showLoaderOnConfirm: true,
														},
														function(){
														  setTimeout(function(){
														     window.location.href='empmodule.php';
														  }, 2000);
														});
								</script>


							<?php
					}
					else
					{
					if($check['quiz_status']=='Pending')
					{



								$continuesql="SELECT * FROM result AS r INNER JOIN questions AS q ON r.questionId = q.questionId  WHERE q.moduleId='".$_SESSION['idmod']."' and r.userId='".$_SESSION['uid']."' and r.isAnswer='1'";
								$conti = mysqli_query($connhalcyon,$continuesql);
								$continue=mysqli_num_rows($conti);


								if ($continue!=0)
								{


					echo "<div class='bg'>";
										?>				
							<script >
											
													
							 





													swal({
														  title: "Retake Quiz!",
														  text: "Do you want to retake?",
														  type: "warning",
														  showCancelButton: true,
														  confirmButtonColor: "#DD6B55",
														  confirmButtonText: "Yes",
														  cancelButtonText: "No",
														  closeOnConfirm: false,
														  closeOnCancel: false
														},
														function(isConfirm){
														  if (isConfirm) {
														    	swal({
																	  title: "Confirmed!",
																	  text: "Be ready for Retake!",
																	  type: "success",
																	  closeOnConfirm: false,
																	  showLoaderOnConfirm: true,
																	},
																	function(){
																	  setTimeout(function(){
																			destination="phprek.php";
																			var xhr=new XMLHttpRequest();
																			xhr.open("GET",destination,true);
																			xhr.send();
																			xhr.onreadystatechange=function() {
																			      if(xhr.readyState==4 && xhr.status==200) {
																			      window.location.href="rand2.php";
																			      }
																			     }
																	  }, 2000);
																	});
														  } else {
														    	swal({
																	  title: "Cancelled!",
																	  text: "Retake Cancelled!",
																	  type: "error",
																	  closeOnConfirm: false,
																	  showLoaderOnConfirm: true,
																	},
																	function(){
																	  setTimeout(function(){
																	     window.location.href='empmodule.php';
																	  }, 2000);
																	});
														  }
														});



												</script>
												<?php echo "</div>";
					echo "</div>";


								}
								else
								{

					echo "<div class='bg'>";
										echo '<center > <Button  style="top:250px;border-radius:2px;font-size:3em;font-weight:bold;position:relative;" class="btn btn-info btn-rounded waves-effect" style="border-radius:2px;font-size:3em;font-weight:bold;" type="submit" onclick="strrr()">START NOW</Button></span></center>';
					echo "</div>";
								}
					}	


		


		else
		{
		echo "<div class='bg'>";		?>				
				<script >
								
										
				 





										swal({
											  title: "Retake Quiz!",
											  text: "Do you want to retake?",
											  type: "warning",
											  showCancelButton: true,
											  confirmButtonColor: "#DD6B55",
											  confirmButtonText: "Yes",
											  cancelButtonText: "No",
											  closeOnConfirm: false,
											  closeOnCancel: false
											},
											function(isConfirm){
											  if (isConfirm) {
											    	swal({
														  title: "Confirmed!",
														  text: "Be ready for Retake!",
														  type: "success",
														  closeOnConfirm: false,
														  showLoaderOnConfirm: true,
														},
														function(){
														  setTimeout(function(){
																destination="phpretake.php";
																var xhr=new XMLHttpRequest();
																xhr.open("GET",destination,true);
																xhr.send();
																xhr.onreadystatechange=function() {
																      if(xhr.readyState==4 && xhr.status==200) {
																      window.location.href="rand2.php";
																      }
																     }
														  }, 2000);
														});
											  } else {
											    	swal({
														  title: "Cancelled!",
														  text: "Retake Cancelled!",
														  type: "error",
														  closeOnConfirm: false,
														  showLoaderOnConfirm: true,
														},
														function(){
														  setTimeout(function(){
														     window.location.href='empmodule.php';
														  }, 2000);
														});
											  }
											});



									</script>
									<?php echo "</div>";
		}
	}
}
	else
	{//kapag walang laman
?>
<script>
		swal({
														  title: "Not Available",
														  text: "No quiz Available for now !",
														  type: "success",
														  closeOnConfirm: false,
														  showLoaderOnConfirm: true,
														},
														function(){
														  setTimeout(function(){
																destination="phpnoquiz.php";
																var xhr=new XMLHttpRequest();
																xhr.open("GET",destination,true);
																xhr.send();
																xhr.onreadystatechange=function() {
																      if(xhr.readyState==4 && xhr.status==200) {
																      window.location.href="empmodule.php";
																      }
																     }
														  }, 2000);
														});
</script>
<?php
	}


}
else
{
	// no quiz
}




 ?>








</body>
</html>