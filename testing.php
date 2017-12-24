         <?php    
                                $output = '';  
                                include("dbcon.php"); 
                                $query = "SELECT * FROM employeetb";  
                                $result = mysqli_query($dbcon, $query); 
?>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>


<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);
.sexytabs > ul {
  text-align: center;
  font-weight: 500;
  margin: 50px 0 0;
  padding: 0;
  position: relative;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  z-index: 1;
}
.sexytabs > ul > li {

  display: inline-block;
  background: #fafafa;
  padding: 0.6em 0;
  position: relative;

  width: 20%;
  margin: 0 0 0 -4px;
}
.sexytabs > ul > li:before, .sexytabs > ul > li:after {
  opacity: 0;

  transition: 0.3s ease;
}
.sexytabs > ul > li.ui-tabs-active:before, .sexytabs > ul > li.ui-tabs-active:after, .sexytabs > ul > li.ui-state-hover:before, .sexytabs > ul > li.ui-state-hover:after, .sexytabs > ul > li.ui-state-focus:before, .sexytabs > ul > li.ui-state-focus:after {
  opacity: 1;
}
.sexytabs > ul > li:before, .sexytabs > ul > li.ui-state-active.ui-state-hover:before, .sexytabs > ul > li.ui-state-active.ui-state-focus:before {
  content: "";
  position: absolute;
  z-index: -1;
  box-shadow: 0 2px 3px rgba(22, 195, 255, 0.5);
  top: 50%;
  bottom: 0px;
  left: 5px;
  right: 5px;
  border-radius: 100px / 10px;
}
.sexytabs > ul > li:after, .sexytabs > ul > li.ui-state-active.ui-state-hover:after, .sexytabs > ul > li.ui-state-active.ui-state-focus:after {
  content: "";
  background: #fafafa;
  position: absolute;
  width: 12px;
  height: 12px;
  left: 50%;
  bottom: -6px;
  margin-left: -6px;
  transform: rotate(45deg);
  box-shadow: inset 3px 3px 3px rgba(22, 195, 255, 0.5), inset 1px 1px 1px rgba(0, 0, 0, 0.3);
}
.sexytabs > ul > li.ui-state-hover:before, .sexytabs > ul > li.ui-state-focus:before {
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}
.sexytabs > ul > li.ui-state-hover:after, .sexytabs > ul > li.ui-state-focus:after {
  box-shadow: inset 3px 3px 3px rgba(0, 0, 0, 0.2), inset 1px 1px 1px rgba(0, 0, 0, 0.3);
}
.sexytabs > ul > li.ui-state-focus a {
  text-decoration: underline;
}
.sexytabs > ul > li:focus {
  outline: none;
}
.sexytabs > ul > li a {
  color: #444;
  text-decoration: none;
}
.sexytabs > ul > li a:focus {
  outline: none;
}
.sexytabs > ul > li a span {
  position: relative;
  top: -0.5em;
}

.sexytabs.dark > ul {
  border-bottom-color: rgba(255, 255, 255, 0.3);
}
.sexytabs.dark > ul > li {
  background: #333;
}
.sexytabs.dark > ul > li:before, .sexytabs.dark > ul > li.ui-state-active.ui-state-hover:before, .sexytabs.dark > ul > li.ui-state-active.ui-state-focus:before {
  box-shadow: 0 2px 3px rgba(255, 255, 255, 0.3);
}
.sexytabs.dark > ul > li:after, .sexytabs.dark > ul > li.ui-state-active.ui-state-hover:after, .sexytabs.dark > ul > li.ui-state-active.ui-state-focus:after {
  background: #333;
  box-shadow: inset 3px 3px 3px rgba(255, 255, 255, 0.3), inset 1px 1px 1px rgba(255, 255, 255, 0.5);
}
.sexytabs.dark > ul > li.ui-state-hover:before, .sexytabs.dark > ul > li.ui-state-focus:before {
  box-shadow: none;
}
.sexytabs.dark > ul > li.ui-state-hover:after, .sexytabs.dark > ul > li.ui-state-focus:after {
  box-shadow: inset 1px 1px 0px rgba(255, 255, 255, 0.4);
}
.sexytabs.dark > ul > li a {
  color: white;
}


body {

  background: #fafafa;
  font-family: 'Roboto';
  font-weight: 300;
}

h1 {
  text-align: center;
  font-size: 20px;
}

.sexytabs {
  width: 100%;
  min-width: 360px;
  margin: auto;
}

.contents {
  padding: 20px 50px;
  min-height: 200px;
}

.darkpage {
  background: #333;
  color: white;
}

.darkpage,
.lightpage {
  padding: 0px 0;
}

@media screen and (min-width: 1000px) {
  .darkpage,
  .lightpage {
    width: 100%;
    float: left;
    padding: 0;
  }
}


    </style>
  
</head>





