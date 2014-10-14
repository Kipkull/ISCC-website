<?

include('db_connect.php');

$TaskID = $_GET['TaskID'];

$sql = "
update tasks set
	Assigner = '$Assigner',
	Assignee = '$Assignee',
	Assignment = '$Assignment',
	DueDate = '$DueDate',
	Status = '$Status',
	Priority = '$Priority',
	StartDate = '$StartDate',
	where TaskID = '$TaskID'
";

$result = mysql_query($sql);

mysql_close();

?>