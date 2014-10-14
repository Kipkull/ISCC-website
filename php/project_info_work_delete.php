<?

include('db_connect.php');

$WorkID = $_GET['WorkID'];

$sql = "
Delete from tasks where WorkID = '$WorkID'
";

$result = mysql_query($sql);

mysql_close();

?>