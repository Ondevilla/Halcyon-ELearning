<?php

include ('import.css.js.php'); 

include("dbcon.php");
$try=$_POST["datos"]; 

?><br>


<?php
$year = substr($try,0,4);

?>

<br>

<?php
$month =  substr($try,5,2);

?>
<br>

<?php
$day =  substr($try,8);


//day
	if($day == "01")
	{
			$day1 = "1st";
	}
	elseif($day == "02")
	{		
			$day1 = "2nd";
	}
	elseif($day == "03")
	{
			$day1 = "3rd";
	}
	elseif($day == "04")
	{
			$day1 = "4th";
	}
	elseif($day == "05")
	{
			$day1 = "5th";
	}
	elseif($day == "06")
	{
			$day1 = "6th";
	}
	elseif($day == "07")
	{
			$day1 = "7th";
	}
	elseif($day == "08")
	{
			$day1 = "8th";
	}
	elseif($day == "09")
	{
			$day1 = "9th";
	}
	else
	{		
		
			$day1 = $day."th";
	}
	

//month
	if($month == "01")
	{
			$month1 = "January";
	}
	if($month == "02")
	{		
			$month1 = "February";
	}
	if($month == "03")
	{
			$month1 = "March";
	}
	if($month == "04")
	{
			$month1 = "April";
	}
	if($month == "05")
	{
			$month1 = "May";
	}
	if($month == "06")
	{
			$month1 = "June";
	}
	if($month == "07")
	{
			$month1 = "July";
	}
	if($month == "08")
	{
			$month1 = "August";
	}
	if($month == "09")
	{
			$month1 = "September";
	}
	if($month == "10")
	{
			$month1 = "October";
	}
	if($month == "11")
	{
			$month1 = "November";
	}
	if($month == "12")
	{
			$month1 = "December";
	}




$query1 ="INSERT INTO date1 (date1) VALUES ('Given this ".$day1." of ".$month1." ".$year." at Halcyon Marine Head Office Makati City, Philippines.')";
$result1 =mysqli_query($dbcon, $query1);  

?>
<script>
		swal({
								   title: "Date Generated",
								  text: "You have Successfully Generate the Date",
								  html: true,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
									},
								function(){
								  setTimeout(function(){
								     window.location.href="pdf1.php";
								  }, 2000);
								});


</script>