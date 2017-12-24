
<style type="text/css">
	@media screen and (min-width: 425px) {
    video
    {
      height:250px;
      width: 250px;
    }
    @media screen and (min-width: 768px)
	{
	video {
	    height: 300px;
	    width: 380px;
	}
	}
	 @media screen and (min-width: 1024px)
	{
	video {
	    height: 300px;
	    width: 500px;
	}
	}
	 @media screen and (min-width: 1440px)
	{
	video {
	    height: 450px;
	    width: 850px;
	}
	}
</style>
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
 $query = "SELECT * FROM videotable where moduleid = '$moduleid' ORDER BY videoid ASC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($dbcon, $query);  
 $output .= "  

 ";  
 while($row = mysqli_fetch_array($result))  
 {  
            ?><center><p style="font-size:2em;"><b><?php echo $row["videotitle"]; ?></b></p></center><?php
      ?>
                <video  controls>
                 <source src="<?php echo $row['videoname'];?>">    
                 </video>



    <?php 
 }  
 $output .= '</table><div align="right">';  
 $page_query ="SELECT * FROM videotable where moduleid = '$moduleid' ORDER BY videoid DESC";  
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


<link href="css/Fontmoken.css" rel="stylesheet">
