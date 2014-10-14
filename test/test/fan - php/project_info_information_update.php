<?php

include('db_connect.php');
echo 1;

$ProjectTitle = $_GET['ProjectTitle'];
$ProjectDesc = $_GET['ProjectDesc'];
$ProjectNotes = $_GET['ProjectNotes'];
$ProjectBill = $_GET['ProjectBill'];
$Supervisor = $_GET['Supervisor'];
$TypeP = $_GET['TypeP'];
$Status = $_GET['Status'];
$BillingAccount = $_GET['BillingAccount'];
$StartDate = $_GET['StartDate'];

$sql1 = "
update projects set 
	ProjectTitle = '$ProjectTitle', 
	ProjectDesc = '$ProjectDesc', 
	ProjectNotes = '$ProjectNotes', 
	ProjectBill = '$ProjectBill', 
	Supervisor = '$Supervisor', 
	TypeP = '$TypeP', 
	Status = '$Status', 
	BillingAccount = '$BillingAccount', 
	StartDate = '$StartDate'
where ProjID = '$ProjID'
";

$sql2 = "
update projectconsultant set 
	ProjectTitle = '$ProjectTitle'
where ProjID = '$ProjID'
";

$sql3 = "
update clientproject set 
	ProjectTitle = '$ProjectTitle'
where ProjID = '$ProjID'
";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql3);

mysql_close();

?>

