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



if(isset($_POST["disablecor"]))


{


    $corid = $_POST["getcor"];














            $table2a = "UPDATE fcourse SET isActive = '0' WHERE id = '$corid'";
            $run_query2c = mysqli_query($dbcon,$table2a);    



            $table2 = "DELETE FROM courseposition WHERE courseid = '$corid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            $table22 = "DELETE FROM courseposition_all WHERE courseid = '$corid'";
            $run_query2b2 = mysqli_query($dbcon,$table22);


            $table222 = "DELETE FROM courseposition_dept WHERE courseid = '$corid'";
            $run_query2b22 = mysqli_query($dbcon,$table222);     


            $table2b = "DELETE FROM coursemodule WHERE courseid = '$corid'";
            $run_query2d = mysqli_query($dbcon,$table2b);



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
$T=date("g:i:s A");




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
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imageto = "attachment/img/".$_FILES['image']['name'];




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
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imagetobg = "attachment/img/".$_FILES['imagebg']['name'];




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


if(isset($_POST["Tag"]))

{

    if(!isset($_SESSION["poscheck1"]))

{

                echo"<script>window.open('aecourse.php','_self')</script>";
                exit();

}












    $jobid = $_SESSION["poscheck1"];
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
            $T=date("g:i:s A");







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
$T=date("g:i:s A");







$remarks2="Course ". $_SESSION["disable"]." disabled";







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());






                 $position =  $_SESSION['poscheck'];


            $table2 = "DELETE FROM courseposition WHERE courseid = '$courseid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            $table22 = "DELETE FROM courseposition_all WHERE courseid = '$courseid' AND positionname LIKE '%$position%'";
            $run_query2b2 = mysqli_query($dbcon,$table22);


            $table222 = "DELETE FROM courseposition_dept WHERE courseid = '$courseid' AND positionname LIKE '%$position%'";
            $run_query2b22 = mysqli_query($dbcon,$table222);     


            $table2b = "DELETE FROM coursemodule WHERE courseid = '$courseid'";
            $run_query2d = mysqli_query($dbcon,$table2b);



        
   
                    echo"<script>window.open('aecourse.php','_self')</script>";
                    exit();
}


?>












<?php


if(isset($_POST["tagall"]))




{



    $getall = $_POST["tag_all"];
















            $table2ac = "select * from courseposition_all WHERE courseid = '$getall'";
            $run_query2bac = mysqli_query($dbcon,$table2ac);

        if(mysqli_num_rows($run_query2bac) > 0)
        {

        echo "<script>alert('This course is already tagged!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
        }









            $table2a = "select * from fcourse WHERE id ='$getall'";
            $run_query2ba = mysqli_query($dbcon,$table2a);

            while($row = mysqli_fetch_array($run_query2ba))

{ 

            $coursename = $row["coursename"];
            $imageto = $row["image"];
            $imagebg = $row["imagebg"];
            $color = $row["imagetheme"];
            $courseid = $row["id"];
}







            $table2123 = "select * from positions";
            $run_query2b123 = mysqli_query($c11,$table2123);

            while($row = mysqli_fetch_array($run_query2b123))

{ 

            $jobname = $row["position"];
            $jobid = $row["positionId"]; 


             $table2 = "INSERT INTO courseposition_all (positionname,coursename,courseid,jobid,image,imagebg,imagetheme) VALUES ('$jobname','$coursename','$courseid','$jobid','$imageto','$imagebg','$color')";
             $run_query2b = mysqli_query($dbcon,$table2);



}



    echo"<script>window.open('aecourse.php','_self')</script>";
        exit();

















}



?>






<?php


if(isset($_POST["tagdept"]))




