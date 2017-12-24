
 <?php  
 //pagination.php  


session_start();
include("dbcon.php");
$moduleid = $_SESSION["idmod"];
 $record_per_page = 1;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM flashtable where moduleid = '$moduleid' ORDER BY flashid ASC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($dbcon, $query);  
 $output .= "  

 ";  
 while($row = mysqli_fetch_array($result))  
 {  
 
   ?>
<embed height="100%" width="100%" controls src="<?php echo $row['flashname'];?>">
               



    <?php 
 }  
 $output .= '</table><br /><div align="right">';  
 $page_query ="SELECT * FROM flashtable where moduleid = '$moduleid' ORDER BY flashid DESC";  
 $page_result = mysqli_query($dbcon, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link3' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  


 }  
 $output .= '</div><br/><br />';  

 ?>  


