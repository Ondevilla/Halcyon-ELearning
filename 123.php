<!DOCTYPE html>
<html lang="en">
<html>
<?php

include("dbcon.php");
include("connect.php");
include("dbconnect.php");



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




?>



<?php

if(isset($_POST["updatecor"]))


{



    $courseid = $_SESSION["courseid"];



$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From fcourse WHERE id = '".$courseid."'"));

    date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("H:i:s");




  $coursename = $_POST["cortext"];


if(isset($coursename))
{  
          $table2 = "UPDATE fcourse SET coursename ='$coursename' WHERE id='$courseid'";
                        

            $run_query2d = mysqli_query($dbcon,$table2); 


        $table2b = "UPDATE courseposition SET coursename ='$coursename' WHERE courseid='$courseid'";            

            $run_query2d = mysqli_query($dbcon,$table2b); 



            $table2c = "UPDATE coursemodule SET coursename ='$coursename' WHERE courseid='$courseid'";
            $run_query2d = mysqli_query($dbcon,$table2c);    

}


    $cdetails = $_POST["cdetails"];

if(isset($cdetails))
{
            $table2a = "UPDATE fcourse SET cdetails ='$cdetails' WHERE id='$courseid'";            
            $run_query2d = mysqli_query($dbcon,$table2a); 
}





$remarks2=$roww1['coursename']." changed to ".$coursename;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());





    $test = "1";

                $table2q = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2aq = mysqli_query($dbcon,$table2q);



            $table2qa = "select * from counter";
            $run_query2bq = mysqli_query($dbcon,$table2qa);

            while($row = mysqli_fetch_array($run_query2bq))

{  

                $vidId  = $row["countId"];


}              


if ($_FILES['image']['size'] == 0)
{
 $image = "";
}

else

{
if($_FILES['image']['name'] = "image/jpeg")
{


    $filetype1 = ".jpeg";

}
elseif($_FILES['image']['name'] = "image/jpg")
{

    $filetype1 = ".jpg";
}
elseif($_FILES['image']['name'] = "image/png")
{

    $filetype1 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
}



$_FILES['image']['name'] = $vidId.$filetype1;
        $filename1 = $_FILES['image']['name'];

        $tmp_name1 = $_FILES['image']['tmp_name'];
        
        $local_image = 'img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imageto = "img/".$_FILES['image']['name'];




            $table21 = "UPDATE fcourse SET image ='$imageto' WHERE id='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$table21); 

            $tablea = "UPDATE courseposition SET image ='$imageto' WHERE courseid='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$tablea); 

}







            $table2qa = "delete from counter";
            $run_query2bq = mysqli_query($dbcon,$table2qa);



if ($_FILES['imagebg']['size'] == 0)
{
 $image = "";
}

else

{
if($_FILES['imagebg']['name'] = "image/jpeg")
{


    $filetype1 = ".jpeg";

}
elseif($_FILES['imagebg']['name'] = "image/jpg")
{

    $filetype1 = ".jpg";
}
elseif($_FILES['imagebg']['name'] = "image/png")
{

    $filetype1 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
}




                $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}             

$_FILES['imagebg']['name'] = $vidId.$filetype1;
        $filename1 = $_FILES['imagebg']['name'];

        $tmp_name1 = $_FILES['imagebg']['tmp_name'];
        
        $local_image = 'img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imagetobg = "img/".$_FILES['imagebg']['name'];




            $table21 = "UPDATE fcourse SET imagebg ='$imagetobg' WHERE id='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$table21); 

            $tablea = "UPDATE courseposition SET imagebg ='$imagetobg' WHERE courseid='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$tablea); 

}





            $table2d = "delete from counter";
            $run_query2d = mysqli_query($dbcon,$table2d);




if(isset($_POST["color"]))

{
    $color = $_POST["color"];


             $table21 = "UPDATE fcourse SET imagetheme ='$color' WHERE id='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$table21); 

            $tablea = "UPDATE courseposition SET imagetheme ='$color' WHERE courseid='$courseid'";
                        

            $run_query2d1 = mysqli_query($dbcon,$tablea);    
}














            $table2qa = "delete from counter";
            $run_query2bq = mysqli_query($dbcon,$table2qa);





        
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();


}



?>



<?php



if(isset($_POST["create"]))

{

    $ctitle = $_POST["ctitle1"];











    $cdetails = $_POST["cdetails1"];


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("H:i:s");







$remarks2="Created Course ".$ctitle;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());


  $test = "1";

                $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}              


