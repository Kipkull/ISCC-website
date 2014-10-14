<?

include('db_connect.php');

#$DAY = $_POST['calendar']; # Not useful, change to Date!!!
$ConsID = $_GET['ConsID'];

$sql = "
SELECT tk.TaskID AS TaskID, tk.ProjID AS ProjID, pc.ProjectTitle AS ProjectTitle, tk.Status AS 
Status , tk.Priority AS Priority, tk.DueDate AS DueDate
FROM (
SELECT TaskID, ProjID, 
Status , Priority, DueDate, Assignee
FROM tasks
WHERE Assignee = '$ConsID'
) AS tk
JOIN (
SELECT ProjID, ConsID, ProjectTitle
FROM projectconsultant
WHERE ConsID = '$ConsID'
) AS pc ON tk.ProjID = pc.ProjID
AND tk.Assignee = pc.ConsID
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'TaskID' => $row['ConsID'],
		   	'ProjID' => $row['ProjID'],
			'ProjectTitle' => $row['ProjectTitle'],
			'Status' => $row['Status'],
			'Priority' => $row['Priority'],
			'DueDate' => $row['DueDate'],
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>