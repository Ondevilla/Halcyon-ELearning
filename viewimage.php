<?php
session_start();
include("dbcon.php");
$textid = $_POST["employee_id"];


?>

 
<h4><p align="left">Text Title :</p></h4>
<?php             $table2 = "select * from imagetable WHERE imageid ='$textid'";
            $run_query2b = mysqli_query($dbcon,$table2);
            while($row = mysqli_fetch_array($run_query2b))

                {  

                	?>
<h5><?php echo $row["imagetitle"];?></h5>
<br>
<h4><p align="left">Image :</p></h4>
<img src="<?php echo $row['imagename'];?>">

<?php
}
?>