if ($_FILES['image']['size'] == 0)
{
 $image = "";
}

else

{
if($_FILES['image']['name'] = "image/jpeg")
{


    $filetype1 = ".jpeg";

}
elseif($_FILES['image']['name'] = "image/jpg")
{

    $filetype1 = ".jpg";
}
elseif($_FILES['image']['name'] = "image/png")
{

    $filetype1 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
}



$_FILES['image']['name'] = $vidId.$filetype1;
        $filename1 = $_FILES['image']['name'];

        $tmp_name1 = $_FILES['image']['tmp_name'];
        
        $local_image = 'img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imageto = "img/".$_FILES['image']['name'];




}


            $table2d = "delete from counter";
            $run_query2d = mysqli_query($dbcon,$table2d);


















                $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}              


if ($_FILES['imagebg']['size'] == 0)
{
 $image = "";
}

else

{
if($_FILES['imagebg']['name'] = "image/jpeg")
{


    $filetype1 = ".jpeg";

}
elseif($_FILES['imagebg']['name'] = "image/jpg")
{

    $filetype1 = ".jpg";
}
elseif($_FILES['imagebg']['name'] = "image/png")
{

    $filetype1 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
}



$_FILES['imagebg']['name'] = $vidId.$filetype1;
        $filename1 = $_FILES['imagebg']['name'];

        $tmp_name1 = $_FILES['imagebg']['tmp_name'];
        
        $local_image = 'img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imagebg = "img/".$_FILES['imagebg']['name'];




}


            $table2d = "delete from counter";
            $run_query2d = mysqli_query($dbcon,$table2d);




            $color = $_POST["color"];
















































            $table2c = "INSERT INTO fcourse (coursename,cdetails,isActive,image,imagebg,imagetheme) VALUES ('$ctitle','$cdetails','1','$imageto','$imagebg','$color')";
            $run_query2d = mysqli_query($dbcon,$table2c);    




        
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();    








}


?>




<?php


if(isset($_POST["Tag"]))

{

    if(!isset($_SESSION["positionname_tag"]))

{

                echo"<script>window.open('aecourse.php','_self')</script>";
                exit();

}












    $jobid = $_SESSION["positionname_tag"];
    $courseid = $_POST["getpos"];

            $table2 = "select * from positions WHERE positionId='$jobid'";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{ 

            $jobname = $row["position"];

}

            $table2a = "select * from fcourse WHERE id ='$courseid'";
            $run_query2ba = mysqli_query($dbcon,$table2a);

            while($row = mysqli_fetch_array($run_query2ba))

{ 

            $coursename = $row["coursename"];
            $imageto = $row["image"];
            $imagebg = $row["imagebg"];
            $color = $row["imagetheme"];

}

            $table2 = "select * from courseposition WHERE jobid='$jobid' AND coursename = '$coursename'";
            $run_query2b = mysqli_query($dbcon,$table2);
            
        if(mysqli_num_rows($run_query2b) > 0)
        {


                echo "<script>alert('This Course is already Tagged!')</script>";
                echo"<script>window.open('aecourse.php','_self')</script>";
                exit();

        }
            else

            {


            date_default_timezone_set('Asia/manila');
            $D=date("Y-m-d");
                                
            date_default_timezone_set('Asia/manila');
            $T=date("H:i:s");







            $remarks2=$coursename." Tagged to ".$jobname;







            $sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
            $login = mysqli_query($connlog, $sqllog) or die (mysqli_error());



                        $table2 = "INSERT INTO courseposition (positionname,coursename,courseid,jobid,image,imagebg,imagetheme) VALUES ('$jobname','$coursename','$courseid','$jobid','$imageto','$imagebg','$color')";
                        $run_query2b = mysqli_query($dbcon,$table2);

                    
                    echo"<script>window.open('aecourse.php','_self')</script>";
                    exit();

            }



}










?>

<?php

if(isset($_POST["disable"]))

{
            $courseid = $_SESSION["disable"];



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("H:i:s");







$remarks2="Course ". $_SESSION["coursename"]." disabled";







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());









            $table2 = "DELETE FROM courseposition WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);






            $table2a = "UPDATE fcourse SET isActive = '0' WHERE id = '$courseid'";
            $run_query2c = mysqli_query($dbcon,$table2a);          


            $table2b = "DELETE FROM coursemodule WHERE courseid = '$courseid'";
            $run_query2d = mysqli_query($dbcon,$table2b);



        
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
}


