<?php

include('db_connect.php');

$ISCCID = $_GET['ISCCID'];

$keyword= $_GET['keyword'];

if ($keyword == NULL) {
	$keyword = '.*';
}

#client search command with first last and username

$sql1 = "select nc.ISCCID AS ISCC, nc.ProjID as ProjID, nc.LastName as LastName, 
nc.FirstName as FirstName, nc.ProjectTitle as ProjectTitle 
from
(select ProjID, ProjectTitle, ISCCID, FirstName, LastName 
	from clientproject where ISCCID <> '$ISCCID' and ProjectTitle rlike '$keyword' 
	group by ProjID) as nc 
left join 
(select ISCCID, ProjID from clientproject where ISCCID = '$ISCCID') as ic  
on nc.ProjID = ic.ProjID 
where ic.ISCCID is Null
";

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