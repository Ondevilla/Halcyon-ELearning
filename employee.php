<!DOCTYPE html>
<html lang="en">
<html>
<?php

include("connect.php");
include("dbconnect.php");
include("dbcon.php");
//usermng
$space1=mysqli_query($c6,"SELECT * FROM users WHERE userId='".$_SESSION['uid']."'");
while($fil2=mysqli_fetch_assoc($space1))              
{
//user
$empId=$fil2['empId'];
}



if(isset($_SESSION["uid"]))



{










if($_SESSION["getuser"] != 25) //ADMIN

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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


</head>





<?php include 'banner.php' ?>




<body>




<div class="container">
<div class="row col-md-12">
            <div class="col-md-3">
                    <div class="panel-body">
                         <p>
                       <?php



                                $output = '
                                <div class="table-responsive">  
                                     <table class="table table-bordered">';  

                               $query = "SELECT * FROM employees WHERE empId = '$empId'";  
                                $result = mysqli_query($c11, $query); 
                                while($row = mysqli_fetch_array($result))  
                                {  
                                     $output .= '

                                      <br><br><br><br>
                                          <tr>  
                                             <td width="100%" bgcolor="#f3f3f4"><label>Employee No</label></td>
                                          </tr>  
                                          <tr>     
                                            <td width="100%" >'.$row["empno"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="100%" bgcolor="#f3f3f4"><label>Full name</label></td>  
                                          </tr>  
                                          <tr> 
                                               <td width="100%">'.utf8_encode($row["fullname"]).'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="100%" bgcolor="#f3f3f4"><label>Tel no</label></td> 
                                          </tr>  
                                          <tr>  
                                               <td width="100%">'.$row["telno"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="100%" bgcolor="#f3f3f4"><label>Cellphone</label></td>
                                          </tr>  
                                          <tr>   
                                               <td width="100%">'.$row["cellphone"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="100%" bgcolor="#f3f3f4"><label>Email</label></td>
                                          </tr>  
                                          <tr>  
                                               <td width="100%">'.$row["email"].'</td>  
                                          </tr>  
                                     ';  
                                }  
                                $output .= '  
                                     </table>  
                                </div>  
                                ';  
                                echo $output;  
                           
                           ?>
                         </p>
                      </div>

                    </div>
               



             <div class="col-md-9">
<br>
<!-- Nav tabs -->
<ul class="nav nav-tabs md-pills pills-ins" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab"><i class="fa fa-user"></i>Personal Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel12" role="tab"><i class="fa fa-users"></i> Guardians</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel13" role="tab"><i class="fa fa-home"></i> Address</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel4" role="tab"><i class="fa fa-info"></i> Other Info</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-envelope"></i> Course Status</a>
    </li>




</ul>

<!-- Tab panels -->
<div class="tab-content">

    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
        <br>

                                                <?php    
                                                           $output = '';  

                                                          $query = "SELECT * FROM employees WHERE empId='$empId'";  
                                                          $result = mysqli_query($c11, $query); 
                                                        

                                                    $output .= '  
                                                    <div class="table-responsive">  
                                                         <table class="table table-bordered">';  
                                                    while($row = mysqli_fetch_array($result))  
                                                    {  
                                                            $query1 = "SELECT * FROM civilstatus WHERE csId = '".$row["civilStatus"]."'";  
                                                              $result1 = mysqli_query($c11, $query1); 
                                                              $row1 = mysqli_fetch_array($result1);
                                                       

                                                         $output .= '  
                                                              <tr >  
                                                                   <td width="20%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="40%" >'.utf8_encode($row["lname"]).'</td>  
                                                                 <td width="20%" bgcolor="#f3f3f4"><label> First Name</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["fname"]) .'</td>
                                                              </tr>  
                                                               <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Middle Name</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["mname"]).'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Nick Name</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["nickname"]).'</td>
                                                              </tr>  
                                                               <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Gender</label></td>  
                                                                   <td colspan = "3" >'.$row["gender"].'</td>
                                                                 
                                                              </tr> 
                                                                <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Civil Status</label></td>  
                                                                   <td colspan = "3">'.$row1["cStatus"].'</td> 
                                                                  
                                                              </tr>    
                                                              <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Birth Date</label></td>  
                                                                   <td width="35%" >'.$row["birthDate"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Birthday Place</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["birthPlace"]).'</td>
                                                              </tr> 
                                                              <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Nationality</label></td>  
                                                                   <td width="35%" >'.$row["nationality"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Religion</label></td>  
                                                                   <td width="35%" >'.$row["religion"].'</td>
                                                              </tr> 
                                                              <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Height</label></td>  
                                                                   <td width="35%" >'.$row["height"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Weight</label></td>  
                                                                   <td width="35%" >'.$row["weight"].'</td>
                                                              </tr>   

                                                             
                                                         ';  
                                                    }  
                                                    $output .= '  
                                                         </table>  
                                                    </div>  
                                                    ';  
                                                    echo $output;  
                                               
                                               ?>

    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel12" role="tabpanel">
        <br>

                                                   <?php    
                                                  $output = '';  
                                                          $query = "SELECT * FROM employees WHERE empId='$empId'";  
                                                          $result = mysqli_query($c11, $query); 
                                                    $output .= '  
                                                    <div class="table-responsive">  
                                                         <table class="table table-bordered">';  
                                                    while($row = mysqli_fetch_array($result))  
                                                    {  
                                                         $output .= '  
                                                      <th colspan="6"><centeR>Mother</center></th>
                                                          <tr>  
                                                                <td width="20%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td  >'.utf8_encode($row["m_lname"]).'</td>  
                                                                <td width="20%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td  >'.utf8_encode($row["m_fname"]).'</td>
                                                                <td width="20%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td  >'.utf8_encode($row["m_mname"]).'</td> 
                                                          </tr>  
                                                        <th colspan="6"><centeR>Father</center></th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["f_lname"]).'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["f_fname"]).'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["f_mname"]).'</td> 
                                                          </tr> 
                                                    <th colspan="6"><centeR>Spouse</center></th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["spouse_lname"]).'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["spouse_fname"]).'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row["spouse_mname"]).'</td> 
                                                          </tr> 
                                                           <th colspan="6"><centeR>Emergency</center></th>
                                                 
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Person</label></td>  
                                                                   <td width="35%" >'.$row["emerg_person"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Relation</label></td>  
                                                                   <td width="35%" >'.$row["emerg_relation"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Contact</label></td>  
                                                                   <td width="35%" >'.$row["emerg_contact"].'</td> 
                                                          </tr>
                                                     
                                                         ';  
                                                    }  
                                                    $output .= '  
                                                         </table>  
                                                    </div>  
                                                    ';  
                                                    echo $output;  
                                               
                                               ?>

    </div>
    <!--/.Panel 2-->

    <!--Panel 3-->
    <div class="tab-pane fade" id="panel13" role="tabpanel">
        <br>

 <?php    
                                               $output = '';  
                              
                                $query = "SELECT * FROM employees WHERE empId = '$empId'";  
                                $result = mysqli_query($c11, $query); 
                                                $output .= '  
                                                <div class="table-responsive">  
                                                     <table class="table table-bordered">';  
                                                while($row = mysqli_fetch_array($result))  
                                                {  


                                         
                          $query2 = "SELECT * FROM cities WHERE cityId = '".$row["city"]."'";  
                          $result2 = mysqli_query($c11, $query2); 
                          $row2 = mysqli_fetch_array($result2);
                          ?>

                            
                          <?php
                          $query3 = "SELECT * FROM provinces WHERE provId = '".$row["province"]."'";  
                          $result3 = mysqli_query($c11, $query3); 
                          $row3 = mysqli_fetch_array($result3);
                          


                                                     $output .= '  
                                                      <th colspan="4">Address</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Address 1</label></td>  
                                                                   <td width="35%" colspan="3" >'.utf8_encode($row["address1"]).'</td>  
                                                                      </tr>    
                                                          <tr>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Address 2</label></td>  
                                                                <td width="35%" colspan="3" >'.utf8_encode($row["address2"]).'</td>
                                                           </tr>  
                                                                  <td width="15%" bgcolor="#f3f3f4"><label>Address 3</label></td>  
                                                                   <td width="35%"  colspan="3">'.utf8_encode($row["address3"]).'</td> 
                                                          </tr>
   
                                                            <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>City</label></td>  
                                                                   <td width="35%" >'.$row2["city"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Province</label></td>  
                                                                   <td width="35%" >'.utf8_encode($row3["province"]).'</td>
                                                          </tr>
                                                             <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Zipcode</label></td>  
                                                                   <td width="35%" >'.$row["zipcode"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Country</label></td>  
                                                                   <td width="35%" >'.$row["country"].'</td>
                                                          </tr>   

                                                     ';  
                                                }  
                                                $output .= '  
                                                     </table>  
                                                </div>  
                                                ';  
                                                echo $output;  
                                           
                                           ?>

    </div>
    <!--/.Panel 3-->

    <!--Panel 4-->
    <div class="tab-pane fade" id="panel4" role="tabpanel">
        <br>


 <?php    
                                               $output = '';  
                              
                                $query = "SELECT * FROM employees WHERE empId = '$empId'";  
                                $result = mysqli_query($c11, $query); 
                                                $output .= '  
                                                <div class="table-responsive">  
                                                     <table class="table table-bordered">';  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                     $output .= '  
  
                                                         <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Date Hire</label></td>  
                                                                   <td width="35%" >'.$row["date_hire"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Date Regular</label></td>  
                                                                   <td width="35%" >'.$row["date_regular"].'</td>
                                                          </tr> 
                                                          <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Date Separated</label></td>  
                                                                   <td width="35%" >'.$row["date_separated"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Seperation Reason</label></td>  
                                                                   <td width="35%" >'.$row["separation_reason"].'</td>
                                                          </tr> 
                                                     ';  
                                                }  
                                                $output .= '  
                                                     </table>  
                                                </div>  
                                                ';  
                                                echo $output;  
                                           
                                           ?>

    </div>
    <!--/.Panel 4-->
     <!--Panel 5-->
    <div class="tab-pane fade" id="panel5" role="tabpanel">
        <br>
 
