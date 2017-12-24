<?php



include("dbcon.php");
include("dbconnect.php");

session_start();

   $mtitle = $_POST["mtitle1"];
    $mdetails = $_POST["mdetails1"];
    $counter = "0";
    $coursename = $_POST["getpos"];
$_SESSION["checkpos1"] = $_POST["getpos"];

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From fcourse WHERE id = '".$coursename."'"));






$remarks2= $mtitle ." module created and tag to course ". $roww1['coursename'] ;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());




            $table2c = "INSERT INTO modules (modulename,description,isUsed) VALUES ('$mtitle','$mdetails','$counter')";
            $run_query2d = mysqli_query($dbcon,$table2c);    



            $table2 = "select * from modules WHERE modulename = '$mtitle'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

                { 

                        $moduleid = $row["id"];

                }


            $table2c = "INSERT INTO coursemodule (modulename,courseid,moduleid) VALUES ('$mtitle','$coursename','$moduleid')";
            $run_query2a = mysqli_query($dbcon,$table2c);




if(isset($_SESSION["showpos"]))

{




$courseid = $_SESSION["showpos"];





            $table2 = "select * from coursemodule WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);



            if(mysqli_num_rows($run_query2b) > 0)
{






  		


           $table2 = "select * from coursemodule WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);


            while($row = mysqli_fetch_array($run_query2b))

{  



  ?>

      

    <button  name="view" value="View" onlick="dolog()" id="<?php echo $row["moduleid"]; ?>"  class="btn btn-info btn-xs view_data"> 

 <?php echo $row["modulename"]; ?>

    </button>


 
<?php




}



?>
<br>

<?php

}


else

{
 echo 'Data Not Found';
}
?>


<script>
$(document).on('click', '.view_data', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"mselect1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#module_details').html(data);  
                 
                     }  
                });  
           }            
      });   





 </script>

<?php



}






















?>