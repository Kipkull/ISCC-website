<?

include('db_connect.php');

$DAY = $_POST['calendar']; # Not useful, change to Date!!!

if ($DAT == NULL) {
        $DAY = date('Y-m-d');
	$PDAY = date('Y-m-d', strtotime('- 1 month'));
} else {
	$DAT == date('Y-m-d', strtotime($DAY);
	$PDAT = date('Y-m-d', strtotime('-1 month', $DAY);
}
;
#client search command with inputted date 
$sql = "
select cp.ISCCID, cp.FirstName, cp.LastName, cp.ProjectTitle, wk.Date from \ 
(select ProjID, max(Date) as Date from `work` where Date between $PDAY and $DAY group by ProjID) as wk \
join \
`clientproject` as cp \
on wk.ProjID = cp.ProjID \ 
order by wk.Date Desc \
";
$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		   'cp.ISCCID' => $row['ISCCID'],
		   'cp.FirstName' => $row['FirstName'],
		   'cp.LastName'=> $row['LastName'],
    	   'cp.ProjectTitle' => $row['ProjectTitle'],
		   'wk.Date' => $row['Latest Date'] 
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
