
<?php
include("connect.php");
include("dbcon.php");


$_SESSION["courseid"] = $_POST["employee_id"];




?>

<h4>Course Title : </h4>
<input type="text" placeholder="Enter Course Title Here ..." id="ctitle1" name="ctitle1" required></input>
<br>
<br>
<h4>Description</h4>
<textarea rows="7" cols="50" id="cdetails1" name="cdetails1" required></textarea>
<br><br>
<h4>Add Image</h4>
<h5><input type="file" name="image" id="image" accept="image/*" required></input>
<br>
<br>
