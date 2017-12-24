<?php

include("dbcon.php");
session_start();
include("javascript.php");


$courseid = $_POST["employee_id"];

            $table2 = "select * from coursemodule WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  



?>



<button style="width: 100%;"  id="<?php echo $row['moduleid']; ?>"  class="btn btn-info btn-xs view_module"><?php echo $row["modulename"];  ?> </button><br>



<?php


}







?>



<script>
    



$(document).on('click', '.view_module', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"startmodule.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#displaymod').html(data);                           
                  
                     }  
                });  
           }            
      });   

</script>