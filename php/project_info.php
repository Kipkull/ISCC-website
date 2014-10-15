<?php
include('db_connect.php');

$ProjID = $_GET['ProjID'];
$sql ="select * from projects where ProjID = '$ProjID' ";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$ProjectTitle = $row['ProjectTitle'];
$ProjectDesc = $row['ProjectDesc'];
$StartDate = $row['StartDate'];
$ProjectNotes = $row['ProjectNotes'];
$Supervisor = $row['Supervisor'];
$TypeP = $row['TypeP'];
$Status = $row['Status'];
$Bill = $row['ProjectBill'];
$BillingAccount = $row['BillingAccount'];
$Start = $row['StartDate'];



$client_search = "select * from clients where ISCCID in  ( select ISCCID from clientproject where ProjID = '$ProjID'   )";

$result = mysql_query($client_search);

 $json = array();
 while ($row = mysql_fetch_array($result))
   {
     $json[] = array(
		     'name' => $row['LastName'],
		     'ID' => $row['ISCCID'],
		     'username' => $row['UserName'],
		     'department' => $row['DeptCode']
		     );
  }


$jsonstring = json_encode($json);


$consultant_search = "select * from consultants where ConsID in( select ConsID from projectconsultant where ProjID = '$ProjID' )";

$result = mysql_query($consultant_search);

$json_consultant = array();

while ($row = mysql_fetch_array($result))
  {
    $json_consultant[] = array(
		    'name' => $row['LastName'],
		    'ID' => $row['ConsID'],
		    'username' => $row['UserName'],
                     'role' => $row['Role']
		    );
  }

$jsonstring_consultant = json_encode($json_consultant);



$task_search = "select * from tasks where ProjID = '$ProjID'" ;
$result = mysql_query($task_search);

$json_task = array();

while ($row = mysql_fetch_array($result))
  {
    $json_consultant[] = array(
		    'assigner' => $row['Assigner'],
		    'ID' => $row['Assignee'],
		    'username' => $row['Assisgnment'],
                     'status' => $row['Status']
		    );
  }

$jsonstring_task = json_encode($json_task);


$work_search = "select * from work where ProjID = '$ProjID' ";



$result = mysql_query($work_search);

$json_work = array();

while ($row = mysql_fetch_array($result))
  {
    $json_work[] = array(
				'id' => $row['WorkID'],
			       'date' => $row['Date'],
			       'type' => $row['Type'],
			       'hours' => $row['Hours'],
                     'billable' => $row['WorkBill'],
			'note' => $row['WorkNotes']
			       );
  }

$jsonstring_work = json_encode($json_work);
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
<input type = "hidden" value = <?echo $ProjID?> id = "projid" >
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
        	<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Track <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="https://iub.edu/~isccint/test/Client.html">Client</a></li>
                <li><a href="https://iub.edu/~isccint/test/Consultant.html">Consultant</a></li>
              </ul>
            </li>
            <li><a href="https://iub.edu/~isccint/home/Reports.php">Reports</a></li>
            <li><a href="https://iub.edu/~isccint/Work_Calendar.php">Calendar</a></li>
            <li><a href="https://iub.edu/~isccint/Invoicing.html">Billing</a></li>
            <li><a href="https://iub.edu/~isccint/Export.htm">Export Data</a></li>
            <li><a href="https://www.iub.edu/~isccint/phpmyadmin/">SQL admin</a></li>  
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
	    Project Information
	 </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <code>Title</code>
          </td>
          <td>
	    <?echo $ProjectTitle?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>Description</code>
          </td>
          <td>
            <?echo $ProjectDesc?>
	  </td>
        </tr>
        <tr>
          <td>
            <code>Notes</code>
          </td>
          <td>
            <?echo $ProjectNotes?>
	  </td>
        </tr>
      </tbody>
    </table>
    </table>        
<div class = "clients" style = "text-align: center">
  <h3>Clients</h3>
