
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('db_connect.php');

$ID = $_GET['ISCCID'];



#$ID = "651";
#echo $ID;
$sql ="select * from clients where ISCCID = '$ID'";
#echo $sql;

$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$first = $row['FirstName'];
$last = $row['LastName'];
$username = $row['UserName'];
$campus = $row['Campus'];
$school = $row['SchoolCode'];
$department = $row['DeptDesc'];
$status = $row['Status'];
$rank = $row['Rank'];
$altemail = $row['AltEmail'];
$notes = $row['Notes'];




?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://iub.edu/~isccint/test/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div class="col-md-3">
  </div>
  <div class="col-md-7">
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ISCC</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Track Time</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Billing</a></li>
            <li><a href="#">Export Data</a></li>
            <li><a href="#">SQL admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>

    <div class="container">
      <table class="table table-bordered table-striped">
      <colgroup>
        <col class="col-xs-1">
        <col class="col-xs-7">
      </colgroup>
      <thead>
        <tr>
          <th colspan="2" scope="colgroup">
	    Client Name
	 </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <code>Last Name</code>
          </td>
          <td>
  <?echo $last?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>First Name</code>
          </td>
          <td>
  <?echo $first?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>IU Username</code>
          </td>
          <td>
  <?echo $username?>
	  </td>
        </tr>
        <tr>
          <td>
	    <code>campus</code>
          </td>
          <td>
  <?echo $campus?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>school</code>
          </td>
	  <td>
  <?echo $school?>
	  </td>
        </tr>
	 <tr>
          <td>
            <code>Department</code>
          </td>
          <td>
  <?echo $department?>
	  </td>
        </tr>
	  <tr>
          <td>
            <code>Status</code>
          </td>
          <td>
  <?echo $status?>
	  </td>
	  </tr>
	   <tr>
          <td>
            <code>Rank</code>
          </td>
          <td>
  <?echo $rank?>
	  </td>
	  </tr>
	    <tr>
          <td>
            <code>Alternate e-mail</code>
          </td>
          <td>
  <?echo $altemail?>
	  </td>
	  </tr>
	<tr>
          <td>
            <code>Notes</code>
          </td>
          <td>
  <?echo $notes?>
	  </td>
	  </tr>
      </tbody>
    </table>
    </table>        
<div class = "project" style = "text-align: center">
  <h3>projects</h3>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>Project Title</th>
          <th>Start Date</th>
          <th>Latest Date</th>
        </tr>
      </thead>
      <tbody id = "project_table">
    </table>
</div><!-- /.container -->
<input type = "hidden" value = <?echo $ID?>  id = "ISSID" >
<div class = "col-md-2">
</div>
<div class = "col-md-6">
<input type = "text" id = "keywords" style = "width: 80%" placeholder = "Input Keywords">
</div>
<div class = "col-md-2">
<input type = "button" class = "btn btn-primary" value= "search_project" id = "search_project">
</div> 
<br>
<br>
<br>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $(document.body).css('padding-top', $('#topnavbar').height() + 30);
        $(window).resize(function(){
            $(document.body).css('padding-top', $('#topnavbar').height() + 30);
        });
    });
</script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  

</body>
<script src = "https://iub.edu/~isccint/test/js/client_project.js">
</script>
<script>
	var button = document.getElementById("search_project");
	var key = document.getElementById("keywords").value;
	button.onclick = functoin(){search_project(key);};
	function search_project(key)
	{
		var client = document.getElementById("ISCCID").value;
		var url = "some php?ISCCID=" + client + "&key=" + key;
	
		window.location = url;
	}

</script>
</html>
