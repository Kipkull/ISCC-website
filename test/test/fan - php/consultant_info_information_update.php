<?

include('db_connect.php');

$ConsID = $_GET['ConsID'];

$LastName = $_GET['LastName'];
$FirstName = $_GET['FirstName'];
$UserName = $_GET['UserName'];
$Role = $_GET['Role'];
$BillingLevel = $_GET['BillingLevel'];
$Active = $_GET['Active'];
$ConNotes = $_GET['ConNotes'];

$sql1 = "
update consultants set
	LastName = '$LastName',
	FirstName = '$FirstName',
	UserName = '$UserName',
	Role = '$Role',
	BillingLevel = '$BillingLevel',
	Active = '$Active',
	ConNotes = '$ConNotes'
where ConsID = '$ConsID'
";

$sql2 = "
update projectconsultant set
	LastName = '$LastName',
	FirstName = '$FirstName'
where ISCCID = '$ConsID'
"

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);

mysql_close();

?>

