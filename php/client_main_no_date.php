<?

include('db_connect.php');


#client search command with inputted date 
$sql = "
select cp.ISCCID as ISCCID, cp.FirstName AS FirstName, cp.LastName as LastName, cp.ProjectTitle as ProjectTitle, wk.Date as Date from  
(select ProjID, max(Date) as Date from `work` group by ProjID) as wk 
join 
`clientproject` as cp 
on wk.ProjID = cp.ProjID  
order by wk.Date Desc 
";
$result = mysql_query($sql);
$json = array();

while($row = mysql_fetch_array($result))     
  {
 
    $json[]= array(
		   'ISCCID' => $row['ISCCID'],
		   'FirstName' => $row['FirstName'],
		   'LastName'=> $row['LastName'],
    	   'ProjectTitle' => $row['ProjectTitle'],
		   'LatestDate' => $row['Date'] 
		   );
  }

$jsonstring = json_encode($json);

echo $jsonstring;

mysql_close();

?>
