<?php

$ID = $_GET['ISCCID'];
$key = $_GET['key'];
echo $ID;
#sql query
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
        <p class="lead blog-description">Project</p>
      <div class="row">
  <div class="col-md-2">
    </div>
  </div>
  <div class="col-md-10">
  <p class="lead blog-description">Exist Project</p>
	
<input type = "hidden" id = "ISCCID" value = "<?echo $ID?>" >
<input type = "hidden" id = "key" value = "<?echo $key?> ">

    <table class="table table-striped">
      <thead>
	<tr>
          <th>Project ID </th>
	  <!-- <th>Consultant</th>--> 
	  <th>ISCCID</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Project Title</th> 
        </tr>
      </thead>
      <tbody id = "new_project_table">
       </tbody>
    </table>
    
 
<div class="col-md-8">
    <div class = "next">
      <select class="form-control" style = "width : 20%" id = "exist_page_number">
	<option selected >page number </option>
	<option>1</option> 
      </select>
      </div>
    </div>
     <div class="col-md-2">
     </div>
  </div>
  </div>
</div>
<br>
<br>
<br>
<div class = "col-md-1">
</div>
<div class = "col-md-8">        
    <div style = "text-align:center;">
      <button type="button" class="btn btn-primary" id = "add_client_button" >Add Project</button>
    </div>
</div>

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
    </div>
      <div style = "text-align: center;margin-top : 5px"  >
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
<script src = "../js/client_project.js">
</script
</html>

