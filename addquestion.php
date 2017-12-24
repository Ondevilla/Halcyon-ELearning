<?php


session_start();
include("dbcon.php");
$_SESSION["qmod"] = $_POST["employee_id"];

?>




<h4>Input Question</h4>
<input type="text" placeholder="Enter your Question here ..." name="question" required></input>
<br>
<br><span style="text-align: left;"><h5><input type="file" name="qimage" accept="image/*"  ></input></h5></span>
<br>



<div class="row">
<div align="left" class="col-md-6">
<form>
<input type="radio" name="choice" value="A" required>A <input type="text" placeholder="Choice A" name="ansa"  required></input><br>
<input type="radio" name="choice" value="B" required>B <input type="text" placeholder="Choice B" name="ansb" required></input><br>
<input type="radio" name="choice" value="C" required>C <input type="text" placeholder="Choice C" name="ansc" required></input><br>
<input type="radio" name="choice" value="D" required>D <input type="text" placeholder="Choice D" name="ansd" required></input><br></div>
</form>


<div class="col-md-6">
<span style="text-align: left;"><h5><input type="file" name="imagea" accept="image/*"  ></input></h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="imageb" accept="image/*"  ></input></h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="imagec" accept="image/*"  ></input></h5></span>
<br>
<span style="text-align: left;"><h5><input type="file" name="imaged" accept="image/*"  ></input></h5></span>
<br>




</div>


</div>

    