</div>
<div id = "client_string">
  <? echo $jsonstring ?>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Username</th>
	  <th>Department</th>
        </tr>
      </thead>
      <tbody id = "client_table">
        <tr>
          <td>
	    1
	  </td>
          <td>
	     <a href="">
              <div class = "client_name" >
		123
              </div>
	  </td>
          <td>
	    456
	  </td>
	  <td>
            456
          </td>
        </tr>
        <tr>
	   <td>
            2
          </td>
          <td>
             <a href="">
              <div class = "client_name" >
                123
              </div>
          </td>
          <td>
            456
          </td>
          <td>
            456
          </td>
        </tr>
      </tbody>
    </table>
<div id = "consultant_string">
  <?echo $jsonstring_consultant?>
</div>

<input type = "hidden" id = "consultant_string1" value = <? echo $jsonstring_consultant?>  >
<div class = "consultants" style = "text-align: center">
  <h3>Consultants</h3>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Username</th>
	  <th>Role</th>
        </tr>
      </thead>
      <tbody id = "consultant_table">
        <tr>
          <td>
	    1
	  </td>
          <td>
	     <a href="">
              <div class = "consultant_name" >
		123
              </div>
	  </td>
          <td>
	    456
	  </td>
	  <td>
            456
          </td>
        </tr>
        <tr>
	   <td>
            2
          </td>
          <td>
             <a href="">
              <div class = "consultant_name" >
                123
              </div>
          </td>
          <td>
            456
          </td>
          <td>
            456
          </td>
        </tr>
      </tbody>
    </table>


<div class = "Tasks" style = "text-align: center">
  <h3>Tasks</h3>
</div>

<div id = "task_string" >
  <?echo $jsonstring_task ?>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Assigner</th>
          <th>Assignee</th>
	  <th>Assignment</th>
        </tr>
      </thead>
      <tbody id = "task_table">

        <tr id = "task_add">
  <td>
  </td>
  <td>
  <input type = "text" id = "Assigner">
  </td>
  <td>
  <input type = "text" id = "Assignee">
  </td>
  <td>
  <input type = "text" id = "Assignment" style = "width : 100%">
  </td>
        <tr>

      </tbody>
    </table>
<input id = "add_task" type = "button" class = "btn btn-primary" value = "Add Task"  > 
 
<div id = "work_string">
  <?echo $jsonstring_work?>
</div>
<div class = "Work" style = "text-align: center">
  <h3>Work</h3>
</div>
<table class="table table-striped" >
      <thead>
        <tr>
	  <th></th>
          <th>Date</th>
          <th>Type</th>
	  <th>Hours</th>
  <th>Billable</th>
        </tr>
      </thead>
      <tbody id = "work_table">
        <tr id = "work_add">
       <td>
       </td>
       <td>
       <input type = "text" id = "Date">
       </td>
       <td>
       <input type = "text" id = "Type">
       </td>
  <td>
  <input type = "text" id = "Hours" style = "width : 100%">
  </td>
  <td>
  <select class = "form-control" id = "Billable">
  <option>yes</option>
  <option>no</option>
  </select>
  </td>
  </tr>
  <tr id = "work_note_add">
  <th>
  </th>
  <th colspan="4">Note</td>
  </tr>
  <tr id = "work_note_content">
  <td></td>
  <td colspan = "4">
  <input type = "text" style = "width : 100%" id = "add_note">
  </td>
 
  </tr>
      </tbody>
  </td>

  </table>



  </table>
<input id = "add_work" type = "button" class = "btn btn-primary" value = "Add work"  >



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
    <script src="https://iub.edu/~isccint/test/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="https://iub.edu/~isccint/test/js/client_in_project_info.js"></script>
  <script src="https://iub.edu/~isccint/test/js/get_consultant.js"></script>
  <script src="https://iub.edu/~isccint/test/js/get_tasks.js"></script>
   <script src="https://iub.edu/~isccint/test/js/get_works.js"></script>

  <script src="https://iub.edu/~isccint/test/js/add_task.js"></script>
<script src="https://iub.edu/~isccint/test/js/add_work.js"></script>



</body>
</html>
