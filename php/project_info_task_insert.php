<?php

include('db_connect.php');
echo 1;

$ProjID = $_GET['ProjID'];
$Assigner = $_GET['Assigner'];
$Assignee = $_GET['Assignee'];
$Assignment = $_GET['Assignment'];
$DueDate = $_GET['DueDate'];
$Status = $_GET['Status'];
$Priority = $_GET['Priority'];
$StartDate = $_GET['StartDate'];



$sql = "Insert into tasks
(ProjID, Assigner, Assignee, Assignment, DueDate, Status, Priority, StartDate
	 )VALUES
($ProjID, $Assigner, $Assignee, $Assignment, $DueDate, $Status, $Priority, $StartDate)";

$result = mysql_query($sql);


mysql_close();

?>