

 <?php  
 //pagination.php  
session_start();
include("dbcon.php");
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
 $query = "SELECT * FROM videotable where moduleid = '10' ORDER BY videoid DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($dbcon, $query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th width='50%'>module</th>  
                <th width='50%'>orderno</th>  
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["videotitle"].'</td>  
                <td>'.$row["videoid"].'</td>
                <td>
                <video width="320" height="240" controls autoplay>
                 <source src="video/'.$row["videoname"].'">;    
                 </video>
                 </td>
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query ="SELECT * FROM videotable where moduleid = '10' ORDER BY videoid DESC";  
 $page_result = mysqli_query($dbcon, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  


 }  
 $output .= '</div><br/><br />';  
 echo $output;  
 ?>  