?>






<head>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Admin</title>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="sm/dist/sweetalert.css">
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
    <link href="css/style1.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="sm/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/yes.css">

<style>
   


.selectholder {
  clear: both;
    width: 100%;
    background: #eee;
    margin-bottom: 1em;
    font-size: 1.3em;

    color: #666;
    -o-transition: .1s ease-out;
    -ms-transition: .1s ease-out;
    -moz-transition: .1s ease-out;
    -webkit-transition: .1s ease-out;
    transition: .1s ease-out;
    cursor: pointer;
}

.selectholder .desc {
    display: inline-block;
    vertical-align: middle;
    padding-left: .8em;
    line-height: 2.4em;
}

.selectholder .pulldown {
    float: right;
   
    width: 2.4em;
    height: 2.4em;
    background-color: #ddd;
    background-image: url('images/pulldown.png');
    background-size: cover;
    -o-transition: .1s ease-out;
    -ms-transition: .1s ease-out;
    -moz-transition: .1s ease-out;
    -webkit-transition: .1s ease-out;
    transition: .1s ease-out;
}

.selectholder:hover,
.activeselectholder {
    background-color: #ddd;
}

.selectholder:hover .pulldown,
.activeselectholder .pulldown {
    background-color: #333;
    background-image: url('images/pulldown_hover.png');
}

.selectholder .selectdropdown {
    position: relative;
    top: 0;
    left: 0;
    background: #333;
    color: #fff;
    display: none;
    clear: both;
       height: 300px;
    overflow: scroll;
}

.selectholder .selectdropdown span {
    display: block;
    border-bottom: solid 1px #555;
    padding-left: .8em;
    line-height: 2.4em;
    width: 100%;

    

    -o-transition: background-color .1s ease-out;
    -ms-transition: background-color .1s ease-out;
    -moz-transition: background-color .1s ease-out;
    -webkit-transition: background-color .1s ease-out;
    transition: background-color .1s ease-out;
}

.selectholder .selectdropdown span:last-child {
    border-bottom: none;
}

.selectholder .selectdropdown span.active {
    background-color: #2A817C;
    background-image: url('img/radio_tick.png');
    background-repeat: no-repeat;
    background-size: 1.6em 1.6em;
    background-position: 98% 50%;
}

.selectholder .selectdropdown span:hover {
    background-color: #555;
}


</style>

<script type="text/javascript">


$(document).ready(function(){



    // set up select boxes
    $('.selectholder').each(function(){
        $(this).children().hide();
        var description = $(this).children('label').text();
        $(this).append('<span class="desc">'+description+'</span>');
        $(this).append('<span class="pulldown"></span>');
        // set up dropdown element
        $(this).append('<div class="selectdropdown"></div>');
      $(this).children('select').children('option').each(function(){
            if($(this).attr('value') != '0') {
                $drop = $(this).parent().siblings('.selectdropdown');
               name = $(this).val();
  

       $drop.append('<span>'+name+'</span>');
      






            }
        });
        // on click, show dropdown




  



        $(this).click(function(){
            if($(this).hasClass('activeselectholder')) {
                // roll up roll up
                $(this).children('.selectdropdown').slideUp(200);
                $(this).removeClass('activeselectholder');
                // change span back to selected option text
                if($(this).children('select').val() != '0') {

                    $(this).children('.desc').fadeOut(100, function(){
                        $(this).text($(this).siblings("select").val());
                        $(this).fadeIn(100);
                    });

                    valueness=$(this).children('select').val(); 
                    //alert(valueness);

   swal({
            title: "Loading . . .",
            text: "Please Wait!",
            imageUrl: "images/loading.gif",
            html: true,
    
              timer: 3000,
            showConfirmButton: false
            },
                                        function(){setTimeout(function(){
                                        swal({
                                        title: "Okay",
                                     
                                        type:"success",
                                        html: true,
                                
                                          timer: 100,
                                        showConfirmButton: false
                                        });
                                  });
        });
 
    
                               $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'positionname='+valueness,
    success: function(data){
        $("#state-list").html(data);
    }
    });


                }
            }
            else {
                // if there are any other open dropdowns, close 'em
                $('.activeselectholder').each(function(){
                    $(this).children('.selectdropdown').slideUp(200);
                    // change span back to selected option text
                    if($(this).children('select').val() != '0') {
                           
                        $(this).children('.desc').fadeOut(100, function(){
                            $(this).text($(this).siblings("select").val());
                            $(this).fadeIn(100);
                        });
                    }


                    $(this).removeClass('activeselectholder');
                });         
                // roll down
                $(this).children('.selectdropdown').slideDown(200);
                $(this).addClass('activeselectholder');
                // change span to show select box title while open
                if($(this).children('select').val()= '0') {
                    $(this).children('.desc').fadeOut(100, function(){
                        $(this).text($(this).siblings("select").children("option[alt=0]").text());
                        $(this).fadeIn(100);
                    });
                }
            }
        });
    });
    // select dropdown click action
    $('.selectholder .selectdropdown span').click(function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var value = $(this).text();
        $(this).parent().siblings('select').val(value);
        $(this).parent().siblings('.desc').fadeOut(100, function(){
            $(this).text(value);
            $(this).fadeIn(100);
        });
    });
    
    // preload hover images


});
</script>
</head>

