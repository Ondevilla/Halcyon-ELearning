<?php
session_start();
include("dbcon.php");

$questionid = $_POST["employee_id"];

?>

<div class="row container">

<div class="col-md-6">
<h4>Question :</h4>

<?php


            $table2 = "select * from questions where questionid = '$questionid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))


{




?>



<h5><?php echo $row["questioncap"]; ?></h5><br>
<?php

if(isset($row["questionimage"]))
{
	?>
<img style="width:50%;" src="<?php echo $row['questionimage']; ?>">
	<?php
}




?>

<br>

Answer : <?php echo $row["questionanswer"]; ?>


</div>



<div class="row col-md-6">



<div class="col-md-6">


<?php  echo $row["choicea"];  ?>
<br>

<?php

if(isset($row["imagea"]))
{
?>

<img style="width: 250px; height: 130px;" src="<?php echo $row['imagea'];  ?>">
<?php 
}


else

{
	echo "";
}
?>
<br>



<?php echo $row["choiceb"];  ?>
<br>


<?php

if(isset($row["imageb"]))
{
?>


		<img style="width: 250px; height: 130px;" src="<?php echo $row['imageb'];  ?>">


<?php 
}


else

{
	echo "";
}
?>
<br>
</div>


<div class="col-md-6">



<?php echo $row["choicec"];  ?>
<br>



		<?php

		if(isset($row["imagec"]))
		{
		?>


<img style="width: 250px; height: 130px;" src="<?php echo $row['imagec'];  ?>">
<?php 
}


else

{
	echo "";
}
?>

<br>
<?php echo $row["choiced"];  ?>
<br>




		<?php

		if(isset($row["imagec"]))
		{
		?>
<img style="width: 250px; height: 130px;" src="<?php echo $row['imaged'];  ?>">
<?php 
}


else

{
	echo "";
}
?>
<br>


</div>




</div>


<?php
}
?>
</div>