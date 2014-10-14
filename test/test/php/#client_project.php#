<?php

include('db_connect.php');


$ID = $_POST['ID'];
#$ID = '651';
#$sql2  = "select * from clientproject where ISCCID = '$ID' ";
#echo "123";
$sql2 = "select * from projects where ProjID in ( SELECT ProjID FROM `clientproject` WHERE ISCCID = '$ID') ";
#echo $sql2;
$result2  = mysql_query($sql2);
$lengths = mysql_fetch_lengths($result2);

$json = array();


while ($row = mysql_fetch_array($result2))
  {

    
    $ProjID = $row['ProjID'];

    $sql_max = " SELECT MAX(Date) from work where ProjID = '$ProjID' ";
    $max_result = mysql_query($sql_max);
    $max_row =  mysql_fetch_array($max_result);

    $json[]= array(
		   'ProjID' => $row['ProjID'],
		   'ProjectTitle' => $row['ProjectTitle'],
		   'Start' => $row ['StartDate'],
		   'Latest' => $max_row['MAX(Date)']
		   ); 
  }

echo json_encode($json);




?>