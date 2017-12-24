<?php
session_start();
include("dbcon.php");

$_SESSION["videomod"] = $_POST["employee_id"];
?>

<span style="text-align: left;"><h3>Add Video</h3></span>
<br><br><br>
<span style="text-align: left;"><h5>Video Title</h5></span>
<input type="text" name="videotitle"></input>
<br><br>
<span style="text-align: left;"><h5>Video File</h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="video" accept="video/*" required ></input></h5></span>



<?php


?>