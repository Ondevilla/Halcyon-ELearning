<!DOCTYPE html>
<html lang="en">
<html>
<?php

include("dbcon.php");
include("connect.php");


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


<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR IMAGE TEXT AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php


if(isset($_POST["remove_text"]))

{


$textid = $_SESSION["removetext"];


           


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From texttable WHERE textid = '".$textid."'"));
$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$roww1['moduleid']."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Remove text: ".$roww1['texttitle']." from ".$roww2['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());

 $table2 = "DELETE FROM texttable WHERE textid='$textid'";
            $run_query2b = mysqli_query($dbcon,$table2);



        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();





}


?>
<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR IMAGE TEXT AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->



<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR IMAGE TEXT AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php


if(isset($_POST["remove_video"]))

{
    

$videoid = $_SESSION["removevideo"];



$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From videotable WHERE videoid = '".$videoid."'"));
$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$roww1['moduleid']."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Remove Video: ".$roww1['videotitle']." from ".$roww2['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());



$table2 = "DELETE FROM videotable WHERE videoid='$videoid'";
            $run_query2b = mysqli_query($dbcon,$table2);
        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();



}


?>
<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR IMAGE TEXT AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->




<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR IMAGE TEXT AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php


if(isset($_POST["remove_image"]))

{
    

$imageid = $_SESSION["removeimage"];


         


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From imagetable WHERE imageid = '".$imageid."'"));
$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$roww1['moduleid']."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Remove Image: ".$roww1['imagetitle']." from ".$roww2['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());
   
   $table2 = "DELETE FROM imagetable WHERE imageid='$imageid'";
            $run_query2b = mysqli_query($dbcon,$table2);



        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();

}


?>
<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR FLASH FLASH AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->




<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR FLASH FLASH AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->



<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR FLASH FLASH AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php


if(isset($_POST["remove_flash"]))

{
    

$flashid = $_SESSION["removeflash"];



$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From flashtable WHERE flashid = '".$flashid."'"));
$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$roww1['moduleid']."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Remove Flash: ".$roww1['flashtitle']." from ".$roww2['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());
 
            $table2 = "DELETE FROM flashtable WHERE flashid='$flashid'";
            $run_query2b = mysqli_query($dbcon,$table2);

       
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();



}


?>


















<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR FLASH FLASH AND VIDEO|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
















<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR QUESTION QUESTION AND    QUESTION|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<?php


if(isset($_POST["remove_ques"]))

{
    

$quesid = $_SESSION["removeques"];


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From questions WHERE questionid = '".$quesid."'"));
$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$roww1['moduleid']."'"));


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");




$remarks2="Remove Questions :" .$roww1['questioncap']. " from ".$roww2['modulename'];







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());


            $table2 = "DELETE FROM questions WHERE questionid='$quesid'";
            $run_query2b = mysqli_query($dbcon,$table2);


        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();



}


?>










<!--- ||||||||||||||||||||||||||||||||DELETE FUCNTIONS FOR QUESTION QUESTION AND    QUESTION|||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

<?php



if(isset($_POST["create"]))

{

    $mtitle = $_POST["mtitle1"];
    $mdetails = $_POST["mdetails1"];
    $counter = "0";
    $coursename = $_POST["getpos"];


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From fcourse WHERE id = '".$coursename."'"));






$remarks2= $mtitle ." module created and tag to course ". $roww1['coursename'] ;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
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

        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();



















}


?>


<?php
if(isset($_POST["savemod"]))

{


    $moduleid = $_SESSION["editmod"];
    $modulename = $_POST["editmod1"];



$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$value=$D." ".$T;



$remarks2="Module ".$roww1['modulename']." Change to ".$modulename;







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());






            $table2 = "UPDATE modules SET modulename='$modulename' WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            $table2a = "UPDATE coursemodule SET modulename='$modulename' WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2a);

            $table2b = "UPDATE empmodule SET moduleName='$modulename' WHERE moduleId='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2b);




        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();

}
?>



<?php
if(isset($_POST["removemod"]))

{


    $moduleid = $_SESSION["removemod"];

$roww2=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");




$remarks2="Module ".$roww2['modulename']." Deleted";







$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());

    
            $table2 = "DELETE FROM modules WHERE id='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2);

            $table2a = "DELETE FROM coursemodule WHERE moduleid='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2a);

            $table2b = "DELETE FROM empmodule WHERE moduleId='$moduleid'";
            $run_query2b = mysqli_query($dbcon,$table2b);



        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();


}
?>

<?php



if(isset($_POST["addtext"]))

