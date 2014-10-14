<?php

include('db_connect.php');

$first= $_POST['first_name'];
$last = $_POST['last_name'];
$username = $_POST['username']; # Not useful, change to Date!!!

if ($first == NULL) {
	$first = '.*';
};
if ($last == NULL) {
        $last = '.*';
};
if ($DAT == NULL) {
        $DAY = date('Y-m-d');
	$PDAY = date('Y-m-d', strtotime('- 1 month'));
} else {
	$PDAT = date('Y-m-d', strtotime('-1 month', $DAY);
}
;
#client search command with first last and username
$sql = "select cp.ISCCID, cp.FirstName, cp.LastName, cp.ProjectTitle, wk.Date from \
(select ProjID, Date from `work` where Date between $PDAY and $DAY) as wk \
join \
`clientproject` as cp \
on wk.ProjID = cp.ProjID \
order by wk.Date Desc ";
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
