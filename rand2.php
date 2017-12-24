<html>


<?php include 'connect.php' ?>
<?php include 'import.css.js.php' ?>
<?php include 'javascript.php' ?>


<script type="text/javascript">





















	
	// preload image function
function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
		$('<img/>')[0].src = this;
	});
}
function sel(browser) {
    xy = browser;
 
}

function nextreload()
  {

swal({
			title: "Loading . . .",
			text: "Processing your answer",
			imageUrl: "images/loading.gif",
			html: true,
	
			  timer: 5000,
  			showConfirmButton: false
			},
								function(){
								  setTimeout(function(){
			swal({
			title: "Answered",
			text: "Your answer has been Process",
			type:"success",
			html: true,
	
			  timer: 5000,
  			showConfirmButton: false
			});
								  });
								});

v=xy;

destination="number.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      window.location.href="rand2.php";
      }
     }



      }
$(document).ready(function(){

  // set up radio boxes
	$('.radioholder').each(function(){
	
		// on click, update radio boxes accordingly
		$(this).click(function(){
			$(this).children('input').prop('checked', true);
			$(this).children('input').trigger('change');
			 
		});
	});
	// update radio holder classes when a radio element changes

$('#wamp').parent().addClass('visib');


	$('input[type=radio]').on( 'change', function (){
	
    $('input[type=radio]').each(function(){
      if($(this).prop('checked') == true) {   
        $(this).parent().addClass('activeradioholder');
        	    $('#wamp').parent().removeClass('visib');
      }
			else $(this).parent().removeClass('activeradioholder');
		});
	});
	// manually fire radio box change event on page load
	$('input[type=radio]').change();



	// set up select boxes
	


	
	// preload hover images
  preload([
    'http://supereightstudio.com/img/radio_tick.png'
  ]);

});

</script>




<style type="text/css">



a {
  color: #2A817C;
}

a:active,
a:focus,
a:hover {
  color: #E87A31;
}

.radioholder {
	width: 100%;
	background: #fff;
	margin-bottom: 0.5em;


	color: #666;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
	cursor: pointer;
}


input[type=radio]{
	visibility: hidden;
	position: absolute;
}


@media screen and (min-width: 480px) {
  .radioholder .desc {
		width: 100%;

	padding-left: 0.1em;
	font-size: 10px;
	font-stretch:ultra-condensed ;
	 
				}

}

@media screen and (max-width: 480px) {
  .radioholder .desc {
	width: 100%;

	padding-left: 0.1em;
	font-size: 10px;
	font-stretch:ultra-condensed ;
	 
				}

}


.radioholder .tick {
	display: inline-block;
	vertical-align: middle;
	width: 2.4em;
	height: 2.4em;
	background-color: #eee;
	background-image: none;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
}
.radioholder .tick1 {

	
	background-color: #eee;
	
}
.activeradioholder  .tick2
{
	background-color:#33b5e5;
	color: white;
}
.activeradioholder  .tick1
{
	background-color:#0099CC;
	color: white;
}
.activeradioholder .tick {
	background-color: #0099CC;

	background-image: url('http://supereightstudio.com/img/radio_tick.png');
	background-size: cover;
}




.radioholder:hover .tick1 {
	background-color: #eee;
	color:black;
}
.activeradioholder:hover .tick1 {
	background-color: #0099CC;
	color:black;
}

.radioholder:hover .tick2 {
	background-color: #e0f7fa;
	color:black;
}



.visib
{
	opacity: 0;
}

</style>


<?php






