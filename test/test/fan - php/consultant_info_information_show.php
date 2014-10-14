<?

include('db_connect.php');

#$DAY = $_POST['calendar']; # Not useful, change to Date!!!
$ConsID = $_GET['ConsID'];

$sql = "
select * from consultants where ConsID = '$ConsID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ConsID' => $row['ConsID'],
		   	'IUID' => $row['IUID'],
			'LastName' => $row['LastName'],
			'FirstName' => $row['FirstName'],
			'UserName' => $row['UserName'],
			'Role' => $row['Role'],
			'BillingLevel' => $row['BillingLevel'],
			'Active' => $row['Active'],
			'ConNotes' => $row['ConNotes'],
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>