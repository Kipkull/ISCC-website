<?

include('db_connect.php');

$ID = $_POST['ProjID'];
$Assigner = $_POST['Assigner'];
$Assignee = $_POST['Assignee'];
$Assignment = $_POST['Assignment'];
$ID = 847;

#insert into table

#$sql = "INSERT INTO tasks VALUES ('$Assigner' , '$Assignee', '$Assignment' ) ";
#$result  = mysql_query($sql);






#put it into database (sql query)

$sql = "select * from tasks where ProjID = '$ID'   ";

$result  = mysql_query($sql);
$length =  mysql_fetch_lengths($result);

$json = array();


while ($row =  mysql_fetch_array ($result))
  {
    $json[] = array (
		     'Status' => $row['Status']
		     );
      
  }



echo json_encode($json);
?>