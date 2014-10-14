<?

include('db_connect.php');

#client search command with inputted date 
$sql = "
SELECT wk.ConsID as ConsID, cs.FirstName as FirstName, cs.LastName as LastName, cs.Role as Role, wk.Date as Date
FROM (
SELECT ConsID, MAX(Date) AS Date
FROM  `work` 
GROUP BY ConsID
) AS wk
JOIN consultants AS cs ON wk.ConsID = cs.ConsID
ORDER BY wk.Date DESC ";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		   'ConsID' => $row['ConsID'],
		   'FirstName' => $row['FirstName'],
		   'LastName'=> $row['LastName'],
    	   'Role' => $row['Role'],
		   'LatestDate' => $row['Date'] 
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