<header>
  
<div class="container">

<div class="col-md-12 flex-center">
<a href="admin.php">
<img src="img/halogo.png" class="img-fluid" >
</a>
</div>
</div>
</header>


  <!--Navbar-->
<nav>
    <div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="logg.php" data-content="Manage Courses & Modules"><i class="fa fa-book"></i><br>Audit Logs</a></li>
      <li><a href="admin1.php" data-content="Manage Courses & Modules"><i class="fa fa-cogs"></i><br>Maintenance</a></li>
      <li><a href="employeetb.php" data-content="View Employees"><i class="fa fa-users"></i><br>Employee Management</a></li>
      <li><a href="#" data-content="I got game"></a></li>

      <li><a href="logout.php" data-content="Logout Now"><i class="fa fa-sign-out"></i><br>Logout</a></li>
    </ul>
  </nav>
</div>

<section class="home">
  <div class="open-overlay">
    <span class="bar-top"></span>
    <span class="bar-middle"></span>
    <span class="bar-bottom"></span>
  </div>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

    <script src="js/indexsu.js"></script>
</nav>




<body>


<script>

function getState(val) {



   $.ajax({
    type: "POST",
    url: "get_state.php",
    data:'positionname='+val,
    success: function(data){
        $("#state-list").html(data);
    }
   
            
    });
}



</script>
<body>


<div class="container">
<br><br><br><br>
<div class="col-md-12">

 

 
   <h2><b><center>Select a Job Position</center></b></h2>

        
 
<div class="row">

   <div class="selectholder" style="width:100%;">
    <label>Job Positions ...</label>
    <select name="country" id="country-list" class="form-control selectpicker">



       <?php
       if(!isset($_SESSION["positionname_tag"]))
       {
             echo '<option alt="0" value="0">Job Positions ...</option>';
       }
       else
       {
         echo '<option alt="0" value="0"> "'.$_SESSION["positionname_tag"].'"</option>';

       }
  
   



            $table2 = "select * from positions order by position ASC";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
  
        <?php

        echo "<option value='$row[position]' ></option>";
        }
        ?>

    </select>
  </div>
        <div class="col-md-6">
         <button type="button" class="btn btn-info" id="dodge" data-toggle="modal" style="width:100%;" data-target="#modal-create" >Create New Course</button>
         </div>
           <div class="col-md-6">
         <button type="button" class="btn btn-info tag_course" style="width:100%;">Tag a Course</button>
         </div>
        </div>
</div>

                        <div id="state-list" >


                                <!-- TABLE GOES IN -->
                        

                        </div>

                        </center>







</div>
</div>
</body>


<div id="dataModal" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Course Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 



<form action="aecourse.php" method="post" enctype="multipart/form-data"> 
 <div id="dataModal1" class="modal fade">  
      <div class="modal-dialog modal-lg" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Update Course</h4>  
                </div>  
                <div class="modal-body" id="employee_detail1">  
                </div>  
                <div class="modal-footer">  
                     <button type="submit" class="btn btn-default" name="updatecor" >Update</button>  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                     
                </div>  
           </div>  
      </div>  
 </div> 
</form>


<form action="aecourse.php" method="post"> 
 <div id="dataModal2" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details2</h4>  
                </div>  
                <div class="modal-body" id="employee_detail2">  
                </div>  
                <div class="modal-footer">  
                     <button type="submit" class="btn btn-danger" name="disable">Disable</button>  
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
</form>






