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

$sql = "select disntict ISCCID, FirstName, LastName, Status, Rank, DeptDesc, SchoolDesc, FieldGroup, Campus
from clients where LastName rlike '$last' and FirstName rlike '$first'";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		   'ISCCID' => $row['ISCCID'],
		   'FirstName' => $row['FirstName'],
		   'LastName'=> $row['LastName'],
		   'Status'=> $row['Status'],
		   'Rank'=> $row['Rank'],
		   'DeptDesc'=> $row['DeptDesc'],
		   'SchoolDesc'=> $row['SchoolDesc'],
    	   'FieldGroup' => $row['FieldGroup'],
		   'Campus' => $row['Campus'] 
		   );
  }

$jsonstring = json_encode($json);
echo $jsonstring;
mysql_close();

?>