<html>
<body>

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
			});


v=xy;

destination="number.php?v="+v;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      	xy="";
      window.location.href="rand.php";
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




$mdlid=$_SESSION['mdlid'];
$uid=$_SESSION['uid'];




$check1=mysqli_query($connhalcyon,"SELECT `quiz_total` FROM `mdl_progress` where `userId`=$mdlid and `moduleId`=$uid");
$check = mysqli_fetch_assoc($check1);

if(!isset($check['quiz_total']))
{






$sqlmoduleid="SELECT * FROM result AS r INNER JOIN questions AS q ON r.questionId = q.questionId  WHERE q.moduleId='$mdlid' and r.userId='$uid' and r.isAnswer='0'";
$query = mysqli_query($connhalcyon,$sqlmoduleid);

$max=mysqli_num_rows($query);


while($row = mysqli_fetch_array($query))
{
	
    $question[] = $row['questionid'] ."/-0-/". $row['questioncap'] ."/-1-/". $row['choicea'] ."/-2-/". $row['choiceb'] ."/-3-/". $row['choicec'] ."/-4-/". $row['choiced'];


    

}



		if($max==0)
		{

		}
		else
		{
		shuffle($question);



		$current=count($question);
		$current=11-$current;

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
		<div class="row " >

		<div class='col-md-4' >
		<div style="margin: auto 0;height:auto;">
		<?php 

		$queryimage = mysqli_query($connhalcyon,"SELECT * FROM questions WHERE questionid='$unique' ");
		$imgcount=mysqli_fetch_assoc($queryimage);

			$img[]=$imgcount['imagea'];
			$img[]=$imgcount['imageb'];
			$img[]=$imgcount['imagec'];
			$img[]=$imgcount['imaged'];
								if (isset($imgcount['questionimage']))
								{
								echo '
								<br>
								<div class="card">
								<span class="align-middle">
								    <!--Card image-->
								    <div class="view overlay hm-white-slight">
								        <img src="'.$imgcount['questionimage'].'" style="width:400px;height:300px;margin:auto;" class="img-fluid" alt="Responsive image">
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
								 </div><br>';

								}
								else
								{
								echo ' 
								<br>

								<div class="card" style="padding-top:25%;
								padding-bottom:25%;">


								 <div class="card-block">
								<h2  class="card-title"  align="center" >Question '. $current .'</h2>
								<hr>
								<p class="card-text" align="center" >'.$Qnum.'</p>


								</div>


								</div>
								<br>

								';
								}

		?>
		    <!--/.Card content-->

		<!--/.Card Light-->
		</div>

		</div>



		<div class='col-md-8'  >
		<br>
		<div class='col-md-12' >
		<?php

		$arraynako[]=substr($question[0], ($c1posstart)+5,$back1-5) ;
		$arraynako[]=substr($question[0], ($c2posstart)+5,$back2-5);
		$arraynako[]=substr($question[0], ($c3posstart)+5,$back3-5);
		$arraynako[]=substr($question[0], ($c4posstart)+5);


		shuffle($arraynako);


		
		
	

		for ($i=0; $i <4 ; $i++) { 


		echo "<div class='radioholder'   onclick='sel(this.id)'  id='".$arraynako[($i)]."-id-".$unique."' > ";

		echo "<input type='radio' name='rack'> ";

		echo "<table  cellpadding='5'  width='100%'><tr><td width='5%' class='tick1'><span class='tick'></span></td><td class='tick2'  width='1%'>&nbsp;&nbsp;&nbsp;</td>";

		if(isset($img[$i]))
		{


		echo"<td  width='80%' class='tick2'><span class='texto'>".$arraynako[($i)] ."</span></td >
		<td width='14%' class='tick2'><Button data-toggle='modal' data-target='#modal".$i."' class='btn btn-info' style='width:70px;padding-left:0px;padding-right:0px;'>Show</button></td>";



		echo '

<div class="modal fade" id="modal'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="top:5%;">
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



<img src="'.$img[$i].'"" height="200" width="500" class="img-fluid" alt="Responsive image" >



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



						



				
		echo "<br>";
		echo "</div>";

							echo "<div class='col-md-12' >";
						if ($max==0)
						{
						echo '<Button class="btn btn-info" type="submit" onclick="finisho()" >FINISH</Button>';
						}
						else
						{
						echo '<Button type="submit"  id="wamp" class="btn btn-info " style="margin:0px;width:100%;" onclick="nextreload()">OKAY</Button>';
						}

							echo "</div>";
		echo "</div>";

						

}//if sa taas

else
{
	echo "bawal na dito";
}




?>
<br>


</div>
</div>



</body>
</html>