{


            $title = $_POST["title"];
            $description = $_POST["overview"];

            $moduleid = $_SESSION["textmod"];
            $table2b = "INSERT INTO texttable (texttitle,description,moduleid) VALUES ('$title','$description','$moduleid')";
            $run_query2b = mysqli_query($dbcon,$table2b);


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$remarks2="Add new text: ".$title." from  ".$roww1['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());



        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();


}



?>




<?php


if(isset($_POST["addimage"]))

{


            $title = $_POST["imagetitle"];

            $moduleid = $_SESSION["imagemod"];
            $test = "1";
            $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);


            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);




$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$remarks2="Add new Image: ".$title." from  ".$roww1['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());






            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}   

if($_FILES['image']['name'] = "image/jpeg")
{


    $filetype = ".jpeg";

}
elseif($_FILES['image']['name'] = "image/jpg")
{

    $filetype = ".jpg";
}
elseif($_FILES['image']['name'] = "image/png")
{

    $filetype = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}



$_FILES['image']['name'] = $vidId.$filetype;
        $filename = $_FILES['image']['name'];

        $tmp_name1 = $_FILES['image']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name1,$local_image.$filename);
        $Pic2 = "attachment/img/".$_FILES['image']['name'];


            $table2 = "INSERT INTO imagetable (moduleid,imagename,imagetitle) VALUES ('$moduleid','$Pic2','$title')";
            $run_query2c = mysqli_query($dbcon,$table2);


            $table2 = "DELETE FROM counter";
            $run_query2c = mysqli_query($dbcon,$table2);

        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();






}


?>



<?php



if(isset($_POST["vidadd"]))


{








            $test = "1";
            $moduleid = $_SESSION["videomod"];
            $videotitle = $_POST["videotitle"];
            $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);

            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);

$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));

date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Add Video: ".$videotitle ." from ".$roww1['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());





            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}   




$_FILES['video']['name'] = $vidId.".mp4";


        $filename = $_FILES['video']['name'];
        $tmp_name = $_FILES['video']['tmp_name'];
        $local_image = 'attachment/vid/';
        move_uploaded_file($tmp_name,$local_image.$filename);
        $Pic1 = "attachment/vid/".$_FILES['video']['name'];



            $table2 = "INSERT INTO videotable (moduleid,videoname,videotitle) VALUES ('$moduleid','$Pic1','$videotitle')";
            $run_query2c = mysqli_query($dbcon,$table2);







            $table2 = "DELETE FROM counter";
            $run_query2c = mysqli_query($dbcon,$table2);





        
       echo"<script>window.open('aemodule.php','_self')</script>";
        exit();




}





?>



<?php



if(isset($_POST["addflash"]))


{


            $test = "1";
            $moduleid = $_SESSION["flashmod"];
            $flashtitle = $_POST["flashtitle"];
            $table2 = "INSERT INTO counter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from counter";
            $run_query2b = mysqli_query($dbcon,$table2);


$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT * From modules WHERE id = '".$moduleid."'"));


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");

$remarks2="Add new Flash: ".$flashtitle." from  ".$roww1['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());




            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}   




$_FILES['flash']['name'] = $vidId.".swf";


        $filename = $_FILES['flash']['name'];
        $tmp_name = $_FILES['flash']['tmp_name'];
        $local_image = 'attachment/fla/';
        move_uploaded_file($tmp_name,$local_image.$filename);
        $Pic1 = "attachment/fla/".$_FILES['flash']['name'];



            $table2 = "INSERT INTO flashtable (moduleid,flashname,flashtitle) VALUES ('$moduleid','$Pic1','$flashtitle')";
            $run_query2c = mysqli_query($dbcon,$table2);







            $table2 = "DELETE FROM counter";
            $run_query2c = mysqli_query($dbcon,$table2);


        
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();


}


?>






<?php





if(isset($_POST["addques"]))

{



    $test = "1";
    $questioncap = $_POST["question"];
    $moduleid = $_SESSION["qmod"];
    
    

$roww1=mysqli_fetch_assoc(mysqli_query($connhalcyon,"SELECT modulename From modules WHERE id='".$moduleid."'"));

$roww2=mysqli_num_rows(mysqli_query($connhalcyon,"SELECT moduleid From questions WHERE moduleid='".$moduleid."'"));



date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");                 
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$remarks2="Add new Question : ".$questioncap." from ".$roww1['modulename'];

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());





$query = "select * from questions WHERE moduleid = '$moduleid'";
$result = mysqli_query($dbcon, $query);
if(mysqli_num_rows($result) > 9)
{



        echo "<script>alert('Maximum questions per module is 10!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();




}








    $question = $_POST["question"];






if ($_FILES['qimage']['size'] == 0 )
{

 $Pic2 = "";
}


