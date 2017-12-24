<?php

include("dbcon.php");
include("dbconnect.php");
include("connect.php");




$ninaken = $_POST["employee_id"];
$comp = "Completed";


            $table2 = "UPDATE imagetable SET status='$comp' WHERE imageid='$ninaken'";
            $run_query2b = mysqli_query($dbcon,$table2);

$moduleid = $_SESSION["idmod"];

 $query = "SELECT * FROM imagetable where moduleid = '$moduleid'";  
 $result = mysqli_query($dbcon, $query);  

    echo "<div class='row'>";

 $xxxxs=0;
 while($row = mysqli_fetch_array($result))  
 {  
    $xxxxs=$xxxxs+1;
  $modlinks="#Modalxx".$xxxxs;
		?><?php

              if($row['status']=='Pending')
              {
					?>


						    <button style="width:100%;background-color:#00b0ff;"  id="<?php echo $row["imageid"]; ?>" class="btn ninaken" data-toggle="modal"  data-target="<?php echo $modlinks; ?>"> 
						    <?php  echo $row["imagetitle"]; ?>
						    </button>



		<?php
              }
                if($row['status']=='Completed')
              {
              	?>
               <button style="width:100%; background-color:#00c853;" id="<?php echo $row["imageid"]; ?>" class="btn ninaken" data-toggle="modal"  data-target="<?php echo $modlinks; ?>"> 
			    <?php  echo $row["imagetitle"]; ?>
			    </button>
               <?php
              }

 } 





?>