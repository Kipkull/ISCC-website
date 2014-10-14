<?

include('db_connect.php');

$ProjID = $_GET['ProjID'];

$sql = "
select ISCCID, FirstName, LastName from clientproject where ProjID = '$ProjID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ISCCID' => $row['ISCCID'],
		    'FirstName' => $row['FirstName'],
			'LastName' => $row['LastName']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>