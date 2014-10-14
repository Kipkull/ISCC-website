<?php

include('db_connect.php');


$ProjID = $_GET['ProjID'];
$ProjectTitle = $_GET['ProjectTitle'];
$Date = $_GET['Date'];
$Type = $_GET['Type'];
$Hours = $_GET['Hours']; 
$WorkBill = $_GET['WorkBill']; 
$WorkNotes = $_GET['WorkNotes']; 
$ConsID = $_GET['ConsID'];



$sql1 = "Insert into work
(ProjID, Date, Type, Hours, WorkBill, WorkNotes, ConsID)
VALUES
('$ProjID', '$Date', '$Type', '$Hours', '$WorkBill', '$WorkNotes', '$ConsID')
";

$sql2 = "Insert into projectconsultant (select '$ProjID', '$ConsID', LastName, FirstName, ProjectTitle from consultants, projects
where ConsID = '$ConsID' and ProjID = '$ProjID' and not exists (select * from projectconsultant 
	where ProjID = '$ProjID' and ConsID = '$ConsID'))";

$sql3 = "Insert into tasks (ProjID, Assignee) select '$ProjID', '$ConsID' from dual
where not exists ( select ProjID, Assignee from tasks where ProjID = '$ProjID' and Assignee = '$ConsID') ";

$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql3);

mysql_close();

?>