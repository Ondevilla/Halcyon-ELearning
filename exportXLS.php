<?php


include_once("connect.php");


date_default_timezone_set('Asia/manila');
$D=date("Y-m-d");
					
date_default_timezone_set('Asia/manila');
$T=date("g:i:s A");


$filename = "export $D $T";         

	$file_ending = "xls";
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
	 

	


	//iterate on results row and create new index array of data






	$queryRecords = mysqli_query($connlog, $_SESSION['sql']) or die("error to fetch employees data");



/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields

echo  "id\t";
echo  "user\t";
echo  "remarks\t";
echo  "Rdate\t";
echo  "Rtime\t";

print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysqli_fetch_assoc($queryRecords))
    {
        $schema_insert = "";
    
            if(!isset($row['id']))
                $schema_insert .= "NULL".$sep;
            elseif ($row['id'] != "")
                $schema_insert .= "$row[id]".$sep;
            else
                $schema_insert .= "".$sep;

            if(!isset($row['user']))
                $schema_insert .= "NULL".$sep;
            elseif ($row['user'] != "")
                $schema_insert .= "$row[user]".$sep;
            else
                $schema_insert .= "".$sep;

            if(!isset($row['remarks']))
                $schema_insert .= "NULL".$sep;
            elseif ($row['remarks'] != "")
                $schema_insert .= "$row[remarks]".$sep;
            else
                $schema_insert .= "".$sep;

            if(!isset($row['Rdate']))
                $schema_insert .= "NULL".$sep;
            elseif ($row['Rdate'] != "")
                $schema_insert .= "$row[Rdate]".$sep;
            else
                $schema_insert .= "".$sep;

            if(!isset($row['Rtime']))
                $schema_insert .= "NULL".$sep;
            elseif ($row['Rtime'] != "")
                $schema_insert .= "$row[Rtime]".$sep;
            else
                $schema_insert .= "".$sep;

     
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    } 





?>