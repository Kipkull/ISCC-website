<?

include('db_connect.php');

$ProjID = $_GET['ProjID'];

$sql = "
select * from work where ProjID = '$ProjID'
";


$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
			'Date' => $row['Date'],
			'Type' => $row['Type'],
			'Hours' => $row['Hours'], 
			'WorkBill' => $row['WorkBill'], 
			'WorkNotes' => $row['WorkNotes'], 
			'ConsID' => $row['ConsID'],
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>