<?php

include('db_connect.php');


$ISCCID = $_GET['ISCCID'];
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

$sql2 = "Insert into clientproject Select cl.ISCCID, pj.ProjID, cl.LastName, cl.FirstName, pj.ProjectTitle 
from projects as pj, clients as cl where pj.ProjectTitle = '$ProjectTitle' and pj.ProjectDesc = '$ProjectDesc' and pj.ProjectNotes = '$ProjectNotes'
and pj.ProjectBill = '$ProjectBill' and pj.Supervisor = '$Supervisor' and pj.TypeP = '$TypeP' 
and pj.Status = '$Status' and pj.BillingAccount = '$BillingAccount' and pj.StartDate = '$StartDate' and cl.ISCCID = '$ISCCID'
";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);

mysql_close();

?>