<?php

include('db_connect.php');


$IUID= $_GET['IUID'];
$LastName = $_GET['LastName'];
$FirstName = $_GET['FirstName'];
$UserName = $_GET['UserName'];
$Role = $_GET['Role'];
$BillingLevel = $_GET['BillingLevel'];
$Active = $_GET['Active'];
$ConNotes = $_GET['ConNotes'];
#client search command with first last and username

$sql = "Insert into consultants 
(IUID, LastName, FirstName, UserName, Role, BillingLevel, Active, ConNotes)
VALUES
('$IUID', '$LastName', '$FirstName', '$UserName', '$Role', '$BillingLevel', '$Active', '$ConNotes')";

$result = mysql_query($sql);

mysql_close();

?>