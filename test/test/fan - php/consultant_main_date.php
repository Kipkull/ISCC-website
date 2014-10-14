<?

include('db_connect.php');

$DAY = $_POST['calendar']; # Not useful, change to Date!!!

if ($DAY == NULL) {
    $DAY = date('Y-m-d');
	$PDAY = date('Y-m-d', strtotime('-4 month'));
} else {
	$DAY = date('Y-m-d', strtotime($DAY));
	$PDAY = strtotime('-4 month', strtotime($DAY));
	$PDAY = date('Y-m-d', $PDAY);
}
#client search command with inputted date 
$sql = "
SELECT wk.ConsID as ConsID, cs.FirstName as FirstName, cs.LastName as LastName, cs.Role as Role, wk.Date as Date
FROM (
SELECT ConsID, MAX( Date) AS Date
FROM  `work` 
WHERE Date between '$PDAT' and '$DAY'
GROUP BY ConsID
) AS wk
JOIN consultants AS cs ON wk.ConsID = cs.ConsID
ORDER BY wk.date DESC ";

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
