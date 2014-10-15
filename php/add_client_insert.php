<?php

include('db_connect.php');

#create system date
$CreateDate = date('Y-m-d');

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
$DeptCode = $_GET['DeptCode'];
$SchoolCode = $_GET['SchoolCode'];
$DeptDesc = $_GET['DeptDesc'];
$SchoolDesc = $_GET['SchoolDesc'];
$FieldGroup = $_GET['FieldGroup'];
$Campus = $_GET['Campus'];
#client search command with first last and username

$sql = "Insert into clients 
(LastName, FirstName, UserName, AltEmail, Status, Rank, Notes, TypeC, ExternalCompany, ContactAddress, 
	ContactPhone, FOName, FOContact, Archived, IUID, CreateDate, DeptCode, SchoolCode, DeptDesc, SchoolDesc, 
	FieldGroup, Campus)
	VALUES
	('$LastName', '$FirstName', '$UserName', '$AltEmail', '$Status', '$Rank', '$Notes', '$TypeC', '$ExternalCompany', 
		'$ContactAddress', '$ContactPhone', '$FOName', '$FOContact', '$Archived', '$IUID', '$CreateDate', '$DeptCode', 
		'$SchoolCode', '$DeptDesc', '$SchoolDesc', '$FieldGroup', '$Campus') ";

$result = mysql_query($sql);

mysql_close();

?>