if (isset($_SESSION['idmod']))
{






			$check1=mysqli_query($connhalcyon,"SELECT `quiz_status` FROM `mdl_progress` where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");
			$check = mysqli_fetch_assoc($check1);

			if($check['quiz_status']=="Pending")
			{








			$sqlmoduleid="SELECT * FROM result AS r INNER JOIN questions AS q ON r.questionId = q.questionId  WHERE q.moduleId='".$_SESSION['idmod']."' and r.userId='".$_SESSION['uid']."' and r.isAnswer='0'";
			$query = mysqli_query($connhalcyon,$sqlmoduleid);

			$max=mysqli_num_rows($query);

			//fet questions
			while($row = mysqli_fetch_array($query))
			{
				
			    $question[] = $row['questionid'] ."/-0-/". $row['questioncap'] ."/-1-/". $row['choicea'] ."/-2-/". $row['choiceb'] ."/-3-/". $row['choicec'] ."/-4-/". $row['choiced'];

			    

			}

			//condition if no question

					if($max==0)
					{

					}
					else
					{
					shuffle($question);


					$splits=mysqli_query($connhalcyon,"SELECT * FROM result AS r INNER JOIN questions AS q ON r.questionId = q.questionId  WHERE q.moduleId='".$_SESSION['idmod']."' and r.userId='".$_SESSION['uid']."' and r.isAnswer='1'");

				
					$current=mysqli_num_rows($splits);
					$current=$current+1;
					
			

					  		//$j=$i*4;
					  		
					 		// for($k=$j;$k<($j+4);$k++)
					  		//{

					  		//		  echo $choice[$k] . "<br>";
					  		//}
						$uniques1=strripos($question[0], "/-0-/");

						$Qposstart=strpos($question[0], "/-0-/");
					 	$Qposend=strripos($question[0], "/-1-/");
					 	$back0=$Qposend-$Qposstart;



					 	$c1posstart=strpos($question[0], "/-1-/");
						$c1posend=strripos($question[0], "/-2-/");

						$back1=$c1posend-$c1posstart;

					 	$c2posstart=strpos($question[0], "/-2-/");
						$c2posend=strripos($question[0], "/-3-/");

					  	$back2=$c2posend-$c2posstart;

					 	$c3posstart=strpos($question[0], "/-3-/");
					 	$c3posend=strripos($question[0], "/-4-/");
					 		$back3=$c3posend-$c3posstart;

					 $c4posstart=strpos($question[0], "/-4-/");
					echo " <div class='container' > ";

					echo "<br>";
					 $unique=substr($question[0], 0,($uniques1));
					$unique;



					$Qnum=substr($question[0], ($Qposstart)+5,$back0-5);

					

					?>
					<!--Card Light-->
				

					<div class='col-md-12' >
					<div style="margin: auto 0;height:auto;">
					<?php 

					$queryimage = mysqli_query($connhalcyon,"SELECT * FROM questions WHERE questionid='$unique' ");
					$imgcount=mysqli_fetch_assoc($queryimage);



			$img[]=$imgcount['imagea'];
			$img[]=$imgcount['imageb'];
			$img[]=$imgcount['imagec'];
			$img[]=$imgcount['imaged'];	

											//uploaded image
											if (isset($imgcount['questionimage']))
											{

													if ($imgcount['questionimage']=="")
												{
												echo ' 
												<center>

											<div class="card"  style="padding-top:50px;padding-bottom:50px;">


											 <div class="card-block">
											<h2  class="card-title"  align="center" >Question '. $current .'</h2>
											<hr>
											<p class="card-text" align="center" >'.$Qnum.'</p>


											</div>


											</div>
											</center>

											';
												}
												else

												{
												echo '
												<center>
												<div class="card" >
												<span class="align-middle">
												    <!--Card image-->
												    <div class="view overlay hm-white-slight">
												        <img src="'.$imgcount['questionimage'].'" style="width:850px; height:300px;margin:auto; " class="img-fluid" alt="Responsive image">
												        <a>
												            <div class="mask waves-effect waves-light"></div>
												        </a>
												    </div>
												    <!--/.Card image-->
												    <!--Card content-->
												    <div class="card-block">
												        <!--Social shares button-->
												     
												        <!--Title-->
												        <h4 class="card-title" align="center">Question '.$current.'</h4>
												        <hr>
												        <!--Text-->
												        <p class="card-text" align="center">'.$Qnum.' </p>
												    
												    </div>
												    </span>
												 </div>
												 </center>
												 ';
												 }
											}


											else
											{
											echo ' 
												<center>

											<div class="card"  style="padding-top:50px;padding-bottom:50px;">


											 <div class="card-block">
											<h2  class="card-title"  align="center" >Question '. $current .'</h2>
											<hr>
											<p class="card-text" align="center" >'.$Qnum.'</p>


											</div>


											</div>
											</center>

											';
											}

					?>
					    <!--/.Card content-->

					<!--/.Card Light-->
					</div>

					</div>



					<div class='col-md-12'  >
					<br>

					<?php
					//question 

					$arraynako[]=substr($question[0], ($c1posstart)+5,$back1-5) ;
					$arraynako[]=substr($question[0], ($c2posstart)+5,$back2-5);
					$arraynako[]=substr($question[0], ($c3posstart)+5,$back3-5);
					$arraynako[]=substr($question[0], ($c4posstart)+5);


					shuffle($arraynako);


					for ($i=0; $i <4 ; $i++) { 


		echo "<div class='radioholder'   onclick='sel(this.id)'  id='".$arraynako[($i)]."-id-".$unique."' > ";

		echo "<input type='radio' name='rack'> ";

		echo "<table  cellpadding='5'  width='100%'><tr><td width='5%' class='tick1'><span class='tick'></span></td><td class='tick2'  width='1%'>&nbsp;&nbsp;&nbsp;</td>";

		if(($img[$i])!="")
		{


		echo"<td  width='80%' class='tick2'><span class='texto'>".$arraynako[($i)] ."</span></td >
		<td width='14%' class='tick2'><Button data-toggle='modal' data-target='#modal".$i."' class='btn btn-info' style='width:70px;padding-left:0px;padding-right:0px;'>Show</button></td>";



		echo '

<div class="modal fade" id="modal'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="top:3%;">
    <div class="modal-dialog  " role="document">
        <!--Content-->
        <div class="modal-content " style="border-radius:20px;">
            <!--Header-->
            <div class="modal-header  btn-default" style="border-radius: 20px 20px 0px 0px;" >
                
                <p class="modal-title" style="color:white;" id="myModalLabel"><strong>'.$arraynako[($i)].'</strong></p><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->

<div class="modal-body">



<center><img src="'.$img[$i].'"" height="300" width="300" class="img-fluid" alt="Responsive image" ></center>



</div>



        
        
        </div>   
      
    </div>
</div>';
		}
		else
		{
			echo"<td  width='94%' class='tick2'><span class='texto'>".$arraynako[($i)] ."</span></td >";
		
		}


		echo"</tr></table></div>";


		}
				echo "<br>";
			

					for ($j=0; $j <4 ; $j++) { 
							unset( $arraynako[($j)] );
					}
						
						
						
						




					} //else sa taas



									



							
					
					echo "</div>";

										echo "<div class='col-md-12' >";
									if ($max==0)
									{

?>

<style>

.bg
{
	 background: url("img/3.gif");
    background-size: 75% 75%;

    background-repeat: no-repeat;
    background-position: center; 
    height: 90%;
}
</style>



<?php 
$ionic=mysqli_query($connhalcyon,"SELECT * FROM result WHERE moduleId='".$_SESSION['idmod']."' and userId='".$_SESSION['uid']."' and score='1' ");
$xs=0;
while ($ion=mysqli_fetch_assoc($ionic))

{
		$xs=$xs+1;
 
}
//$io=$ion['score'];

									echo '







 <body style="background-color: #455b66;">

<div class="bg" >';



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;


mysqli_query($connhalcyon,"UPDATE mdl_progress SET `datetime_end`='".$value."',`status`='Completed',`isFinish`='1',`quiz_status`= 'Completed', `quiz_total`='".$xs."' where `userId`='".$_SESSION['uid']."' and `moduleId`='".$_SESSION['idmod']."'");


//for score

	$check1=mysqli_query($connhalcyon,"SELECT * FROM `coursemodule` where  `moduleid`='".$_SESSION['idmod']."'");
	while ($check = mysqli_fetch_assoc($check1))
	{
	$remarks="Finish Module and Quiz : ".$check['modulename'];
	$check11=mysqli_query($connhalcyon,"SELECT * FROM `courseposition` where  `courseid`='".$check['courseid']."'");

		while ($check111= mysqli_fetch_assoc($check11))
		{
			$remarks1=" from course ".$check111['coursename'];
		}

}


$remarks2=$remarks." ".$remarks1." and got score of ".$xs;


$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());






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

///////////////////////////////////////////////////




echo '
</div>
</body>

';

if($xs==0)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT NO CORRECT ANSWER!",
								  imageUrl: "img/0.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});

</script>
<?php
}
elseif($xs==1)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT 1 CORRECT ANSWERS ONLY!",
								  imageUrl: "img/1.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});

</script>
<?php
}
elseif($xs==2)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT 2 CORRECT ANSWERS ONLY!",
								  imageUrl: "img/2.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}
