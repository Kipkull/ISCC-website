<?

include('db_connect.php');

$ProjID = $_GET['ProjID'];

$sql = "
select ConsID, FirstName, LastName from projectconsultant where ProjID = '$ProjID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ConsID' => $row['ConsID'],
		    'FirstName' => $row['FirstName'],
			'LastName' => $row['LastName']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>