<?php


session_start();
include("dbcon.php");
$_SESSION["imagemod"] = $_POST["employee_id"];

?>

<span style="text-align: left;"><h3>Add Image</h3></span>
<br><br><br>
<span style="text-align: left;"><h5>Image Title</h5></span>
<input type="text" name="imagetitle"></input>
<br><br>
<span style="text-align: left;"><h5>Image File</h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="image" accept="image/*" required ></input></h5></span>



<?php


?>