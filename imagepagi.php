

  <div class="demomomo">
    <ul id="lightSlider">


<?php

session_start();
include("dbcon.php");

$moduleid = $_SESSION["idmod"];

 $query = "SELECT * FROM imagetable where moduleid = '$moduleid'";  
 $result = mysqli_query($dbcon, $query);  

?>






<?php
 while($row = mysqli_fetch_array($result))  
 {  



?>
        <li  data-thumb="<?php  echo $row["imagename"]; ?>">
            <center><img  class="img2" height="50%" width="50%" 	 src="<?php  echo $row["imagename"]; ?>" />
        </li>




   <?php 



}


?>
    </ul>
</div>


<?php include ("slider.php"); ?>
