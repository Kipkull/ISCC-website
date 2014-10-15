<?php
include('db_connect.php');
$IUID= $_GET['IUID'];
#client search command with first last and username

$sql = "
select iu.IUID AS IUID, iu.Username as Username, iu.FirstName as FirstName, iu.LastName as LastName, iu.Status as Status, iu.Rank as Rank, iu.DeptCode as DeptCode, iu.DeptDesc as DeptDesc, iu.SchoolCode as SchoolCode, iu.SchoolDesc as SchoolDesc, iu.Campus as Campus, dp.FieldGroup as FieldGroup from iumasterlist as iu join iudept as dp on iu.DeptCode = dp.DeptCode and iu.SchoolCode = dp.SchoolCode where IUID = '$IUID'
";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

		   $IUID = $row['IUID'];
		   $FirstName = $row['FirstName'];
                   $LastName= $row['LastName'];
                   $Username = $row['Username'];   
		   $Status= $row['Status'];
                   $Rank= $row['Rank'];
                   $DeptDesc= $row['DeptDesc'];
                   $SchoolDesc= $row['SchoolDesc'];
                   $SchoolCode = $row['SchoolCode'];
                   $DeptCode = $row['DeptCode'];
                   $FieldGroup = $row['FieldGroup'];
                   $Campus = $row['Campus'];

mysql_close();

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
<input type = "hidden" id = "IUID" value = "<?echo $IUID?>">
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
	<form action="https://iub.edu/~isccint/test/php/add_client_insert" method="post">     
 <table class="table table-bordered table-striped">
      <colgroup>
        <col class="col-xs-1">
        <col class="col-xs-7">
      </colgroup>
      <thead>
        <tr>
          <th colspan="2" scope="colgroup"> PLEASE only fill this out if you are POSITIVE the person is NEW to ISCC.
Undergrads and Staff will probably need to be added.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <code>Last Name</code>
          </td>
          <td ><input type = "text" name = "lastname" readonly value = "<?echo $LastName?>"></td>
        </tr>
        <tr>
          <td>
            <code>First Name</code>
          </td>
          <td><input type = "text" name = "firstname" value = "<?echo $FirstName?>" readonly></td>
        </tr>
        <tr>
          <td>
            <code>IU Username</code>
          </td>
          <td ><input name = "username" type = "text" value = "<?echo $Username?>" readonly ></td>
        </tr>
        <tr>
          <td>
            <code>Campus</code>
          </td>
          <td >
	<input  name = "campus" type = "text" value="<?echo $Campus?>">
	  </td>
        </tr>
        <tr>
          <td>
            <code>School</code>
          </td>
	  <td >
	<input type= "text" name = "school" value = "<?echo $SchoolCode?>">	  
	</td>
        </tr>
	 <tr>
          <td >
            <code>Department</code>
          </td>
        	<td>
		<input type = "text" name = "depart" value = "<?echo $DeptCode?>">
		</td>
	</tr>
	  <tr>
          <td>
            <code>Status</code>
          </td>
          <td >
	<input type = "text" name = "status" value="<?echo Status?>">
	  </td>
	  </tr>
	    <tr>
          <td >
            <code>Alternate e-mail</code>
          </td>
          <td>
	    <input type="text" name = "email"/>
	  </td>
	  </tr>
	<tr>
          <td>
            <code>Notes</code>
          </td>
          <td>
	    <input style  = "width : 80%%" type="text" name = "note"/>
	  </td>
	  </tr>
	<tr>
          <td>
            <code>Rank</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "rank"/>
          </td>
          </tr>
	<tr>
          <td>
            <code>External Company</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "externalcompany">
          </td>
          </tr>
<tr>
          <td>
            <code>Contact Address</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "contact_address">
          </td>
          </tr>
<tr>
          <td>
            <code>FOName </code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "FOName"/>
          </td>
          </tr>
	<tr>
          <td>
            <code>DeptDesc</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "DeptDesc"/>
          </td>
          </tr>
	<tr>
          <td>
            <code>SchoolDesc</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "SchoolDesc">
          </td>
          </tr>
	<tr>
          <td>
            <code>Archived</code>
          </td>
          <td>
            <input style  = "width : 80%%" type="text" name = "Archived"/>
          </td>
          </tr>
      </tbody>
    </table>
    </table>        
    <div style = "text-align:center;">
      <input type="submit" class="btn btn-primary" >Add This Client</button>
    </div>
	</form>
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
<script src = "../js/add_client_iumaster.js">
</script>
</html>


