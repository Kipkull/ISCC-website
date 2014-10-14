<?
#db_connect.php                                                                                                                    

#username and password for DB access                                                                                               
$username="iscc";
$password="cjrq58hf";
$database="webtest";

#Open connection to the DB. Report an error if DB isn't found                                                                      
$link=mysql_connect("mysql.iu.edu:3394",$username,$password) or die("You have entered an incorrect username or password");
@mysql_select_db($database) or die( "Unable to select database");


?>

