<?php


include("dbcon.php");


session_start();



?>

<br><br>

<?php

  $courseid = $_POST["positionname"];
            $table2 = "select * from coursemodule WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);



            if(mysqli_num_rows($run_query2b) > 0)
{

?>


  <?php

  		


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
                     url:"mselect2.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#module_details').html(data);  
                 
                     }  
                });  
           }            
      });   





 </script>


