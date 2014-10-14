<?php
$Fname = '1';
$Lname = '2';
?>
<html>
<head>
<title>Personal INFO</title>
</head>
<body>
<form method="post" action="<?php echo $PHP_SELF;?>">
  First Name:<input type="text" size="12" maxlength="12" name="Fname"><br />
  Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br /></form>
<?
  echo "Hello, ".$Fname." ".$Lname.".<br />";
?>