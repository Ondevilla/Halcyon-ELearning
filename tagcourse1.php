
<?php


if(isset($_POST["Tag"]))

{

    if(!isset($_SESSION["poscheck"]))

{

                echo"<script>window.open('aecourse.php','_self')</script>";
                exit();

}












    $jobid = $_SESSION["poscheck"];
    $courseid = $_POST["getpos"];

            $table2 = "select * from positions WHERE position='$jobid'";
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