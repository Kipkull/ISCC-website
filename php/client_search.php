<?php

include('db_connect.php');
$first= $_GET['firstname'];
$last = $_GET['lastname'];

if ($first == NULL) {
	$first = '.*';
}

if ($last == NULL) {
        $last = '.*';
}

mysql_close();

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>      <!-- Bootstrap core CSS -->
    <link href="https://iub.edu/~isccint/test/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href = "https://iub.edu/~isccint/test/jquery-ui-1.11.1/jquery-ui.css" >

<script src = "https://iub.edu/~isccint/test/jquery-ui-1.11.1/jquery-ui.js" > </script>
	
<script>
  $(function() {
    $( "#datetime" ).datepicker();
  });
  </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<input type = "hidden" value = <?echo $first?> id = "first_name" >
<input type = "hidden" value = <?echo $last?> id = "last_name" >  

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
<div class="blog-header" >
             <h1 class="blog-title">Picture</h1>
      </div>
  <div class="col-md-2">
    </div>
  <div class="col-md-10">
        <p class="lead blog-description">Table Name</p>
	</div>
      <div class="row">
  <div class="col-md-2">
    <div class = "search">
      <input type="text" class="form-control" placeholder="First Name" id = "firstname">
      <input type="text" class="form-control" placeholder="Last Name" id = "lastname">
<div style = "text-align: center;margin-top : 5px" >
	  <button type="button" class="btn btn-primary" style = "width:110px;" id = "client">Client Search</button>
	  </div>
    </div>
    <div class = "filter" style = "margin-top : 1cm">
	 
       
 <div style = "text-align: center;margin-top : 5px"  >

	
	  </div>
    </div>
  </div>
  <div class="col-md-10">
    <div class="table-list">
      	 <table class="table table-striped">
      <thead>
        <tr>
          <th>ISSID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Status</th>
	<th>Rank</th>
	<th>Dept</th>
	<th>School</th>
	<th>FieldGroup</th>
	<th>Campus</th>
	  <!-- <th>Consultant</th>--> 
        </tr>
      </thead>
      <tbody id = "table_body">
       </tbody>
    </table>
 </div>
</div>
<div class = "col-md-10">> 
  <div class="table-list">
      	 <table class="table table-striped">
      <thead>
         <tr>
          <th>ISSID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Status</th>
	<th>Rank</th>
	<th>Dept</th>
	<th>School</th>
	<th>FieldGroup</th>
	<th>Campus</th>
	<th></th>
        </tr>
      </thead>
      <tbody id = "exist_table_body">
       </tbody>
    </table>
</div>
	  <form action="https://iub.edu/~isccint/test/Client_add.html">
    <input type="submit" class="btn btn-primary" value = "Add Client">
</form>


    
  </div>
  </div>
</div>
        


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
   
  

</body>
<script src = "../js/client_search.js">
</script>
</html>


