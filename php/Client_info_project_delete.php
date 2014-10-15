<?

include('db_connect.php');

$ProjID = $_GET['ProjID'];
$ISCCID = $_GET['ISCCID'];

$sql = "
Delete from clientproject where ISCCID = '$ISCCID' and ProjID = '$ProjID'
";

$result = mysql_query($sql);

mysql_close();

?>
