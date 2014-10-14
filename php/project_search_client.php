<?php

include('db_connect.php');
echo 1;

$ISCCID = $_GET['ISCCID'];

$keyword= $_GET['keyword'];

echo 3;
if ($keyword == NULL) {
	$keyword = '.*';
}

#client search command with first last and username

$sql1 = "select * from clientproject where ISCCID = '$ISCCID' and ProjectTitle rlike '$keyword' ";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
    $json[]= array(
		   'ISCCID' => $row['ISCCID'],
		   'FirstName' => $row['FirstName'],
		   'LastName' => $row['LastName'],
		   'ProjID' => $row['ProjID'],
		   'ProjectTitle' => $row['ProjectTitle']
		   );
  }

$jsonstring = json_encode($json);
$jsonstrong = '1';
mysql_close();

?>