elseif($xs==3)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT 3 CORRECT ANSWERS ONLY!",
								  imageUrl: "img/31.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}
elseif($xs==4)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT 4 CORRECT ANSWERS ONLY!",
								  imageUrl: "img/4.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});

</script>
<?php
}
elseif($xs==5)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "GOOD JOB YOU GOT 5 MISTAKE ONLY!",
								  imageUrl: "img/5.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});

</script>
<?php
}
elseif($xs==6)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "GREAT JOB YOU GOT 4 MISTAKE ONLY!",
								  imageUrl: "img/6.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}
elseif($xs==7)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "AWESOME YOU GOT 3 MISTAKE ONLY!",
								  imageUrl: "img/7.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}
elseif($xs==8)
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "AMAZING YOU GOT 2 MISTAKE ONLY!",
								  imageUrl: "img/8.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});

</script>
<?php
}
elseif($xs==9)
{
?>
<script>

		swal({
								   title: "QUIZ COMPLETED",
								  text: "EXCELLENT YOU GOT 1 MISTAKE ONLY!",
								  imageUrl: "img/9.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}
else
{
?>
<script>
		swal({
								  title: "QUIZ COMPLETED",
								  text: "YOU GOT PERFECT SCORE CONGRATULATIONS!",
								  imageUrl: "img/10.gif",
								  imageSize: '200x200',
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="empmodule.php";
								  }, 2000);
								});


</script>
<?php
}







									}
									else
									{

									
									echo '<Button type="submit" id="wamp" class="btn btn-info" style="margin:0px;width:100%;" onclick="nextreload()">OKAY</Button>';
									
									
									}

										echo "</div>";
					echo "</div>";

									

			}//if sa taas

			else
			{
				?>				<script >
						
									swal({
								  title: "Finish!",
								  text: "Exam is already completed!",
								  type: "error",
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								     window.history.back();
								  }, 2000);
								});
		 
							</script>
							<?php
			}



}
else
{


	echo "<script>window.history.back();</script>";


}

?>
<br>


</div>



</html>