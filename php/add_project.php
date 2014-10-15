<?php
include('db_connect.php');
$ISCCID = $_GET['ISCCID'];

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
<input type = "hidden" value = "<?echo $ISCCID?> " id = "ISCCID">
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
Information
</th>        
</tr>
      </thead>
      <tbody>
	 <tr>
          <td>
            <code>ProjectTitle</code>
          </td>
          <td><input value =" "style = "width:80%" id = "projtitle" type="text" /></td>
        </tr>
        <tr>
        <tr>
          <td>
            <code>ProjectDesc</code>
          </td>
          <td><input value =" " style = "width:80%" id = "projectdesc" type="text" /></td>
        </tr>
        <tr>
          <td>
            <code>ProjectNotes</code>
          </td>
          <td><input value =" >" style = "width:80%" id = "projectnotes" type="text" /></td>
        </tr>
        <tr>
          <td>
            <code>ProjectBill</code>
          </td>
          <td><input value ="" id ="projectbill" style = "width:80%" type="text" /> </td>
        </tr>
	<tr>
          <td>
            <code>Supervisor</code>
          </td>
          <td><input id ="supervisor"  value = "" style = "width:80%" type="text" /> </td>
        </tr>
	<tr>
          <td>
            <code>TypeP</code>
          </td>
          <td><input style = "width:80%" value = " "id ="type" type="text" /> </td>
        </tr>
	<tr>
          <td>
            <code>Status</code>
          </td>
          <td><input  style = "width:80%" value =""id ="status" type="text" /> </td>
        </tr>
	<tr>
          <td>
            <code>BillingAccount</code>
          </td>
          <td><input id ="account" value = ""style = "width:80%" type="text" /> </td>
        </tr>
	<tr>
          <td>
            <code>StartDate</code>
          </td>
          <td><input style = "width:80%" value = ""id ="startdate" type="text" /> </td>
        </tr>
      </tbody>

	</table>        
    <div style = "text-align:center;">
      <button type="button" class="btn btn-primary" id = "add_client_button" >Add Project</button>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  

</body>
<script src = ../js/add_project.js>	
</script>
</html>




