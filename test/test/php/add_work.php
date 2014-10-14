<?
include('db_connect.php');

$ID = $_POST['ProjID'];
$date = $_POST['date'];
$type = $_POST['type'];
$hours = $_POST['hours'];
$note = $_POST['note'];
$bill = $_POST['billable'];


#insert into work_table




$sql = "select * from work where ProjID = '$ID'   ";

$result  = mysql_query($sql);





$length =  mysql_fetch_lengths($result);

$json = array();


while ($row =  mysql_fetch_array ($result))
  {
    $json[] = array (
		     'WorkID' => $row['WorkID']

		     );
      
  }



echo json_encode($json);
?>
