<?php

include('db_connect.php');

$ProjID= $_GET['ProjID'];

#client search command with first last and username

$sql = "select * from projects where ProjID = '$ProjID'";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		    'ProjID' => $row['ProjID'],
		    'ProjectTitle' => $row['ProjectTitle'],
			'ProjectDesc' => $row['ProjectDesc'],
			'ProjectNotes' => $row['ProjectNotes'],
			'ProjectBill' => $row['ProjectBill'],
			'Supervisor ' => $row['Supervisor'],
			'TypeP' => $row['TypeP'],
			'Status' => $row['Status'],
			'BillingAccount' => $row['BillingAccount'],
			'StartDate' => $row['StartDate']
		   );
  }

$jsonstring = json_encode($json);

mysql_close();

?>