{



    $getall = $_POST["tag_all"];
    $getdept = $_POST["tag_dept"];















            $table2ac = "select * from courseposition_dept WHERE courseid = '$getall'";
            $run_query2bac = mysqli_query($dbcon,$table2ac);

        if(mysqli_num_rows($run_query2bac) > 0)
        {

        echo "<script>alert('This course is already tagged!')</script>";
        echo"<script>window.open('aecourse.php','_self')</script>";
        exit();
        }









            $table2a = "select * from fcourse WHERE id ='$getall'";
            $run_query2ba = mysqli_query($dbcon,$table2a);

            while($row = mysqli_fetch_array($run_query2ba))

{ 

            $coursename = $row["coursename"];
            $imageto = $row["image"];
            $imagebg = $row["imagebg"];
            $color = $row["imagetheme"];
            $courseid = $row["id"];
}






     




            $table2123 = "select * from positions WHERE depId = '$getdept'";
            $run_query2b123 = mysqli_query($c11,$table2123);

            while($row = mysqli_fetch_array($run_query2b123))

{ 

            $jobname = $row["position"];
            $jobid = $row["positionId"]; 


             $table2 = "INSERT INTO courseposition_dept (positionname,coursename,courseid,jobid,image,imagebg,imagetheme) VALUES ('$jobname','$coursename','$courseid','$jobid','$imageto','$imagebg','$color')";
             $run_query2b = mysqli_query($dbcon,$table2);



}



      echo"<script>window.open('aecourse.php','_self')</script>";
        exit();

















}



?>


<head>
<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Course</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Course</title>

 <?php } ?>

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






<style>
   


