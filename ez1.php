<?php include 'import.css.js.php' ?>
<?php include 'connect.php' ?>
<?php include 'javascript.php' ?>
<style type="text/css">
	table {
  box-sizing: border-box;
  overflow: hidden;

  border-collapse: collapse;
  
  width: 100%;

  border-radius: .5em;
  box-shadow: 0 0 .5em #000;
   font-family: 'Agency FB';


}



th {
  text-align: center;
  color:white;
  padding: 5px;
  font-size: 2em;

}
th .black
{
	 text-align: center;
  color:black;
  padding: 5px;
  font-size: 2em;
}

td
{
  text-align: center;
    padding: 5px;
}
a
{
	font-family: 'Agency FB';
	font-size: 1.5em;
}

</style>



<?php
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  


echo $page;
//queries
$querypagination= "SELECT * FROM $table3";

//display datas

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$per_page=10; //pagination
$interval=3; //matic indicated current page
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$pages_query = mysqli_query($connlog,$querypagination) or die (mysqli_error());
$pagessolution = ceil(mysqli_num_rows($pages_query) / $per_page);									//round off
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$totaldata =mysqli_num_rows($pages_query);
echo "<br>pages: $pagessolution	 <br>total in data: $totaldata <br>";
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
$start=(($page-1)*$per_page);
$names=mysqli_query($connlog,"SELECT * FROM $table3 LIMIT $start,$per_page");
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
echo "<br>";

echo "
<table class='table' style='width:90%; margin:0 auto;'>
  <thead  style='background-color:#64b5f6;'>
  </tr>
<th style='padding:0px;'>Id</th>  
<th style='padding:0px;'>User</th>
<th style='padding:0px;'>Remarks</th>
<th style='padding:0px;'>Date</th>
<th style='padding:0px;'>Time</th>
</tr></thead>

 <tbody>";
while ($row=mysqli_fetch_array($names))
{
	echo "<tr>
		  <td style='padding:0px;'>$row[id]</td>
		  <td style='padding:0px;'>$row[user]</td>  
		  <td style='padding:0px;'>$row[remarks]</td> 
		  <td style='padding:0px;'>$row[Rdate]</td>
		  <td style='padding:0px;'>$row[Rtime]</td></tr>";
}





//-----------------------------------------------------------------------------------------------------------------------------------------------------------
	echo "</tbody>
</table><br>";
//----------------------------------------------------------------------------------------------------------------------------------------------------------
	$counterlimit=$page;																			//current page = $page
	$pageinterval=$pagessolution;
																									//minimum

//-----------------------------------------------------------------------------------------------------------------------------------------------------------

echo '<div class="row"><nav style="margin:0 auto;"><ul class="pagination">';

		echo "<li class='page-item'> <a class='pagination_link'  style='cursor:pointer; padding:20px;border-radius: 20px 0px 0px 20px; border:1px solid #ccc;' id='1'>«</a></li>";															// first page
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
		if($page==1)	
		{
				echo '<li class="page-item"><a  style="cursor:pointer; padding:20px; border:1px solid #ccc;">‹</a></li>';
		}	
		else
		{
			echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . ($page-1)	."'>‹</a></li>";
		}   
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
	
	if ($page==$pageinterval) 
	{
		for($number=$page-$interval+1;$number<=$pageinterval;$number++) //interval
		{

						if($number==$page)	
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='background-color:#0275d8;color:white;cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</span></a></li>";	
						
				}
				else
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</a></li>";	
				}
		}
	}	
	elseif ($page==1)
	{
		for($number=1;$number<=$interval;$number++) //interval
		{
			if($number==$page)	
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='background-color:#0275d8;color:white;cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</span></a></li>";	
						
				}
				else
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</a></li>";	
				}
		}
	}		
	else
	{
		for($number=$page-1;$number<=$page+1;$number++) //interval
		{
		
				if($number==$page)	
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='background-color:#0275d8;color:white;	cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</span></a></li>";	
						
				}
				else
				{
				echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . $number	."'>".$number."</a></li>";	
				}	
		}
	}										
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
		if($page==$pageinterval)	
		{
			echo '<li class="page-item"><a  style="cursor:pointer; padding:20px; border:1px solid #ccc;">›</a></li>';
		}	
		else
		{
			echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px; border:1px solid #ccc;' id='" . ($page+1)	."'>›</a></li>";		
		}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
	echo "<li class='page-item'> <a   class='pagination_link' style='cursor:pointer; padding:20px;border-radius: 0px 20px 20px 0px; border:1px solid #ccc;' id='" . $pageinterval	."'>»</a></li>";											//last page
	echo '</ul></nav></div>
	<br>
';





//-----------------------------------------------------------------------------------------------------------------------------------------------------------


 

 
?>


