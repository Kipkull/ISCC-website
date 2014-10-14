<?

include('db_connect.php');

#$DAY = $_POST['calendar']; # Not useful, change to Date!!!
$ISCCID = $_GET['ISCCID'];

$sql = "
select ProjID, ProjectTitle from clientproject where ISCCID = '$ISCCID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ProjID' => $row['ProjID'],
		    'ProjectTitle' => $row['ProjectTitle']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>