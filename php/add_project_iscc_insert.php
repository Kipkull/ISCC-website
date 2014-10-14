<?php

include('db_connect.php');
echo 1;

$ISCCID = $_GET['ISCCID'];
$FirstName = $_GET['FirstName'];
$LastName = $_GET['LastName'];
$ProjID = $_GET['ProjID'];
$ProjectTitle = $_GET['ProjectTitle'];


$sql = "Insert into clientproject (ISCCID, ProjID, LastName, FirstName, ProjectTitle)
VALUES
('$ISCCID', '$ProjID', '$LastName', '$FirstName', '$ProjectTitle' )
";

$result = mysql_query($sql);


mysql_close();

?>