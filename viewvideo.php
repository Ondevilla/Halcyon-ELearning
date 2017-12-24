<?php
session_start();
include("dbcon.php");
$textid = $_POST["employee_id"];


?>

 
<h4><p align="left">Text Title :</p></h4>
<?php             $table2 = "select * from videotable WHERE videoid ='$textid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  

                	?>
<h5><?php echo $row["videotitle"];?></h5>
<br>
<h4><p align="left">Video :</p></h4>

<video width="460" height="320" autoplay controls>
  <source src="<?php echo $row['videoname'];?>" type="video/mp4">
</video>
<?php
}
?>