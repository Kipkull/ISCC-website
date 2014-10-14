<?php

include('db_connect.php');
echo 1;
$first= $_GET['first_name'];
$last = $_GET['last_name'];
$DAT = $_GET['date']; # Not useful, change to Date!!!
echo 3;
#if ($first == NULL) {
#	$first = '.*';
#};
#if ($last == NULL) {
#        $last = '.*';
#};
#if ($DAT == NULL) {
#        $DAY = date('Y-m-d');
#	$PDAY = date('Y-m-d', strtotime('- 1 month'));
#} else{
#	$PDAT = date('Y-m-d', strtotime('-1 month', $DAY);
#}
#;
#client search command with first last and username
#$sql = "select cp.ISCCID, cp.FirstName, cp.LastName, cp.ProjectTitle, wk.Date from \
#(select ProjID, Date from `work` where Date between $PDAY and $DAY) as wk \
#join \
#`clientproject` as cp \
#on wk.ProjID = cp.ProjID \
#order by wk.Date Desc ";
#$result = mysql_query($sql);
#$json = array();

#while($row = mysql_fetch_array($result))     
#  {
#    $json[]= array(
#		   'cp.ISCCID' => $row['ISCCID'],
#		   'cp.FirstName' => $row['FirstName'],
#		   'cp.LastName'=> $row['LastName'],
#    		   'cp.ProjectTitle' => $row['ProjectTitle'],
#		   'wk.Date' => $row['Latest Date'] 
#		   );
#  }

#$jsonstring = json_encode($json);
$jsonstrong = '1';
#mysql_close();

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<input type = "hidden" id = "client_search_string" value = <?echo $jsonstring?> >
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
      <input type="text" class="form-control" placeholder="First Name" id = "first_name">
      <input type="text" class="form-control" placeholder="Last Name" id = "last_name">
      <input type="text" class="form-control" placeholder="Username" id = "username">
      <div style = "text-align: center;margin-top : 5px" >
	  <button type="button" class="btn btn-primary" style = "width:110px;" id = "client">Client Search</button>
	  </div>
    </div>
    <div class = "filter" style = "margin-top : 1cm">
      <select class="form-control">
	<option value = "Work Type" selected >Work Type</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
      </select>
      <select class="form-control">
	<option value = "Consultant" selected >Consultant</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
      </select>
      <div style = "text-align: center;margin-top : 5px"  >
	  <button type="button" class="btn btn-success" style = "width:110px;">Filter</button>
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
          <th>Project Name</th>
	  <!-- <th>Consultant</th>--> 
	  <th>Lastest Date</th> 
        </tr>
      </thead>
      <tbody id = "table_body">
       </tbody>
    </table>
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
<script src = "js/client_search.js">
</script>
</html>


