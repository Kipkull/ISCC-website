<?

include('db_connect.php');

$ProjID = $_GET['ProjID'];

$sql = "
select * from tasks where ProjID = '$ProjID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ConsID' => $row['ConsID'],
			'Assigner' => $row['Assigner'],
			'Assignee' => $row['Assignee'],
			'Assignment' => $row['Assignment'],
			'DueDate' => $row['DueDate'],
			'Status' => $row['Status'],
			'Priority' => $row['Priority'],
			'StartDate' => $row['StartDate']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>