else
{
   if($_FILES['qimage']['name'] = "image/jpeg")
{


    $filetype = ".jpeg";

}
elseif($_FILES['qimage']['name'] = "image/jpg")
{

    $filetype = ".jpg";
}
elseif($_FILES['qimage']['name'] = "image/png")
{

    $filetype = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}


     
            $table2 = "INSERT INTO qcounter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from qcounter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId  = $row["countId"];


}              



$_FILES['qimage']['name'] = $vidId.$filetype;
        $filename = $_FILES['qimage']['name'];

        $tmp_name1 = $_FILES['qimage']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name1,$local_image.$filename);
        $Pic2 = "attachment/img/".$_FILES['qimage']['name'];

            $table2 = "DELETE FROM qcounter";
            $run_query2c = mysqli_query($dbcon,$table2);

}


if ($_FILES['imagea']['size'] == 0)
{
 $imagea = "";
}

else

{
if($_FILES['imagea']['name'] = "image/jpeg")
{


    $filetype1 = ".jpeg";

}
elseif($_FILES['imagea']['name'] = "image/jpg")
{

    $filetype1 = ".jpg";
}
elseif($_FILES['imagea']['name'] = "image/png")
{

    $filetype1 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}


            $table2 = "INSERT INTO qcounter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from qcounter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId1  = $row["countId"];


}              

$_FILES['imagea']['name'] = $vidId1.$filetype1;
        $filename1 = $_FILES['imagea']['name'];

        $tmp_name1 = $_FILES['imagea']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name1,$local_image.$filename1);
        $imagea = "attachment/img/".$_FILES['imagea']['name'];



            $table2 = "DELETE FROM qcounter";
            $run_query2c = mysqli_query($dbcon,$table2);
}







if ($_FILES['imageb']['size'] == 0 )

{


 $imageb = "";
}
else
{
if($_FILES['imageb']['name'] = "image/jpeg")
{


    $filetype2 = ".jpeg";

}
elseif($_FILES['imageb']['name'] = "image/jpg")
{

    $filetype2 = ".jpg";
}
elseif($_FILES['imageb']['name'] = "image/png")
{

    $filetype2 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}

            $table2 = "INSERT INTO qcounter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from qcounter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  


                $vidId2  = $row["countId"];


}              


$_FILES['imageb']['name'] = $vidId2.$filetype2;
        $filename2 = $_FILES['imageb']['name'];

        $tmp_name2 = $_FILES['imageb']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name2,$local_image.$filename2);
        $imageb = "attachment/img/".$_FILES['imageb']['name'];



            $table2 = "DELETE FROM qcounter";
            $run_query2c = mysqli_query($dbcon,$table2);
}




if ($_FILES['imagec']['size'] == 0 )
{

    $imagec = "";
}
else
{
if($_FILES['imagec']['name'] = "image/jpeg")
{


    $filetype3 = ".jpeg";

}
elseif($_FILES['imagec']['name'] = "image/jpg")
{

    $filetype3 = ".jpg";
}
elseif($_FILES['imagec']['name'] = "image/png")
{

    $filetype3 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}





            $table2 = "INSERT INTO qcounter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from qcounter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  

                $vidId3  = $row["countId"];


}              






$_FILES['imagec']['name'] = $vidId3.$filetype3;
        $filename3 = $_FILES['imagec']['name'];

        $tmp_name3 = $_FILES['imagec']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name3,$local_image.$filename3);
        $imagec = "attachment/img/".$_FILES['imagec']['name'];



            $table2 = "DELETE FROM qcounter";
            $run_query2c = mysqli_query($dbcon,$table2);
}














if ($_FILES['imaged']['size'] == 0)
{


    $imaged = "";
}
else
{
if($_FILES['imaged']['name'] = "image/jpeg")
{


    $filetype4 = ".jpeg";

}
elseif($_FILES['imaged']['name'] = "image/jpg")
{

    $filetype4 = ".jpg";
}
elseif($_FILES['imaged']['name'] = "image/png")
{

    $filetype4 = ".png";
}
else
{
        echo "<script>alert('Error!')</script>";
        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();
}




            $table2 = "INSERT INTO qcounter (filler) VALUES ('$test')";
            $run_query2a = mysqli_query($dbcon,$table2);



            $table2 = "select * from qcounter";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  


                $vidId4  = $row["countId"];


}              






$_FILES['imaged']['name'] = $vidId4.$filetype4;
        $filename4 = $_FILES['imaged']['name'];

        $tmp_name4 = $_FILES['imaged']['tmp_name'];
        
        $local_image = 'attachment/img/';
        move_uploaded_file($tmp_name4,$local_image.$filename4);



        $imaged = "attachment/img/".$_FILES['imaged']['name'];



            $table2 = "DELETE FROM qcounter";
            $run_query2c = mysqli_query($dbcon,$table2);

}
































