
 <?php
 
 include("dbcon.php");
 ?>           


<ul class="nav nav-tabs tabs-3" style = "background-color:#ffffff;" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" style="color:black;" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i> Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Personal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-users"></i> Guardians</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-home"></i> Address</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color:black;" data-toggle="tab" href="#panel9" role="tab"><i class="fa fa-info"></i> Other Info</a>
    </li>

</ul>
<!-- Tab panels -->
<div class="tab-content">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
        <br>
        <p>

 <?php
 

              include("dbconnect.php");
              $query = "SELECT * FROM employees WHERE empId = '".$_POST["employee_id"]."'";  
              $result = mysqli_query($c11, $query); 

              while($row = mysqli_fetch_array($result))  
              { 



   


























 ?>           

 <div class="row col-md-12">
<div class="col-md-4">
 <img  style="width: 100%;" src="<?php echo $row["picture"]; ?>">
 </div>

 <div class="col-md-8">
<table class="table table-striped table-bordered">
  <thead>

  </thead>
  <tbody>
 

    <tr>
                             <td width="30%" ><label><b>Employee No. :</b></label></td>  
                             <td width="70%" ><?php echo $row["empId"] ?></td> 
    </tr>
    <tr>
                             <td width="30%" ><label><b>Full Name :</b></label></td>  
                             <td width="70%" ><?php echo $row["fullname"] ?></td> 
 
    </tr>
    <tr>
                             <td width="30%" ><label><b>Telephone :</b></label></td>  
                             <td width="70%" ><?php echo $row["telno"] ?></td> 
 
    </tr>
    <tr>
                             <td width="30%" ><label><b>Cellphone :</b></label></td>  
                             <td width="70%" ><?php echo $row["cellphone"] ?></td> 
 
    </tr>
    <tr>
                             <td width="30%" ><label><b>Email :</b></label></td>  
                             <td width="70%" ><?php echo $row["email"] ?></td> 
 
    </tr>    

    <?php 

            

    ?>
  </tbody>
</table>

</div>
 </div>









        </p>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel6" role="tabpanel">
        <br>
        <p>
            

 <?php
 

 ?>           

 <div class="row col-md-12">



<table class="table table-striped table-bordered">
  <thead>

  </thead>
  <tbody>
 

    <tr>
                             <td><label><b>Last Name :</b></label></td>  
                             <td><?php echo $row["lname"] ?></td> 
                             <td><label><b>First Name :</b></label></td>  
                             <td><?php echo $row["fname"] ?></td>                              
    </tr>
    <tr>
                             <td><label><b>Middle Name :</b></label></td>  
                             <td><?php echo $row["mname"] ?></td> 
                              <td><label><b>Nickname:</b></label></td>  
                             <td><?php echo $row["nickname"] ?></td> 
    </tr>
    <tr>
                             <td><label><b>Gender :</b></label></td>  
                             <td><?php echo $row["gender"] ?></td> 
                               <td><label><b>Civil Status :</b></label></td>  
                             <td><?php echo $row["civilStatus"] ?></td> 
    </tr>
    <tr>
                             <td><label><b>Birth Date :</b></label></td>  
                             <td><?php echo $row["birthDate"] ?></td> 
                               <td><label><b>Birth Place :</b></label></td>  
                             <td><?php echo $row["birthPlace"] ?></td> 
    </tr>
    <tr>
                             <td><label><b>Nationality :</b></label></td>  
                             <td><?php echo $row["nationality"] ?></td> 
                               <td><label><b>Religion :</b></label></td>  
                             <td><?php echo $row["religion"] ?></td> 
    </tr>    
    <tr>
                             <td><label><b>Height :</b></label></td>  
                             <td><?php echo $row["height"] ?></td> 
                               <td><label><b>Weight :</b></label></td>  
                             <td><?php echo $row["weight"] ?></td> 
    </tr> 
    <?php 

            

    ?>
  </tbody>
</table>
</div>


        </p>
     
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel7" role="tabpanel">
        <br>
        <p>
            

 <?php
 

 ?>           

 <div class="col-md-12">



<table class="table table-striped table-bordered">
  <thead>

  </thead>
  <tbody>
 

    <tr>

                             <td><label><b>Mother :</b></label></td> 
                             <td></td><td></td><td></td><td></td><td></td>   
    </tr>
                          
    <tr>
                             <td><label><b>Last Name :</b></label></td>                             
                             <td><?php echo $row["m_lname"] ?></td> 
                             <td><label><b>First Name :</b></label></td>  
                             <td><?php echo $row["f_lname"] ?></td>
                              <td><label><b>Middle Name :</b></label></td>  
                             <td><?php echo $row["m_lname"] ?></td>                            
    </tr>
    <tr>

                             <td><label><b>Father :</b></label></td> 
                             <td></td><td></td><td></td><td></td><td></td>   
    </tr>
                          
    <tr>
                             <td><label><b>Last Name :</b></label></td>                             
                             <td><?php echo $row["m_fname"] ?></td> 
                             <td><label><b>First Name :</b></label></td>  
                             <td><?php echo $row["f_fname"] ?></td>
                              <td><label><b>Middle Name :</b></label></td>  
                             <td><?php echo $row["m_fname"] ?></td>                            
    </tr>

    <tr>

                             <td><label><b>Spouse :</b></label></td> 
                             <td></td><td></td><td></td><td></td><td></td>   
    </tr>
                          
    <tr>
                             <td><label><b>Last Name :</b></label></td>                             
                             <td><?php echo $row["spouse_fname"] ?></td> 
                             <td><label><b>First Name :</b></label></td>  
                             <td><?php echo $row["spouse_fname"] ?></td>
                              <td><label><b>Middle Name :</b></label></td>  
                             <td><?php echo $row["spouse_fname"] ?></td>                            
    </tr>




    <?php 

            

    ?>
  </tbody>
</table>
</div>




        </p>
    </div>
    <div class="tab-pane fade" id="panel8" role="tabpanel">
        <br>
        <p>


 <?php
 


 ?>           

 <div class="col-md-12">



<table class="table table-striped table-bordered">
  <thead>

  </thead>
  <tbody>
 


                          
    <tr>
                             <td width="40%"><label><b>Address 1 :</b></label></td>                             
                             <td><?php echo $row["address1"]; ?></td> 
                            <td></td><td></td>
    </tr>

                          
    <tr>
                             <td width="40%"><label><b>Address 2 :</b></label></td>                             
                             <td><?php echo $row["address2"]; ?></td> 
                             <td></td><td></td>                                       
    </tr>
    <tr>
                             <td width="40%"><label><b>Address 3 :</b></label></td>                             
                             <td><?php echo $row["address3"]; ?></td> 
                             <td></td><td></td>
                                       
    </tr>
    <tr>
                             <td><label><b>City :</b></label></td>                             
                             <td><?php echo $row["city"]; ?></td> 
                            <td><label><b>Province :</b></label></td>                             
                             <td><?php echo $row["province"]; ?></td>                                
    </tr>
            
    <tr>
                             <td><label><b>Zipcode :</b></label></td>                             
                             <td><?php echo $row["zipcode"]; ?></td> 
                            <td><label><b>Country :</b></label></td>                             
                             <td><?php echo $row["country"]; ?></td>                                
    </tr>

    <tr>
                             <td><label><b>Date Hired :</b></label></td>                             
                             <td><?php echo $row["date_hire"]; ?></td> 
                            <td><label><b>Date Regular :</b></label></td>                             
                             <td><?php echo $row["date_regular"]; ?></td>                                
    </tr>


    <tr>
                             <td><label><b>Date Seperated :</b></label></td>                             
                             <td><?php echo $row["date_separated"]; ?></td> 
                            <td><label><b>Seperation Reason :</b></label></td>                             
                             <td><?php echo $row["separation_reason"]; ?></td>                                
    </tr>


    <?php 

            

    ?>
  </tbody>
</table>
</div>






        </p>
    </div>
    <div class="tab-pane fade" id="panel9" role="tabpanel">
        <br>
        <p>




 <?php
 

 ?>           

 <div class="col-md-12">



<table class="table table-striped table-bordered">
  <thead>

  </thead>
  <tbody>
 


                          
    <tr>
                             <td width="40%"><label><b>SSS No. :</b></label></td>                             
                             <td><?php echo $row["sssno"]; ?></td> 
             
    </tr>

                          
    <tr>
                             <td width="40%"><label><b>Tin No. :</b></label></td>                             
                             <td><?php echo $row["tinno"]; ?></td> 
                                    
    </tr>
    <tr>
                             <td width="40%"><label><b>HDMF No. :</b></label></td>                             
                             <td><?php echo $row["hdmfno"]; ?></td> 
          
                                       
    </tr>
    <tr>
                             <td><label><b>Phil No. :</b></label></td>                             
                             <td><?php echo $row["philno"]; ?></td> 
                                
    </tr>
            








    <?php 

            }

    ?>
  </tbody>
</table>
</div>








        </p>
    </div>
    <!--/.Panel 3-->
</div>