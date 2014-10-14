<?php

include('db_connect.php');
echo 1;

$ISCCID = $_GET['ISCCID'];
$FirstName = $_GET['FirstName'];
$LastName = $_GET['LastName'];
$ProjectTitle = $_GET['ProjectTitle'];
$ProjectDesc = $_GET['ProjectDesc'];
$ProjectNotes = $_GET['ProjectNotes'];
$ProjectBill = $_GET['ProjectBill'];
$Supervisor = $_GET['Supervisor'];
$TypeP = $_GET['TypeP'];
$Status = $_GET['Status'];
$BillingAccount = $_GET['BillingAccount'];
$StartDate = $_GET['StartDate'];


$sql1 = "Insert into projects 
(ProjectTitle, ProjectDesc, ProjectNotes, ProjectBill, Supervisor, TypeP, 
	Status, BillingAccount, StartDate)
VALUES
('$ProjectTitle', '$ProjectDesc', '$ProjectNotes', '$ProjectBill', '$Supervisor', '$TypeP', 
	'$Status', '$BillingAccount', '$StartDate')";

$sql2 = "Insert into clientproject Select '$ISCCID', ProjID, '$LastName', '$FirstName', '$ProjectTitle' 
from projects where ProjectTitle = '$ProjectTitle' and ProjectDesc = '$ProjectDesc' and ProjectNotes = '$ProjectNotes'
and ProjectBill = '$ProjectBill' and Supervisor = '$Supervisor' and TypeP = '$TypeP' 
and Status = '$Status' and BillingAccount = '$BillingAccount' and StartDate = '$StartDate'
";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);

mysql_close();

?>