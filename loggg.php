<?php include 'connect.php' ?>
<?php
/* Database connection start */



/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0 => 'id', 
	1 => 'user',
	2 => 'remarks',
	3 => 'Rdate',

	4 => 'Rtime'
	
);




// getting total number records without any search
$sql = "SELECT id";
$sql.=" FROM log";
$query=mysqli_query($connlog, $sql) or die("loggg.php: get log");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT id, user, remarks, Rdate, Rtime ";
$sql.=" FROM log WHERE 1=1";
if( !empty($requestData['columns'][0]['search']['value']) ){
	$sql.=" AND  id LIKE '".$requestData['columns'][0]['search']['value']."%' ";    
}
if( !empty($requestData['columns'][1]['search']['value']) ){
	$sql.=" AND  user LIKE '".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){
	$sql.=" AND  remarks LIKE '".$requestData['columns'][2]['search']['value']."%' ";
}

if((!empty($requestData['columns'][3]['search']['value'])) && ((strlen($requestData['columns'][3]['search']['value']))<=10) ){




	



			//$sql.=" AND  (Rdate BETWEEN $start and $end)";

		$sql.=" AND  Rdate = '".$requestData['columns'][3]['search']['value']."' ";




	//$ystart=substr($anoba,0,4);
	//$mstart=substr($anoba,5,7);
	//$dstart=substr($anoba,8,10);
	//$yend=substr($anoba,14,18);
	//$mend=substr($anoba,19,21);
	//$dend=substr($anoba,22,24);


	//$start=substr($clean, 0,8);
	//$end=substr($clean, 12,20);


	//$sql.=" AND  (Rdate BETWEEN $start and $end)";

	
	//$sql.=" AND  ( Rdate >=  $start  AND Rdate <= $end )";
	

}
if((!empty($requestData['columns'][3]['search']['value'])) && ((strlen($requestData['columns'][3]['search']['value']))==24)    ){
		$anoba=$requestData['columns'][3]['search']['value'];
		$clean=str_replace('-', '', $anoba);

	
			$start=substr($clean, 0,8);
			$end=substr($clean, 12,20);


			//$sql.=" AND  (Rdate BETWEEN $start and $end)";

	
			$sql.=" AND  ( Rdate >=  $start  AND Rdate <= $end )";
	
	

}

if( !empty($requestData['columns'][4]['search']['value']) ){
	$sql.=" AND  Rtime LIKE '".$requestData['columns'][4]['search']['value']."%' ";
}

$query=mysqli_query($connlog, $sql) or die("loggg.php: get log");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  ";
$_SESSION['sql']=$sql;
$sql.=" LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains column index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($connlog, $sql) or die("loggg.php: get log");
	

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["id"];
	$nestedData[] = utf8_encode($row["user"]);
	$nestedData[] = $row["remarks"];
	$nestedData[] = $row["Rdate"];
	$nestedData[] = $row["Rtime"];
	
	
	$data[] = $nestedData;
}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
