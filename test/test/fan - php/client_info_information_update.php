<?

include('db_connect.php');

$ISCCID = $_GET['ISCCID'];
$LastName = $_GET['LastName'];
$FirstName = $_GET['FirstName'];
$UserName = $_GET['UserName'];
$AltEmail = $_GET['AltEmail'];
$Status = $_GET['Status'];
$Rank = $_GET['Rank'];
$Notes = $_GET['Notes'];
$TypeC = $_GET['TypeC'];
$ExternalCompany = $_GET['ExternalCompany'];
$ContactAddress = $_GET['ContactAddress'];
$ContactPhone = $_GET['ontactPhone'];
$FOName = $_GET['FOName'];
$FOContact = $_GET['FOContact'];
$Archived = $_GET['Archived'];
$IUID= $_GET['IUID'];
$CreateDate = $_GET['CreateDate'];
$DeptCode = $_GET['DeptCode'];
$SchoolCode = $_GET['SchoolCode'];
$DeptDesc = $_GET['DeptDesc'];
$SchoolDesc = $_GET['SchoolDesc'];
$FieldGroup = $_GET['FieldGroup'];
$Campus = $_GET['Campus'];

$sql1 = "
update clients set
	LastName = '$LastName',
	FirstName = '$FirstName',
	UserName = '$UserName',
	AltEmail = '$AltEmail',
	Status = '$Status',
	Rank = '$Rank',
	Notes = '$Notes', 
	TypeC = '$TypeC',
	ExternalCompany = '$ExternalCompany',
	ContactAddress = '$ContactAddress', 
	ContactPhone = '$ContactPhone', 
	FOName = '$FOName', 
	FOContact = '$FOContact', 
	Archived = '$Archived', 
	IUID = '$IUID', 
	CreateDate = '$CreateDate', 
	DeptCode = '$DeptCode', 
	SchoolCode = '$SchoolCode', 
	DeptDesc = '$DeptDesc', 
	SchoolDesc = '$SchoolDesc', 
	FieldGroup = '$FieldGroup', 
	Campus = '$Campus'
where ISCCID = '$ISCCID'
";

$sql2 = "
update clientproject set
	LastName = '$LastName',
	FirstName = '$FirstName'
where ISCCID = '$ISCCID'
";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);

mysql_close();

?>

