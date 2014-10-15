<?php

include('db_connect.php');
$first= $_POST['first_name'];
$last = $_POST['last_name'];

if ($first == NULL) {
	$first = '.*';
}

if ($last == NULL) {
        $last = '.*';
}

#client search command with first last and username

$sql = "select distinct IUID, FirstName, LastName, Status, Rank, DeptDesc, SchoolDesc, Campus
from iumasterlist where LastName rlike '$last' and FirstName rlike '$first'";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		   'IUID' => $row['IUID'],
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
echo $jsonstring;


mysql_close();

?>