<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="home.php">
            <strong>Halcyon</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
                     Profile</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="employee.php">View Profile</a>
   
                     
                    </div>
                </li>
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-book" aria-hidden="true"></i> Course</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="empcourse.php">View Course</a>
                        
                     
                    </div>
                </li>                




            </ul>
            <form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </div>
</nav>





















<body>



<main>



  <section>
    <div class="rad-body-wrapper">
      <div class="container-fluid">

          <!--Iframe Cover -->

          <!--Line-->
              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="panel panel-default">
                </div>
              </div> 

      <div class="row">
          <!--Employee Information-->
          
          <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="panel panel-default">
                    <!--title
                    <div class="panel-heading">
                      <h3 class="panel-title">Employee</h3>
                    </div>
                    -->

                    <div class="panel-body">
                         <p>
                       <?php
                                $output .= '  
                                <div class="table-responsive">  
                                     <table class="table table-bordered">';  
                                while($row = mysqli_fetch_array($result))  
                                {  
                                     $output .= '  

                                      <th colspan="2">
                                        <img src="picture/sample.jpg " style="width:230px;height:255px;">
                                      </th>
                                          <tr>  
                                               <td width="30%"  bgcolor="#f3f3f4"><label>Employee No</label></td>  
                                               <td width="70%" >'.$row["empno"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="30%" bgcolor="#f3f3f4"><label>Full name</label></td>  
                                               <td width="70%">'.$row["fullname"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="30%" bgcolor="#f3f3f4"><label>Tel no</label></td>  
                                               <td width="70%">'.$row["telno"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="30%" bgcolor="#f3f3f4"><label>Cellphone</label></td>  
                                               <td width="70%">'.$row["cellphone"].'</td>  
                                          </tr>  
                                          <tr>  
                                               <td width="30%" bgcolor="#f3f3f4"><label>Email</label></td>  
                                               <td width="70%">'.$row["email"].'</td>  
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

          </div>

          <!-- here-->
                  <div class="col-lg-8 col-md-6 col-xs-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                              <h3 class="panel-title">Employee Profile</h3>
                            </div>
                            <div class="panel-body">
                            <p
                                <div class="lightpage">
                                  <div class="sexytabs">
                                        <ul>
                                          <li><a href="#Personal">
                                            <span><i class="fa fa-user" aria-hidden="true"></i> Personal</span></a></li>
                                          <li><a href="#Guardians">
                                            <span><i class="fa fa-users" aria-hidden="true"></i> Guardians</span></a></li>
                                          <li><a href="#Address">
                                            <span><i class="fa fa-home" aria-hidden="true"></i> Address</span></a></li>
                                          <li><a href="#OtherInfo">
                                            <span><i class="fa fa-cogs" aria-hidden="true"></i> Other Info</span></a></li>
                                          <li><a href="#Documents">
                                            <span><i class="fa fa-book" aria-hidden="true"></i> Documents</span></a></li>
                                        </ul>
                                        <div class="contents">
                                              <div id="Personal">
                                                <p>                    
                                                <?php    
                                                           $output = '';  
                                                          $connect = mysqli_connect("localhost", "root", "kenneth", "tblemployee");  
                                                          $query = "SELECT * FROM employeetb WHERE fullname = 'kenneth'";  
                                                          $result = mysqli_query($connect, $query); 
                                                    $output .= '  
                                                    <div class="table-responsive">  
                                                         <table class="table table-bordered">';  
                                                    while($row = mysqli_fetch_array($result))  
                                                    {  
                                                         $output .= '  
                                                              <tr >  
                                                                   <td width="20%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="40%" >'.$row["lname"].'</td>  
                                                                 <td width="20%" bgcolor="#f3f3f4"><label> First Name</label></td>  
                                                                   <td width="35%" >'.$row["fname"].'</td>
                                                              </tr>  
                                                               <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Middle Name</label></td>  
                                                                   <td width="35%" >'.$row["mname"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Nick Name</label></td>  
                                                                   <td width="35%" >'.$row["nickname"].'</td>
                                                              </tr>  
                                                               <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Gender</label></td>  
                                                                   <td colspan = "3" >'.$row["gender"].'</td>
                                                                 
                                                              </tr> 
                                                                <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Civil Status</label></td>  
                                                                   <td colspan = "3">'.$row["civilStatus"].'</td> 
                                                                  
                                                              </tr>    
                                                              <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Birth Date</label></td>  
                                                                   <td width="35%" >'.$row["birthDate"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Birthday Place</label></td>  
                                                                   <td width="35%" >'.$row["birthPlace"].'</td>
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
                                                </p>
                                              </div>
                                                
                                              <div id="Guardians">
                                                <p>
                                                  
                                                   <?php    
                                                  $output = '';  
                                                  $connect = mysqli_connect("localhost", "root", "kenneth", "tblemployee");  
                                                  $query = "SELECT * FROM employeetb WHERE fullname = 'kenneth'";  
                                                  $result = mysqli_query($connect, $query); 
                                                    $output .= '  
                                                    <div class="table-responsive">  
                                                         <table class="table table-bordered">';  
                                                    while($row = mysqli_fetch_array($result))  
                                                    {  
                                                         $output .= '  
                                                      <th colspan="6">Mother</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="35%" >'.$row["m_lname"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td width="35%" >'.$row["m_fname"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td width="35%" >'.$row["m_mname"].'</td> 
                                                          </tr>  
                                                      <th colspan="6">Father</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="35%" >'.$row["f_lname"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td width="35%" >'.$row["f_fname"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td width="35%" >'.$row["f_mname"].'</td> 
                                                          </tr> 
                                                      <th colspan="6">Spouse</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Last Name</label></td>  
                                                                   <td width="35%" >'.$row["spouse_lname"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>First</label></td>  
                                                                   <td width="35%" >'.$row["spouse_fname"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Middle</label></td>  
                                                                   <td width="35%" >'.$row["spouse_mname"].'</td> 
                                                          </tr> 
                                                      <th colspan="6">Emergency</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Person</label></td>  
                                                                   <td width="35%" >'.$row["emerg_person"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Relation</label></td>  
                                                                   <td width="35%" >'.$row["emerg_relation"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Contact</label></td>  
                                                                   <td width="35%" >'.$row["emerg_contact"].'</td> 
                                                          </tr>
                                                      <th colspan="6">Emergency Address</th>
                                                          <tr>  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Address 1</label></td>  
                                                                   <td width="35%" >'.$row["emerg_address1"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Address 2</label></td>  
                                                                   <td width="35%" >'.$row["emerg_address1"].'</td>
                                                                    <td width="15%" bgcolor="#f3f3f4"><label>Address 3</label></td>  
                                                                   <td width="35%" >'.$row["emerg_address1"].'</td> 
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
                                                
                                              <div id="Address">
                                                
                                                <p> <?php    
                                               $output = '';  
                              
                                $query = "SELECT * FROM employeetb WHERE empId = '1'";  
                                $result = mysqli_query($dbcon, $query); 
                                                $output .= '  
                                                <div class="table-responsive">  
                                                     <table class="table table-bordered">';  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                     $output .= '  
                                                                  <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Address 1</label></td>  
                                                               <td colspan= "3" >'.$row["address1"].'</td>  
                                                          </tr>  
                                                              <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Address 2</label></td>  
                                                               <td colspan= "3" >'.$row["address2"].'</td>  
                                                          </tr>  
                                                             <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Address 3</label></td>  
                                                               <td colspan= "3" >'.$row["address3"].'</td>  
                                                          </tr> 
                                                            <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>City</label></td>  
                                                                   <td width="35%" >'.$row["city"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Province</label></td>  
                                                                   <td width="35%" >'.$row["province"].'</td>
                                                          </tr>
                                                             <tr >  
                                                                   <td width="15%" bgcolor="#f3f3f4"><label>Zipcode</label></td>  
                                                                   <td width="35%" >'.$row["zipcode"].'</td>  
                                                                 <td width="15%" bgcolor="#f3f3f4"><label>Country</label></td>  
                                                                   <td width="35%" >'.$row["country"].'</td>
                                                          </tr>   
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
                                           </p>
                                              </div>

                                              <div id="OtherInfo">
                                           
                                                <p> <?php    
                                              $output = '';  
                                $connect = mysqli_connect("localhost", "root", "kenneth", "tblemployee");  
                                $query = "SELECT * FROM employeetb WHERE fullname = 'kenneth'";  
                                $result = mysqli_query($connect, $query); 
                                                $output .= '  
                                                <div class="table-responsive">  
                                                     <table class="table table-bordered">';  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                     $output .= '  
                                                            <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>SSS No</label></td>  
                                                               <td colspan= "3" >'.$row["sssno"].'</td>  
                                                          </tr>  
                                                              <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Tin No</label></td>  
                                                               <td colspan= "3" >'.$row["tinno"].'</td>  
                                                          </tr>  
                                                             <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Hdmnf No</label></td>  
                                                               <td colspan= "3" >'.$row["hdmfno"].'</td>  
                                                          </tr>  
                                                              <tr>  
                                                               <td width="20%"  bgcolor="#f3f3f4"><label>Phil No</label></td>  
                                                               <td colspan= "3" >'.$row["philno"].'</td>  
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

                                              <div id="Documents">
                                                
                                                <p> <?php    
                                             $output = '';  
                          
                                $query = "SELECT * FROM employeetb WHERE empId = '1'";  
                                $result = mysqli_query($connect, $query);   
                                                $output .= '  
                                                <div class="table-responsive">  
                                                     <table class="table table-bordered">';  
                                                while($row = mysqli_fetch_array($result))  
                                                {  
                                                     $output .= '  
                                                   
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
                                          </div>
                                        </div>
                                    </p>
                            </div>
                        </div>
                  </div>
    </div>
  </section>
</main>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src="js/index.js"></script>



    <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>




</body>

