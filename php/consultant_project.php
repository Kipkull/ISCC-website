<?php

include('db_connect.php');


$ID = $_POST['ID'];
$sql2 = "select * from projects where ProjID in ( SELECT ProjID FROM `projectconsultant` WHERE ConsID = '$ID') ";
$result2  = mysql_query($sql2);
$lengths = mysql_fetch_lengths($result2);
$json = array();


while ($row = mysql_fetch_array($result2))
  {

    
    $ProjID = $row['ProjID'];
    $sql_max = " SELECT MAX(Date) from work where ProjID = '$ProjID' ";
    $sql_max_hours = " SELECT MAX(Hours) from work where ProjID = '$ProjID' ";    

    $max_result = mysql_query($sql_max);
    $max_row =  mysql_fetch_array($max_result);

	 $max_hour = mysql_query($sql_max_hours); 
 $max_row_hour =  mysql_fetch_array($max_hour); 



    $json[]= array(
		   'ProjID' => $row['ProjID'],
		   'ProjectTitle' => $row['ProjectTitle'],
		   'Start' => $row ['StartDate'],
		   'Latest' => $max_row['MAX(Date)'],
			'Hours' => $max_row_hour['MAX(Hours)']
		   ); 
  }

echo json_encode($json);


?>
