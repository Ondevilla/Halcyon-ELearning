
<style type="text/css">
	@media screen and (min-width: 425px) {
    video
    {
      height:250px;
      width: 250px;
    }
    @media screen and (min-width: 768px)
	{
	video {
	    height: 300px;
	    width: 380px;
	}
	}
	 @media screen and (min-width: 1024px)
	{
	video {
	    height: 300px;
	    width: 500px;
	}
	}
	 @media screen and (min-width: 1440px)
	{
	video {
	    height: 450px;
	    width: 850px;
	}
	}
</style>
 <?php  
 //pagination.php  

include("dbcon.php");
include("connect.php");
?>

<div class="card">
    <h3 class="card-header primary-color white-text"><center><i class="fa fa-exclamation" aria-hidden="true"></i>  You're only allowed to take the quiz three times</center></h3>
</div>
<br>
<div class="card">
    <h3 class="card-header primary-color white-text">QUIZ INFORMATION</h3>
    <div class="card-block">
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Date/time Start</th>
       <th>Date/Time End</th>
    	<th>Status</th>
		<th>Quiz Total</th>
    </tr>
  </thead>
  <tbody>

 <?php  
include("dbcon.php");
$moduleid = $_SESSION["idmod"];

$query = "SELECT * FROM coursemodule where moduleid = '$moduleid'";  
$result = mysqli_query($dbcon, $query); 

 while($row = mysqli_fetch_array($result))  
 {
 	//Quiz Latest result

		$query1 = "SELECT * FROM mdl_progress where moduleId = '$moduleid'";  
		$result1 = mysqli_query($dbcon, $query1); 

		 while($row1 = mysqli_fetch_array($result1))  
		 {
			
		 		?><tr><td><?php echo $row1["datetime_start"]; ?></td><?php
		 		?><td><?php echo $row1["datetime_end"]; ?></td><?php
		 		?><td><?php echo $row1["status"]; ?></td><?php
		 		?><td><?php echo $row1["quiz_total"]; ?></td></tr><?php
			 	//Quiz Retake result

				$query2 = "SELECT * FROM mdl_retake where moduleId = '$moduleid' ORDER BY user_mpID DESC";  
				$result2 = mysqli_query($dbcon, $query2); 

				 while($row2 = mysqli_fetch_array($result2))  
				 {  

				 	 
		 		?><tr><td><?php echo $row2["datetime_start"]; ?></td><?php
		 		?><td><?php echo $row2["datetime_end"]; ?></td><?php
		 		?><td><?php echo $row2["status"]; ?></td><?php
		 		?><td><?php echo $row2["quiz_total"]; ?></td></tr><?php
?>


<?php
	}
}
}
?>

  </tbody>
</table>
    </div>
</div>
<p></p>


<link href="css/Fontmoken.css" rel="stylesheet">