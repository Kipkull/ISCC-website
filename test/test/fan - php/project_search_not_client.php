<?php

include('db_connect.php');

$ISCCID = $_GET['ISCCID'];

$keyword= $_GET['keyword'];

if ($keyword == NULL) {
	$keyword = '.*';
}

#client search command with first last and username

$sql1 = "select nc.ProjID as ProjID, nc.ISCCID AS ISCC, nc.LastName as LastName, 
nc.FirstName as FirstName, nc.ProjectTitle as ProjectTitle 
from
(select cp.ISCCID AS ISCCID, pj.ProjID as ProjID, cp.LastName as LastName, 
cp.FirstName as FirstName, pj.ProjectTitle as ProjectTitle from projects as pj left join clientproject as cp on pj.ProjID = cp.ProjID and cp.ISCCID <> '$ISCCID' where pj.ProjectTitle rlike '$keyword') as nc 
left join 
(select ISCCID, ProjID from clientproject where ISCCID = '$ISCCID') as ic  
on nc.ProjID = ic.ProjID 
where ic.ISCCID is Null
group by ProjID
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