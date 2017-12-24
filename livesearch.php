





<?php


session_start();

//include connection file 



	include_once("connect.php");
	 
	// initilize all variable

	$params = $columns = $totalRecords = $data = array();

 $params = $_REQUEST;
	



	//define index of column
	$columns = array( 
		0 =>'id',
		1 =>'user', 
		2 => 'remarks',
		3 => 'Rdate',
		4 => 'Rtime'
	);



	$where = $sqlTot = $sqlRec = "";

	// check search value exist
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" ( user LIKE '".$params['search']['value']."%' ";    
		$where .=" OR remarks LIKE '".$params['search']['value']."%') ";
		//$where .=" OR Rdate LIKE '".$params['search']['value']."%' ";
		//$where .=" OR Rtime LIKE '".$params['search']['value']."%' )";
	}
	

	//------------------------------------------------------------------------------------------------------------------------------


	// getting total number records without any search
	$sql = "SELECT * FROM `log` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


	//$sqlprint .=$sql;
	
	//concatenate search sql if value exist
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
		//$sqlprint .= $where;
	}	
 	


	
	

	//$sqlprint .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir'];
	//$queryprint = mysqli_query($connlog, $sqlprint) or die("error to fetch employees data");


 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir'];
 	$_SESSION['sql']=$sqlRec;
 	$sqlRec .="  LIMIT ".$params['start']." ,".$params['length']." ";

	$queryTot = mysqli_query($connlog, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($connlog, $sqlRec) or die("error to fetch employees data");




	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format




	
	// file name for download
	
?>

