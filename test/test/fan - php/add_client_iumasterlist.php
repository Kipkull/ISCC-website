<?php

include('db_connect.php');

$IUID= $_GET['IUID'];

#client search command with first last and username

$sql = "select * from iumasterlist where IUID = '$IUID'";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		   'IUID' => $row['IUID'],
		   'Username' => $row['Username'],
		   'FirstName' => $row['FirstName'],
		   'LastName'=> $row['LastName'],
		   'Status'=> $row['Status'],
		   'Rank'=> $row['Rank'],
		   'DeptDesc'=> $row['DeptDesc'],
		   'SchoolDesc'=> $row['SchoolDesc'],
		   'Campus' => $row['Campus'] 
		   );
  }

$jsonstring = json_encode($json);

mysql_close();

?>