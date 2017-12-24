<?php


include("dbcon.php");
session_start();



$_SESSION["theid"] = $_POST["employee_id"];

?>



 <div class="col-md-12">
 <img  style="width: 100%;" src="emergencyawareness1.jpg">
 </div>


<i><b><p>Please choose the date to be generated</p></i></b>
  
<center>
 <div class="row col-md-12">



    <div class="col-md-8">


     <form action = "tine1.php" method="POST">
 <input type="date"  name = "datos" id = "date1" required></input>
 <input type="submit" class="btn btn-info" name="submit" value = "Generate" >
</form>




    </form>
    </div>
    <div class="col-md-4">
    <a href="pdf1.php">
    <input type="submit" class="btn btn-info" name="submit" value = "pdf" >
</a>
    </div>
</div>





