
  <table class='table table-bordered'>  
         <tr>
     <th style='background-color:#33b5e5';><center> Employee Id</center></th>
     <th style='background-color:#33b5e5';><center> Full name</center></th>      
     <th style='background-color:#33b5e5';><center> Profile</center></th>
     <th style='background-color:#33b5e5';><center>  Certificate</center></th>
     <th style='background-color:#33b5e5';><center> Result</center></th>
    </tr> 




<?php
//fetch.php
include("dbconnect.php");
include("dbcon.php");
$output = '';




 $record_per_page = 13;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM employees ";
 $query.= " ORDER BY empId ASC LIMIT $start_from, $record_per_page";  
 
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($c11, $_POST["query"]);
 $query = "
  SELECT * FROM employees 
  WHERE empno LIKE '%".$search."%'
  OR fullname LIKE '%".$search."%'
 ";
}



 $result = mysqli_query($c11, $query);  

 while($row = mysqli_fetch_array($result))  
 {  

      $output .= '  
           <tr>
        <td>'.$row["empId"].'</td>
        <td><center>'.utf8_encode($row["fullname"]).'</center></td>
        <td>
         <button name="view"  id="'.$row["empId"].'"class="btn btn-info btn-lg view_data"><i class="fa fa-user"></i></button>
        </td>

        <td>


<div class="row col-md-12">
<div class="col-md-6">
                <button name="Certificate" value="" onclick="getid(this.id)" id="'.$row["empId"].'" 
         class="btn btn-info btn-lg Certificate" ><i class="fa fa-book"></i></button>
</div>
<div class="col-md-6">
      <button name="Certificate" onclick="getid(this.id)" id="'.$row["empId"].'" class="btn btn-info btn-lg EarthQuake">
      <i class="fa fa-globe"></i></button>
      </div>
</div>



    </td>


        <td>
         <button name="view" id="'.$row["empId"].'"class="btn btn-info btn-lg sup" data-toggle="modal" data-target="#dataModal1"><i class="fa fa-eye"></i></button>
        </td>


        </a>
        </td>
    </tr>
      ';  
 }  
















 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM employees ORDER BY empId ASC";  
 $page_result = mysqli_query($c11, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  

















<script>
$(document).on('click', '.view_data', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"reselect.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                              $('#dataModal').modal('show');                
                     }  
                });  
           }            
      });   

$(document).on('click', '.sup', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"viewresult.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail1').html(data);  
                              
                     }  
                });  

                             $.ajax(
                                {  
                                     url:"blank.php",  
                                     method:"POST",  
                                     data:{employee_id:employee_id},  
                                     success:function(data){  
                                        
                                           $('#employee_detail2').html(data);  
                                     }  
                                }); 

           }            
      });   


$(document).on('click', '.Certificate', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"self.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#data3').html(data);  
                          $('#dataModalC').modal('show');  
                     }  
                });  
           }            
      });   


$(document).on('click', '.EarthQuake', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"self1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#data4').html(data);  
                          $('#dataModalE').modal('show');  
                     }  
                });  
           }            
      });   

</script>
