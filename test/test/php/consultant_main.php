<?

include('db_connect.php');

$DAY = $_POST['calendar']; # Not useful, change to Date!!!

if ($DAT == NULL) {
        $DAY = date('Y-m-d');
	$PDAY = date('Y-m-d', strtotime('- 4 month'));
} else {
	$PDAT = date('Y-m-d', strtotime('-4 month', $DAY);
}
;
#client search command with inputted date 
$sql = "
SELECT wk.ConsID, cs.FirstName, cs.LastName, cs.Role, wk.date
FROM (

SELECT ConsID, MAX( DATE ) AS DATE
FROM  `work` 
WHERE Date between $PDAT and $DAY
GROUP BY ConsID
) AS wk
JOIN consultants AS cs ON wk.ConsID = cs.ConsID
ORDER BY wk.date DESC ";
$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		   'wk.ConsID' => $row['ConsID'],
		   'cs.FirstName' => $row['FirstName'],
		   'cs.LastName'=> $row['LastName'],
    		   'cs.Role' => $row['Role'],
		   'wk.Date' => $row['Latest Date'] 
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
