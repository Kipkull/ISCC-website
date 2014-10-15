<?php

include('db_connect.php');


$ISCCID = $_POST['ISCCID'];

$ProjID = $_POST['ProjID'];
$ProjectTitle = $_GET['ProjectTitle'];


$sql = "Insert into clientproject (ISCCID, ProjID, LastName, FirstName, ProjectTitle)
VALUES
(select ISCCID, '$ProjID', LastName, FirstName, '$ProjectTitle' from clients where ISCCID = '$ISCCID')
";

$result = mysql_query($sql);


mysql_close();

?>
