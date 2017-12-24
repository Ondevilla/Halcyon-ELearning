
<?php

session_start();
include("dbcon.php");
$_SESSION["textmod"] = $_POST["employee_id"];






?>


<span style="text-align: left;"><h3>Add Text</h3></span>
<br><br><br>
<span style="text-align: left;"><h5>Title</h5></span>
<input type="text" name="title"></input>
<br><br>
<span style="text-align: left;"><h5>Overview</h5></span>
<br>
<textarea rows="7" cols="50"  name="overview"></textarea>





<?php


?>
