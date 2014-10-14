<?

include('db_connect.php');


$TaskID = $_GET['TaskID'];

$sql = "
Delete from tasks where TaskID = '$TaskID'
";

$result = mysql_query($sql);

mysql_close();

?>