<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create a Course</h4>
            </div>
            <!--Body-->



            <div class="modal-body">
<form role="form" method="post" action="aecourse.php" enctype="multipart/form-data">
                   <fieldset>
           
            <div class="col-md-12">




<h4>Course Title : </h4>
<input type="text" placeholder="Enter Course Title Here ..." name="ctitle1"></input>
<br>
<br>
<h4>Description</h4>
<textarea rows="7" cols="50" name="cdetails1" required></textarea>
<h4>Add Image</h4>
<h5><input type="file" name="image" accept="image/*" required ></input>
<h4>Add Image Background</h4>
<h5><input type="file" name="imagebg" accept="image/*" required ></input><br>
<br>
<h4>Color :</h4>
<br>

<!----> 

 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .extra {

  font-family: 'Proxima Nova', sans-serif;
  color: #8B949A;
  letter-spacing: .05em;
  transition: background .5s ease;
}

.extra .color-picker-panel {

 align-self: center;
  width: 100%;
  border-radius: 8px;
  border: 2px solid #364347;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);

 

}

.extra .panel-row {
  position: relative;
  margin: 0 10px 10px;
}
.extra .panel-row:first-child {
  margin-top: 10px;
  margin-bottom: 6px;
}
.extra .panel-row:after {
  content: "";
  display: table;
  clear: both;
}

.extra  .panel-header {
  background: #15191C;
  padding: 8px;
  margin: 0 -10px 10px;
  text-align: center;
}

.extra .swatch {
  display: inline-block;
  width: 32px;
  height: 32px;
  background: #ccc;
  border-radius: 4px;
  margin-left: 4px;
  margin-bottom: 4px;
  box-sizing: border-box;
  border: 2px solid #364347;
  cursor: pointer;
}

.extra .default-swatches {
  width: 212px;
}
.extra .default-swatches .swatch:nth-child(6n + 1) {
  margin-left: 0;
}

.extra .color-cursor {
  border-radius: 100%;
  background: #ccc;
  box-sizing: border-box;
  position: absolute;
  pointer-events: none;
  z-index: 2;
  border: 2px solid #fff;
  transition: all .2s ease;
}
.extra .color-cursor.dragging {
  transition: none;
}
.extra .color-cursor#spectrum-cursor {
  width: 30px;
  height: 30px;
  margin-left: -15px;
  margin-top: -15px;
  top: 0;
  left: 0;
}
.extra .color-cursor#hue-cursor {
  top: 0;
  left: 50%;
  height: 20px;
  width: 20px;
  margin-top: -10px;
  margin-left: -10px;
  pointer-events: none;
}

.extra .spectrum-map {
  position: relative;
  width: 212px;
  height: 200px;
  overflow: hidden;

}

.extra #spectrum-canvas {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ccc;
    border:  3px solid;
  border-radius:10px;
}

.extra .hue-map {
  position: absolute;
  top: 5px;
  bottom: 5px;
  right: 29px;
  width: 10px;
}

.extra #hue-canvas {
  border-radius: 8px;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #ccc;
}

.extra .button {
  background: #2A3137;
  border: 0;
  border-radius: 4px;
  color: #8B949A;
  font-size: 1rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  outline: none;
  cursor: pointer;
  padding: 4px;
}
.extra .button:active {
  background: #262c31;
}
.extra .button.eyedropper {
  position: absolute;
  right: 0;
  top: 0;
  width: 68px;
  height: 68px;
  display: block;
}
.extra .button.add-swatch {
  display: block;
  padding: 6px;
  width: 200px;
  margin: 10px auto 0;
}
.extra .button.refresh {
  display: block;
  padding: 6px;
  width: 200px;
  margin: 10px auto 0;
}
.extra .button.mode-toggle {
  position: absolute;
  top: 10px;
  right: 0;
  width: 68px;
  height: 40px;
}

.extra .value-fields {
  display: none;
  align-items: center;
}
.extra .value-fields.active {
  display: inline-flex;
}
.extra .value-fields .field-label {
  margin-right: 6px;
}
.extra .value-fields .field-input {
  background: #15191C;
  border: 1px solid #364347;
  box-sizing: border-box;
  border-radius: 2px;
  line-height: 38px;
  padding: 0 4px;
  text-align: center;
  color: #8B949A;
  font-size: 1rem;
  display: block;
}