$ansa = $_POST["ansa"];
$ansb = $_POST["ansb"];
$ansc = $_POST["ansc"];
$ansd = $_POST["ansd"];
$questioncap = $_POST["question"];

    $getans = $_POST["choice"];


    if($_POST["choice"] == 'A')
{

    $getans1 = $_POST["ansa"];

}
    elseif($_POST["choice"] == 'B')
{
    $getans1 = $_POST["ansb"];    
}
    elseif($_POST["choice"] == 'C')
{
    $getans1 = $_POST["ansc"];   
}
    elseif($_POST["choice"] == 'D')
{
    $getans1 = $_POST["ansd"]; 
}



            $table2 = "INSERT INTO questions (questioncap,questionimage,questionanswer,moduleid,choicea,choiceb,choicec,choiced,imagea,imageb,imagec,imaged) VALUES ('$questioncap','$Pic2','$getans1','$moduleid','$ansa','$ansb','$ansc','$ansd','$imagea','$imageb','$imagec','$imaged')";
            $run_query2c = mysqli_query($dbcon,$table2);








        


        echo"<script>window.open('aemodule.php','_self')</script>";
        exit();























}


?>


<head>
<?php if ($_SESSION['HorS']==1){?>
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <title>Halcyon | Modules</title>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<link rel="icon" type="image/png" href="img/favicon1-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon1-16x16.png" sizes="16x16" />
<title>ShiptoShore | Modules</title>

 <?php } ?>

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


<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="css/Fontmoken.css" rel="stylesheet">
  
      <link rel="stylesheet" href="css/yesno.css">
</head>



<?php if ($_SESSION['HorS']==1){?>
<header style="background-color:white;">
  
<div class="container" >
<div class="col-md-12 flex-center" >
<center>
<a href="admin.php">

<img src="img/halogo.png" class="img-fluid" >
</a>
</center>
</div>
</div>
</header>

 <?php } ?>


<?php if ($_SESSION['HorS']==2){?>
<header style="background-color:white;">
  
<div class="container" >
<div class="col-md-12 flex-center">
<center>
<a href="admin.php">
<img src="img/Shiptoshore.png" class="img-fluid" >
</a>
</center>
</div>
</div>
</header>

 <?php } ?>



  <!--Navbar-->
<nav>
    <div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="logg.php" data-content="Manage Courses & Modules"><i class="fa fa-book"></i><br>Audit Logs</a></li>
      <li><a href="admin1.php" data-content="Manage Courses & Modules"><i class="fa fa-cogs"></i><br>Maintenance</a></li>
      <li><a href="aemployeetb.php" data-content="View Employees"><i class="fa fa-users"></i><br>Employee Management</a></li>
      <li></li>

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
    url: "get_state2.php",
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

   <center>


   <h2><b>Select a Course</b></h2>
        <select name="country" id="country-list" class="form-control selectpicker "  onChange="getState(this.value);">
        <option value="">Courses ...</option>
        <?php
            $table2 = "select * from fcourse WHERE isActive ='1'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  
        ?>
        <option value="<?php echo $row["id"]; ?>"><?php echo $row["coursename"]; ?></option>
        <?php
        }
        ?>
        </select>
         <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modal-create" >Create New Module</button>        
    <br>
<br>
<br>

 <div class="row">

                        <div id="state-list" class="card col-md-4">


                                <!-- TABLE GOES IN -->
                        

                        </div>
                        <div class="col-md-1">
                        </div>
<div id="module_details" class="card col-md-7">





</div>





 </div>             
                     </center>
</div>
</div>
</body>


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


 






<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create a Module</h4>
            </div>
            <!--Body-->



            <div class="modal-body">
<form role="form" method="post" action="aemodule.php">
                   <fieldset>
           
            <div class="col-md-12">



<h4>Module Title : </h4>
<input type="text" placeholder="Enter Module Title Here ..." name="mtitle1"></input>
<br>
<br>
<h4>Description</h4>
<textarea rows="7" cols="50" name="mdetails1"></textarea>
<br>
<h4>Tag a Course </h4>


        <select name="getpos" class="form-control selectpicker">

        <?php
            $table2 = "select * from fcourse where isActive = '1'";
            $run_query2b = mysqli_query($dbcon,$table2);

            while($row = mysqli_fetch_array($run_query2b))

{  
        ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row["coursename"]; ?></option>
        <?php
        }
        ?>
        </select>

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


    <!-- SCRIPTS -->
    <!-- JQuery -->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

</html>