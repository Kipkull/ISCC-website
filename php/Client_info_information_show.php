<?

include('db_connect.php');

#$DAY = $_POST['calendar']; # Not useful, change to Date!!!
$ISCCID = $_GET['ISCCID'];

$sql = "
select * from clients where ISCCID = '$ISCCID'
";

$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		    'ISCCID' => $row['ISCCID'],
		   	'LastName' => $row['LastName'],
			'FirstName' => $row['FirstName'],
			'UserName' => $row['UserNamev'],
			'AltEmail' => $row['AltEmail'],
			'Status' => $row['Status'],
			'Rank' => $row['Rank'],
			'Notes' => $row['Notes'], 
			'TypeC' => $row['TypeC'],
			'ExternalCompany' => $row['ExternalCompany'],
			'ContactAddress' => $row['ContactAddress'], 
			'ContactPhone' => $row['ContactPhone'], 
			'FOName' => $row['FOName'], 
			'FOContact' => $row['FOContact'], 
			'Archived' => $row['Archived'], 
			'IUID' => $row['IUID'], 
			'CreateDate' => $row['CreateDate'], 
			'DeptCode' => $row['DeptCode'], 
			'SchoolCode' => $row['SchoolCode'], 
			'DeptDesc' => $row['DeptDesc'], 
			'SchoolDesc' => $row['SchoolDesc'], 
			'FieldGroup' => $row['FieldGroup'], 
			'Campus' => $row['Campus']
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>