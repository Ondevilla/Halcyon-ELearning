
 <?php  
 //pagination.php  


session_start();
include("dbcon.php");
$moduleid = $_SESSION["idmod"];
 
 $query = "SELECT * FROM flashtable where moduleid = '$moduleid' ";  
 $result = mysqli_query($dbcon, $query);  

    echo "<div class='row'>";
 $xxxx=0;
 while($row = mysqli_fetch_array($result))  
 {  
  $xxxx=$xxxx+1;

  $modlink="#Modalx".$xxxx;





?>

<button style="width:100%;" data-toggle="modal"   data-target="<?php echo $modlink; ?>" class="btn btn-info " ><?php   echo $row["flashtitle"];    ?></button>

  



    <?php 
 }  

 ?>  
</div>



<link href="css/Fontmoken.css" rel="stylesheet">