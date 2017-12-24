  <?php  
     include("dbcon.php");
     include("connect.php");
       include("dbconnect.php");
$empid = $_SESSION["theid"];
              $query = "SELECT * FROM employees WHERE empId = '$empid'";  
              $result = mysqli_query($c11, $query); 

      $row = mysqli_fetch_array($result);  
      //echo json_encode($row);  
      $try1 = $row["fullname"];
     
  //echo $try

      $query1 = "SELECT * FROM date1 order by id DESC"; 
      $result1 = mysqli_query($dbcon, $query1);  
      $row1 = mysqli_fetch_array($result1);  
      $try2 = $row1["date1"]; 


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
          
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");





$remarks2="EarthQuake: Certificate of ".$row['fullname']." had been generated";

$sqllog = "INSERT INTO $table3 (user, remarks, Rdate, Rtime) Values ('".$_SESSION['fn1']."','".$remarks2."','$D','$T')";
$login = mysqli_query($connlog, $sqllog) or die (mysqli_error());



 ?>
   
 