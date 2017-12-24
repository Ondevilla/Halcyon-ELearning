<!DOCTYPE html>
<html lang="en">
<html>


<style type="text/css">
th {
  text-align: center;
  color:white;

}

td 
{
  text-align: center;


}
.table td {

    vertical-align: top;
     text-align: center;
}
</style>



 <?php  
include("dbcon.php");

include("dbconnect.php");


session_start();
if(isset($_SESSION["uid"]))



{










if($_SESSION["getuser"] != 23) //ADMIN

{
  

        echo"<script>window.open('login2.php','_self')</script>";

        exit();

}






}


else

{


          echo"<script>window.open('login2.php','_self')</script>";
        exit();


}










 $query = "SELECT * FROM employees ORDER BY empId ASC";  
 $result = mysqli_query($c11, $query);  
 ?>  

<head>
<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Employee</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Employee</title>

 <?php } ?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->





    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

<link href="css/Fontmoken.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

<?php include 'banneradmin.php' ?>




<body>


  <div class="container">
   <br />
   <h2 align="center"> Employee List</h2><br />
     <div class="form-group">
                <div class="input-group">
                 <span class="input-group-addon">Search</span>
                 <input type="text" name="search_text" id="search_text" placeholder="Search by fullname" class="form-control" />
             </div>
<br>
<!--<input type="radio" onclick="alert('hello');"/>-->


                                
                                      <div id="result" ></div>
                          </div>
                <div class="table-responsive" id= "pagination_data">  
                </div>  




           </div>  

   
 
  </div>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  



<div id="dataModal1" class="modal fade">  
      <div class="modal-dialog" role="document" style="max-width: 100%;">  
           <div class="modal-content" >  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Results</h4>  
                </div>  
                <div class="modal-body">  

                        <div class="row col-md-14">
                          <div class="col-md-5" id="employee_detail1">
                          </div>
                          <div class="col-md-6" id="employee_detail2">
                          </div>

                        </div>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 



<div id="dataModalC" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Date for Elearning Completion</h4>  
                </div>  
                <div class="modal-body" id="data3">  

                <div class="row col-md-6"> 
                
                </div>

                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 



<div id="dataModalE" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Date for EarthQuake Completion</h4>  
                </div>  
                <div class="modal-body"  id="data4">  
                  

                      <div class="row col-md-6">
                     
              
           

                        </div>
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 





 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee List</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br />  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control" />  
                          <br />  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control" />  
                          <br />  
                          <input type="hidden" name="employee_id" id="employee_id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 </body>




















<script>




 $(document).ready(function()
 {  
      load_data1();  
      function load_data1(page)  
      {  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data)
                {  
                     $('#result').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data1(page);  
      });  


 });  


$(document).ready(function()
{
   load_data();

   function load_data(query)
   {
       $.ajax(
        {
             url:"fetch.php",
             method:"POST",
             data:{query:query},
             success:function(data)
               {
                $('#result').html(data);
               }
        });
    }
     
    $('#search_text').keyup(function()
    {
                  var search = $(this).val();
                  if(search != '')
                  {
                   load_data(search);
                  }
                  else
                  {
                   load_data();
                  }
    });
});









$(document).on('click', '.view_data', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"eselect.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data)
                     {  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });





</script>







    <!-- SCRIPTS -->


    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</html>

