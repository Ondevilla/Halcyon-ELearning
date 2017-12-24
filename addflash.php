<?php
session_start();
include("dbcon.php");

$_SESSION["flashmod"] = $_POST["employee_id"];
?>

<span style="text-align: left;"><h3>Add Flash</h3></span>
<br><br><br>
<span style="text-align: left;"><h5>Flash Title</h5></span>
<input type="text" name="flashtitle"></input>
<br><br>
<span style="text-align: left;"><h5>Flash File</h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="flash" accept=".swf" required ></input></h5></span>



<?php


?>