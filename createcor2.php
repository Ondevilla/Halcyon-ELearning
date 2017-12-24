<?php 
include("connect.php");
include("dbcon.php");



if(isset($_POST["updatecor"]))
	{
   $ctitle = $_POST["ctitle1"];








if(!isset($_POST["red"]))
{
	echo $color="rgb(0,0,0)";
}
elseif(!isset($_POST["green"]))
{
	echo $color="rgb(0,0,0)";
}
elseif(!isset($_POST["blue"]))
{
	echo $color="rgb(0,0,0)";
}
else
{
	 $color="rgb(".$_POST["red"].",".$_POST["green"].",".$_POST["blue"].")";
}





    $cdetails = $_POST["cdetails1"];


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
                    
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");







$remarks2="Edited ".$ctitle;







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
 $imageto = "";
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




}


            $table2d = "delete from counter";
            $run_query2d = mysqli_query($dbcon,$table2d);










$courseid = $_SESSION["courseid"];






if($ctitle != "")
{
	        $table2e = "UPDATE courseposition SET coursename = '$ctitle' WHERE id = $courseid";
            $run_query2e = mysqli_query($dbcon,$table2e);
}

if($cdetails != "")
{
	        $table2f = "UPDATE courseposition SET cdetails = '$cdetails' WHERE id = $courseid";
            $run_query2f = mysqli_query($dbcon,$table2f);
}
if($imageto != "")
{
	        $table2g = "UPDATE courseposition SET image = '$imageto' WHERE id = $courseid";
            $run_query2g = mysqli_query($dbcon,$table2g);
}















}




		        echo"<script>window.open('aecourse.php','_self')</script>";
		        exit();









?>