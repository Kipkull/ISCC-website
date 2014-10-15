<?

include('db_connect.php');

#$DAY = $_POST['calendar']; # Not useful, change to Date!!!
$ISCCID = $_POST['ISCCID'];
$sql = "select * from projects where ProjID in(
select ProjID  from clientproject where ISCCID = '$ISCCID'
)";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ProjID' => $row['ProjID'],
		    'ProjectTitle' => $row['ProjectTitle'],
		'StartDate' => $row['StartDate']		  
	 );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
