
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('db_connect.php');

$ID = $_GET['ConsID'];



#$ID = "651";
#echo $ID;
$sql ="select * from consultants where ConsID = '$ID'";
#echo $sql;

$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$first = $row['FirstName'];
$last = $row['LastName'];
$username = $row['UserName'];
$Role = $row['Role'];
$Billing = $row['BillingLevel'];
$active = $row['Active'];
$note = $row['ConNotes'];




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
<input type = "hidden" value = "<?echo $ID?>" id = "ConsID">
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
	    Consultant Name
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
            <code>Username</code>
          </td>
          <td>
  <?echo $username?>
	  </td>
        </tr>
        <tr>
          <td>
	    <code>Role</code>
          </td>
          <td>
  <?echo $Role?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>Active</code>
          </td>
	  <td>
  <?echo $active?>
	  </td>
        </tr>
	 <tr>
          <td>
            <code>ConNotes</code>
          </td>
          <td>
  <?echo $notet?>
	  </td>
        </tr>
      </tbody>
    </table>
    </table>        
<div class = "project" style = "text-align: center">
  <h3>Projects and Titles</h3>
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
      </tbody>
    </table>
<input type = "hidden" value = <?echo $ID?>  id = "ConsID">

<input id = "filter" type = "button" value = "Filter" >                 
  <input type = "text" id = "start" style = "width:5%">     
hours to                                 
<input type = "text" id = "end" style = "width : 5%">   
hours

<div class =  style = "text-align: center">
<h3>Tasks on going</h3>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>Tasks</th>
  
        </tr>
      </thead>
      <tbody id = "project_table">

        </tr>
      </tbody>
    </table>

</div><!-- /.container -->

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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
 <script src="https://iub.edu/~isccint/test/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>  

</body>
<script src = "https://iub.edu/~isccint/test/js/consultant_project.js">
</script>
</html>