<div class="table-responsive">
<table class="table table-bordered">
    <tr >    
            <td width="100%" colspan="5">
            <center>
            <?php echo $_SESSION['pn']; ?>
          </td>  
    </tr>     
                         
  </center>
    <?php


$quantum1=mysqli_query($dbcon,"SELECT * FROM courseposition WHERE jobid='".$_SESSION['posId']."'");
//get its position to get there courses
while($physics1=mysqli_fetch_assoc($quantum1))              
{

//coursemodule  
  $quantum2=mysqli_query($dbcon,"SELECT * FROM cor_progress WHERE  posId='".$_SESSION['posId']."' and  courseid='".$physics1['courseid']."'");
//loop
while($physics2=mysqli_fetch_assoc($quantum2))
    {
/////////////////////////////






  $quantum3=mysqli_query($dbcon,"SELECT * FROM coursemodule WHERE  courseid='".$physics2['courseId']."'");





  /////////////////////////////
        ?>
        <tr>
          <td bgcolor="#77b6ec">Course Name</td><td colspan ="3" bgcolor="#77b6ec"><?php echo $physics2['coursename'];    
          ?>
        
        
         <?php  
         
                    ?>
                <?php
                  $query = "SELECT * FROM coursemodule where  courseid='".$physics2['courseId']."'";  
                  $result = mysqli_query($dbcon, $query); 
                  $bracelet=mysqli_num_rows($result);
          

                 if($bracelet==0)
                  {
                      echo "  <span style='float:right;'>  NOT YET AVAILABLE</span></td>";
                  } 
                  else
                  {
                        echo "</td>";

                  }
                        echo " </tr> ";
                   while($row = mysqli_fetch_array($result))  
                   {

                    //Quiz Latest result
                      $query1 = "SELECT * FROM mdl_progress where moduleId = '".$row['moduleid']."'";  
                      $result1 = mysqli_query($dbcon, $query1); 
             

      ?><tr>
          <td bgcolor="#f3f3f4">Module Name</td><td colspan ="3"  bgcolor="#f3f3f4"><?php echo $row["modulename"]; ?></td>
          
         
          

            <tr>
              <th>Date/time Start</th>
               <th>Date/Time End</th>
              <th>Status</th>
            <th>Quiz Total</th>
            </tr>
           </tr><?php
                       while($row1 = mysqli_fetch_array($result1))  
                       {
                        
                          ?><tr><td><?php echo $row1["datetime_start"]; ?></td>
                          <td><?php echo $row1["datetime_end"]; ?></td>
                          <td><?php echo $row1["status"]; ?></td>
                          <td><?php echo $row1["quiz_total"]; ?></td></tr><?php
                          //Quiz Retake result

                          $query2 = "SELECT * FROM mdl_retake where moduleId =  '".$row1['moduleId']."' ORDER BY user_mpID DESC";  
                          $result2 = mysqli_query($dbcon, $query2);     
                           while($row2 = mysqli_fetch_array($result2))  
                           {  
                              ?><tr><td><?php echo $row2["datetime_start"]; ?></td>
                              <td><?php echo $row2["datetime_end"]; ?></td>
                              <td><?php echo $row2["status"]; ?></td>
                              <td><?php echo $row2["quiz_total"]; ?></td></tr><?php
                            }




                        }

                    }
                  ?>
             <?php
                                                     
      }
}
?>
                      </table>
           

    </div>
    <!--/.Panel 5-->
</div>


            </div>

</div>
</div>


</body>





    <!-- SCRIPTS -->
    <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</html>