.extra .rgb-fields .field-group {
  display: inline-flex;
  align-items: center;
}
.extra  .rgb-fields .field-input {
  width: 42px;
  margin-right: 10px;
}

.extra .hex-field .field-input {
  width: 170px;
}

.extra .color-indicator {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  width: 20px;
  height: 20px;
  border-radius: 4px;
  background: #ccc;
}

.extra input::-webkit-outer-spin-button,
.extra input::-webkit-inner-spin-button {
  /* display: none; <- Crashes Chrome on hover */
  -webkit-appearance: none;
  margin: 0;
  /* <-- Apparently some margin are still there even though it's hidden */
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>



<div   onmousemove="refreshElementRects()" id="color-indicator" class="extra" style="background-color:black;border-radius:10px; ">
<center>
  <div class="color-picker-panel">
  <div class="panel-row">
    <div class="swatches default-swatches"></div>
   
  </div>
  <div class="panel-row">
    <div class="spectrum-map" >
      <input type="button" id="spectrum-cursor" class="color-cursor">
      <canvas id="spectrum-canvas"></canvas>
    </div>
    <div class="hue-map">
      <input type="button" id="hue-cursor" class="color-cursor">
      <canvas id="hue-canvas"></canvas>
    </div>

  </div>
<div class="panel-row">   <input type="button" id="mode-toggle" class="button mode-toggle" Value="Mode">
</div>
  <div class="panel-row" style="background:#15191C; width:300px;border-radius:3px; padding:5px;">

  <center>
    <div id="rgb-fields" class="field-group value-fields rgb-fields active">
      <div class="field-group">
        <label for="" class="field-label">R:</label>
        <input type="number" max="255" maxlength="3" min="0" id="red" class="field-input rgb-input"/>
      </div>
      <div class="field-group">
        <label for="" class="field-label">G:</label>
        <input type="number" max="255" maxlength="3" min="0" id="green" class="field-input rgb-input"/>
      </div>
      <div class="field-group">
        <label for="" class="field-label">B:</label>
        <input type="number" max="255" maxlength="3"  min="0" id="blue" class="field-input rgb-input"/>
      </div>
    </div>
    </center>
    <div id="hex-field" class="field-group value-fields hex-field" > 
      <label for="" class="field-label">Hex:</label>
      <input type="text" id="hex" class="field-input"/>
    </div>
   
  </div>
  <div class="panel-row">
   
    <div id="user-swatches" class="swatches custom-swatches">
    </div>
    <button disabled  style="cursor:default ; opacity:0;" id="add-swatch" class="button add-swatch">
     
    </button>

        <button disabled  id="refresh" style=" cursor:default;opacity:0;" class="button refresh">

    </button>    
        <input type="button" onclick="alertcolor()">
          



<?php ///////////////////////////////////////////// ?>


<script>
    function createcourse(){ 
  

    v30=tinycolor('rgb ' + red.value + ' ' + green.value + ' ' + blue.value );
destination="createcourse.php?v30="+v30;
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
      window.location.assign="123.php";
      }
     }
};




</script>

  </div>
</div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.3.0/tinycolor.min.js'></script>

    <script src="colorpicker/js/indexcom.js"></script>
</center>
</div>

<!----> 

            </div>
           



            </div>

            </fieldset>
         
            <!--Footer-->
            <div class="modal-footer">
             <button type="submit" class="btn btn-default colorb" name="create">Create</button>

                <button type="button" class="btn btn-default  colorb" data-dismiss="modal">Close</button>
            </div>
        </div>   </form>
        <!--/.Content-->
    </div>
</div>





<form method="post" action="aecourse.php"> 
<div class="modal fade" id="modal-tagcourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tag a Course</h4>
            </div>
            <!--Body-->



            <div class="modal-body" id="tag_course">




         
</div>            <!--Footer-->
            <div class="modal-footer">
             <button type="submit" class="btn btn-default colorb" name="Tag">Tag</button>
                <button type="button" class="btn btn-default  colorb" data-dismiss="modal">Close</button>
            </div>
        </div>   </form>
        <!--/.Content-->
    </div>
</div>

<script>
    





$(document).on('click', '.tag_course', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax(
                {  
                     url:"tagcourse.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#tag_course').html(data);  
                          $('#modal-tagcourse').modal('show');  
                     }  
                });  
           }            
      });   



</script>

    <!-- SCRIPTS -->
    <!-- JQuery -->


    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</html>