.deptholder {
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

.deptholder .desc {
    display: inline-block;
    vertical-align: middle;
    padding-left: .8em;
    line-height: 2.4em;
}

.deptholder .pulldown {
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

.deptholder:hover,
.activedeptholder {
    background-color: #ddd;
}

.deptholder:hover .pulldown,
.activedeptholder .pulldown {
    background-color: #333;
    background-image: url('images/pulldown_hover.png');
}

.deptholder .selectdropdown {
    position: relative;
    top: 0;
    left: 0;
    background: #333;
    color: #fff;
    display: none;
    clear: both;
       height: 300px;
    overflow-y: hidden;


}

.deptholder .selectdropdown span {
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

.deptholder .selectdropdown span:last-child {
    border-bottom: none;
}

.deptholder .selectdropdown span.active {
    background-color: #2A817C;
    background-image: url('img/radio_tick.png');
    background-repeat: no-repeat;
    background-size: 1.6em 1.6em;
    background-position: 98% 50%;
}

.deptholder .selectdropdown span:hover {
    background-color: #555;
}


</style>




























<script type="text/javascript">


$(document).ready(function(){



    // set up select boxes
    $('.deptholder').each(function(){
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
            if($(this).hasClass('activedeptholder')) {
                // roll up roll up
                $(this).children('.selectdropdown').slideUp(200);
                $(this).removeClass('activedeptholder');
                // change span back to selected option text
                if($(this).children('select').val() != '0') {

                    $(this).children('.desc').fadeOut(100, function(){
                        $(this).text($(this).siblings("select").val());
                        $(this).fadeIn(100);
                    });

                    valueness=$(this).children('select').val(); 
                    //alert(valueness);


 
    
                               $.ajax({
    type: "POST",
    url: "dept_state.php",
    data:'positionname='+valueness,
    success: function(data){
      
       
       
    $("#dept-list").html(data);
    }
    });


                }
            }
            else {
                // if there are any other open dropdowns, close 'em
                $('.activedeptholder').each(function(){
                    $(this).children('.selectdropdown').slideUp(200);
                    // change span back to selected option text
                    if($(this).children('select').val() != '0') {
                           
                        $(this).children('.desc').fadeOut(100, function(){
                            $(this).text($(this).siblings("select").val());
                            $(this).fadeIn(100);
                        });
                    }


                    $(this).removeClass('activedeptholder');
                });         
                // roll down
                $(this).children('.selectdropdown').slideDown(200);
                $(this).addClass('activedeptholder');
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
    $('.deptholder .selectdropdown span').click(function(){
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
    
              timer: 300,
            showConfirmButton: false
            },
                                        function(){setTimeout(function(){
                                        swal({
                                        title: "Okay",
                                     
                                        type:"success",
                                        html: true,
                                
                                          timer: 10,
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
<?php include ("banneradmin.php"); ?>

  
<div class="container">

<div class="col-md-12 flex-center">





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




   <div class="deptholder" style="width:100%;">
    <label>Department ...</label>
    <select name="country" id="country-list" class="form-control selectpicker">



       <?php

  

            $table2 = "select * from departments order by departmentId ASC";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
  
        <?php

        echo "<option value='$row[department]' ></option>";
        }
        ?>

    </select>
  </div>










































   <div style="width:100%;" id="deptdiv" >
    <label>Job Positions ...</label>
    <select name="country" id="dept-list" class="form-control selectpicker" onChange="getState(this.value);" required>


    

    </select>
  </div>
        <div class="col-md-6">
         <button type="button" class="btn btn-info" data-toggle="modal" style="width:100%;" data-target="#modal-create" >Create New Course</button>
         </div>
           <div class="col-md-6">
         <button type="button" class="btn btn-info tag_course" style="width:100%;">Tag a Course</button>
         </div><br>
           <div class="col-md-6">
          <button type="button" class="btn btn-info" style="width:100%;"data-toggle="modal" data-target="#tagall" >Tag all</button>
         </div>
                             <div class="col-md-6">
          <button type="button" class="btn btn-info" style="width:100%;"data-toggle="modal" data-target="#disable-cor" >Disable Course</button>
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



<form action="aecourse.php" method="post" enctype="multipart/form-data"> 
 <div id="tagall" class="modal fade">  
      <div class="modal-dialog" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Tag all</h4>  
                </div>  
                <div class="modal-body" id="employee_detail1">  

Select a course to tag to all positions or by department <br><br>







        <select name="tag_dept" class="form-control selectpicker">

        <?php
 
            $table2 = "select * from departments";
            $run_query2b = mysqli_query($c11,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
        <option value="<?php echo $row["departmentId"]; ?>"><?php echo $row["department"]; ?></option>
        <?php
        }
        ?>
        </select>

















        <select name="tag_all" class="form-control selectpicker">
   
        <?php
 
            $table2 = "select * from fcourse WHERE isActive = '1'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["coursename"]; ?></option>
        <?php
        }
        ?>
        </select>





                </div>  
                <div class="modal-footer">  
                     <button type="submit" class="btn btn-default" name="tagall" >Tag all Positions</button>  
                     <button type="submit" style="width: 50%;" class="btn btn-default" name="tagdept" >Tag by Department</button>  
                     <button type="button"  style="width: 40%;" class="btn btn-default" data-dismiss="modal">Close</button>                     
                </div>  
           </div>  
      </div>  
 </div> 
</form>



































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





<form action="createcor2.php" method="post" enctype="multipart/form-data"> 
 <div id="dataModalnew" class="modal fade">  
      <div class="modal-dialog modal-md" role="document">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Update Course</h4>  
                </div>  
                <div class="modal-body" id="employee_detailnew">  
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









<form method="post" action="aecourse.php"> 
<div class="modal fade" id="disable-cor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Disable a Course</h4>
            </div>
            <!--Body-->



            <div class="modal-body" id="tag_course">





        <select name="getcor" class="form-control selectpicker">
        <option value="">Course ...</option>
        <?php
 
            $table2 = "select * from fcourse WHERE isActive = '1'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {  
        ?>



        <option value="<?php echo $row["id"]; ?>"><?php echo $row["coursename"]; ?></option>
        <?php
        }
        ?>



        </select>















         
</div>            <!--Footer-->
            <div class="modal-footer">
             <button type="submit" class="btn btn-default colorb" name="disablecor">Disable</button>
                <button type="button" class="btn btn-default  colorb" data-dismiss="modal">Close</button>
            </div>
        </div>   </form>
        <!--/.Content-->
    </div>
</div>











<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
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
<form role="form" action="createcor1.php" method="post" id="create-cor" enctype="multipart/form-data">
                   <fieldset>
           
            <div class="col-md-12">

<div  id ="display">


<?php include("colormod.php") ?>
</div>

<!----> 

            </div>
           



            </div>

            </fieldset>
         
            <!--Footer-->
            <div class="modal-footer">

             <button type="submit" class="btn btn-default colorb createcourse"  name="create12">Create</button>
         
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





$(document).on('click', '.load_data', function()
      {  
   
                $.ajax(
                {  
                     url:"getpos.php",  
                     method:"POST",  
              
                     success:function(data){  
                          $('#dept-list').html(data);  
                 
                     }  
                });  
                      
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