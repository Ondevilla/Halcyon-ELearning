






<?php


session_start();

//include connection file 



	include_once("connect.php");
	 
	// initilize all variable
	$sqlRec=$_SESSION['hatulan'];

	if (!isset($_SESSION['where']))
	{

		$sqlRec.= " WHERE ( Rdate BETWEEN  #".$_POST["from_date"]."# AND #".$_POST["to_date"]."# ) ";

	}
	else
	{
		$sqlRec.= " AND ( Rdate BETWEEN  #".$_POST["from_date"]."# AND #".$_POST["to_date"]."# ) ";
	}
	$sqlTot =$sqlRec;



	$sqlRec .=$_SESSION['order'];

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

