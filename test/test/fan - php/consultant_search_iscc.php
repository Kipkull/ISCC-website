<?php

include('db_connect.php');

$first= $_GET['first_name'];
$last = $_GET['last_name'];

if ($first == NULL) {
	$first = '.*';
}

if ($last == NULL) {
        $last = '.*';
}

#client search command with first last and username

$sql = "select distinct ConsID, IUID, FirstName, LastName, Role, Active from consultants where LastName rlike '$last' and FirstName rlike '$first'";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		   'ConsID' => $row['ConsID'],
		   'IUID' => $row['IUID'],
		   'FirstName' => $row['FirstName'],
		   'LastName' => $row['LastName'],
		   'Role' => $row['Role'],
		   'Active' => $row['Active']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>