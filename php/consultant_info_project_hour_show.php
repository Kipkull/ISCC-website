<?

include('db_connect.php');

$ConsID = $_POST['ConsID'];
$PDAY = $_POST['calendar_from'];
$DAY = $_POST['calendar_to'];
#$DAY = '10/14/2014';
#$PDAY = '01/01/2014';

if ($DAY == NULL) {
    $DAY = date('Y-m-d');
}else {
	$DAY = date('Y-m-d', strtotime($DAY));
}

if ($PDAY == NULL) {
	$PDAY = date('Y-m-d', strtotime('1970-01-01'));
}else {
	$PDAY = date('Y-m-d', strtotime($PDAY));
}
#echo $DAY;
#echo $PDAY;

$sql = "
select wk.ProjID as ProjID, pj.ProjectTitle as ProjectTitle, wk.WorkBill as WorkBill, wk.THours as THours from
(select ProjID, WorkBill, sum(Hours) as THours from work where Date between '$PDAY' and '$DAY' 
	and ConsID = '$ConsID' group by ProjID, WorkBill) as wk join
	(select ProjID, ProjectTitle from projectconsultant where ConsID = '$ConsID') as pj
	on wk.ProjID = pj.ProjID
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ProjID' => $row['ProjID'],
		    'ProjectTitle' => $row['ProjectTitle'],
		    'WorkBill' => $row['WorkBill'],
		    'THours' => $row['THours']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
