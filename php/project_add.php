<?php

include('db_connect.php');
$ID = $_GET['ISCCID'];

$sql = "select * from clients where ISCCID = '$ID'";
$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$lastname = $row['LastName'];
$firstname = $row['FirstName'];

?><html lang="en"><head>
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
<input type = "hidden" id = "lastname" value = "<?echo $lastname?>" >
<input type = "hidden" id = "firstname" value = "<?echo $firstname?>">
<input type = "hidden" id = "ISCCID" value = "<?echo $ID?>" >
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
        	Project Information
	</th>
	</tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <code>Last Name</code>
          </td>
          <td><input id = "lastname" type="text" /></td>
        </tr>
        <tr>
          <td>
            <code>First Name</code>
          </td>
          <td><input id = "firstname" type="text" /></td>
        </tr>
        <tr>
          <td>
            <code>IU Username</code>
          </td>
          <td><input id ="username" type="text" /> (Use "NA" if Not IU or "Unknown" )</td>
        </tr>
        <tr>
          <td>
            <code>Campus</code>
          </td>
          <td>
	    <select class="form-control" style = "width: 30%" name="campus" id="campus">
	      <option value="None Selected">&lt;Choose one&gt;</option>
	      <option value="IU Bloomington">IU Bloomington</option>
	      <option value="IUPUI Indianapolis">IUPUI Indianapolis</option>
	      <option value="IUPUC (Columbus)">IUPUC (Columbus)</option>
	      <option value="IU East (Richmond)">IU East (Richmond)</option>
	      <option value="IPFW Fort Wayne">IPFW Fort Wayne</option>
	      <option value="IU Kokomo">IU Kokomo</option>
	      <option value="IU Northwest (Gary)">IU Northwest (Gary)</option>
	      <option value="IU South Bend">IU South Bend</option>
	      <option value="IU Southeast (New Albany)">IU Southeast (New Albany)</option>
	      <option value="IU Continuing Studies">IU Continuing Studies</option>
	      <option value="Not IU">Not IU</option>
	      <option value="Unknown">Unknown</option>
	    </select>
	  </td>
        </tr>
        <tr>
          <td>
            <code>School</code>
          </td>
	  <td>
          <select class="form-control" style = "width: 30%" name="school" id="school">
	    <option value="None Selected">&lt;Choose one&gt;</option>
	    <option value="BL-ASDV">BL-ASDV</option>
	    <option value="BL-BUDG">BL-BUDG</option>
	    <option value="BL-BUEX">Bl-BUEX</option>
	    <option value="BL-BUKD">BL-BUKD</option>
	    <option value="BL-BUS">BL-BUS</option>
	    <option value="BL-COAS">BL-COAS</option>
	    <option value="BL-DFAC">BL-DFAC</option>
	    <option value="BL-EDUC">BL-EDUC</option>
	    <option value="BL-EMAS">BL-EMAS</option>
	    <option value="BL-EXEC">BL-EXEC</option>
	    <option value="BL-GRAD">BL-GRAD</option>
	    <option value="BL-HPER">BL-HPER</option>
	    <option value="BL-INFO">BL-INFO</option>
	    <option value="BL-JOUR">BL-JOUR</option>
	    <option value="BL-LAW">BL-LAW</option>
	    <option value="BL-LIBR">BL-LIBR</option>
	    <option value="BL-MCIM">BL-MCIM</option>
	    <option value="BL-MED">BL-MED</option>
	    <option value="BL-MSCI">BL-MSCI</option>
	    <option value="BL-MUS">BL-MUS</option>
	    <option value="BL-OACA">BL-OACA</option>
	    <option value="BL-OPT">BL-OPT</option>
	    <option value="BL-RUGS">BL-RUGS</option>
	    <option value="BL-SLIS">BL-SLIS</option>
	    <option value="BL-SOCW">BL-SOCW</option>
	    <option value="BL-SPEA">BL-SPEA</option>
	    <option value="BL-SSER">BL-SSER</option>
	    <option value="CO-BUS">CO-BUS</option>
	    <option value="CO-EDUC">CO-EDUC</option>
	    <option value="CO-GRAD">CO-GRAD</option>
	    <option value="CS-SCS">CS-SCS</option>
	    <option value="EA-ACSP">EA-ACSP</option>
	    <option value="EA-ADMIN">EA-ADMIN</option>
	    <option value="EA-BUS">EA-BUS</option>
	    <option value="EA-EDUC">EA-EDUC</option>
	    <option value="EA-EXEC">EA-EXEC</option>
	    <option value="EA-INPR">EC-INPR</option>
	    <option value="EA-LART">EA-LART</option>
	    <option value="EA-LIBR">EA-LIBR</option>
	    <option value="EA-NURS">EA-NURS</option>
	    <option value="EA-SCI">EA-SCI</option>
	    <option value="EA-SOCW">EA-SOCW</option>
	    <option value="FW-ACAD">FW-ACAD</option>
	    <option value="FW-ARSS">FW-ARSS</option>
	    <option value="FW-BUS">FW-BUS</option>
	    <option value="FW-CHAN">FW-CHAN</option>
	    <option value="FW-COAS">FW-COAS</option>
	    <option value="FW-CTSD">FW-CTSD</option>
	    <option value="FW-DGTS">FW-DGTS</option>
	    <option value="FW-DLS">FW-DLS</option>
	    <option value="FW-ECON">FW-ECON</option>
	    <option value="FW-EDUC">FW-EDUC</option>
	    <option value="FW-ENGL">FW-ENGL</option>
	    <option value="FW-FINA">FW-FINA</option>
	    <option value="FW-GEOS">FW-GEOS</option>
	    <option value="FW-HIST">FW-HIST</option>
	    <option value="FW-JOUR">FW-JOUR</option>
	    <option value="FW-LIBC">FW-LIBC</option>
	    <option value="FW-MGMK">FW-MGMK</option>
	    <option value="FW-PEA">FW-PEA</option>
	    <option value="FW-POLS">FW-POLS</option>
	    <option value="FW-SBMS">FW-SBMS</option>
	    <option value="FW-SFPA">FW-SEPA</option>
	    <option value="FW-SOCA">FW-SOCA</option>
	    <option value="FW-SPEA">FW-SPEA</option>
	    <option value="IN-ACSP">IN-ACSP</option>
	    <option value="IN-ADAF">IN-ADAF</option>
	    <option value="IN-AHLT">IN-AHLT</option>
	    <option value="IN-BUS">IN-BUS</option>
	    <option value="IN-COLU">IN-COLU</option>
	    <option value="IN-DENT">IN-DENT</option>
	    <option value="IN-EDUC">IN-EDUC</option>
	    <option value="IN-ENGT">IN-ENGT</option>
	    <option value="IN-EXAF">IN-EXAF</option>
	    <option value="IN-EXEC">IN-EXEC</option>
	    <option value="IN-GRAD">IN-GRAD</option>
	    <option value="IN-HERR">IN-HERR</option>
	    <option value="IN-IN">IN-IN</option>
	    <option value="IN-INFO">IN-INFO</option>
	    <option value="IN-INTT">IN-INTT</option>
	    <option value="IN-JOUR">IN-JOUR</option>
	    <option value="IN-LART">IN-LART</option>
	    <option value="IN-LAW">IN-LAW</option>
	    <option value="IN-LIBH">IN-LIBH</option>
	    <option value="IN-LIBR">IN-LIBR</option>
	    <option value="IN-MED">IN-MED</option>
	    <option value="IN-NURS">IN-NURS</option>
	    <option value="IN-OACA">IN-OACA</option>
	    <option value="IN-PHED">IN-PHED</option>
	    <option value="IN-SCI">IN-SCI</option>
	    <option value="IN-SCS">IN-SCS</option>
	    <option value="IN-SLIS">IN-SLIS</option>
	    <option value="IN-SOCW">IN-SOCW</option>
	    <option value="IN-SPEA">IN-SPEA</option>
	    <option value="IN-STLI">IN-STLI</option>
	    <option value="IN-UCE">IN-UCE</option>
	    <option value="IN-UCOL">IN-UCOL</option>
	    <option value="IN-UGED">IN-UGED</option>
	    <option value="KO-ACSP">KO-ACSP</option>
	    <option value="KO-ADMIN">KO-ADMIN</option>
	    <option value="KO-BUS">KO-BUS</option>
	    <option value="KO-COAS">KO-COAS</option>
	    <option value="KO-DLS">KO-DLS</option>
	    <option value="KO-EDGR">KO-EDGR</option>
	    <option value="KO-EDUC">KO-EDUC</option>
	    <option value="KO-EXEC">KO-EXEC</option>
	    <option value="KO-LIBR">KO-LIBR</option>
	    <option value="KO-NURS">KO-NURS</option>
	    <option value="KO-SPEA">KO-SPEA</option>
	    <option value="NW-ACSP">NW-ACSP</option>
	    <option value="NW-BUS">NW-BUS</option>
	    <option value="NW-CHHS">NW-CHHS</option>
	    <option value="NW-COAS">NW-COAS</option>
	    <option value="NW-EDUC">NW-EDUC</option>
	    <option value="NW-EXEC">NW-EXEC</option>
	    <option value="NW-GENA">NW-GENA</option>
	    <option value="NW-LIBR">NW-LIBR</option>
	    <option value="NW-MEDN">NW-MEDN</option>
	    <option value="NW-SPEA">NW-SPEA</option>
	    <option value="SB-ACSP">SB-ACSP</option>
	    <option value="SB-ADMIN">SB-ADMIN</option>
	    <option value="SB-ARTS">SB-ARTS</option>
	    <option value="SB-BUS">SB-BUS</option>
	    <option value="SB-CHS">SB-CHS</option>
	    <option value="SB-COAS">SB-COAS</option>
	    <option value="SB-EDUC">SB-EDUC</option>
	    <option value="SB-GENA">SB-GENA</option>
	    <option value="SB-HSSW">SB-HSSW</option>
	    <option value="SB-OACA">SB-OACA</option>
	    <option value="SB-SB">SB-SB</option>
	    <option value="SB-SPEA">SB-SPEA</option>
	    <option value="SB-ULIB">SB-ULIB</option>
	    <option value="SE-ACSP">SE-ACSP</option>
	    <option value="SE-BUS">SE-BUS</option>
	    <option value="SE-CHAN">SE-CHAN</option>
	    <option value="SE-COAS">SE-COAS</option>
	    <option value="SE-EDUC">SE-EDUC</option>
	    <option value="SE-HMAN">SE-HMAN</option>
	    <option value="SE-LIBR">SE-LIBR</option>
	    <option value="SE-NATS">SE-NATS</option>
	    <option value="SE-NURS">SE-NURS</option>
	    <option value="SE-OACA">SE-OACA</option>
	    <option value="SE-PPSE">SE-PPSE</option>
	    <option value="SE-SOCS">SE-SOCS</option>
	    <option value="SE-SSER">SE-SSER</option>
	    <option value="SE-WEC">SE-WEC</option>
	    <option value="Not IU">Not IU</option>
	    <option value="Unknown">Unknown</option>
	    <option value="Other">Other</option>
	  </select>
	  </td>
        </tr>
	 <tr>
          <td>
            <code>Department</code>
          </td>
          <td><input type="text" id = "depart" />(Use 7 digit code, ex: BL-COAS. See '<a href="../files/dept_lookup.csv">Dept Lookup'</a> or "Not IU" or "Unknown")</td>
        </tr>
	  <tr>
          <td>
            <code>Status</code>
          </td>
          <td>
	    <select class="form-control" style = "width : 30%" name="status" id="status">
	      <option value="None Selected">&lt;Choose one&gt;</option>
	      <option value="Faculty">Faculty</option>
	      <option value="Student">Student</option>
	      <option value="Staff">Staff</option>
	      <option value="Not IU">Not IU</option>
	      <option value="Unknown">Unknown</option>
	    </select>
	  </td>
	  </tr>
	   <tr>
          <td>
            <code>Rank</code>
          </td>
          <td>
	    <select class="form-control" style = "width : 30%" name="rank" id="rank">
	      <option value="None Selected">&lt;Choose one&gt;</option>
	      <option value="Academic Administrator">Academic Administrator</option>
	      <option value="Assistant Professor">Assistant Professor</option>
	      <option value="Associate Professor">Associate Professor</option>
	      <option value="Clinical Faculty">Clinical Faculty</option>
	      <option value="Doctorate Student">Doctorate Student</option>
	      <option value="Lecturer">Lecturer</option>
	      <option value="Masters Student">Masters Student</option>
	      <option value="Other Faculty">Other Faculty</option>
	      <option value="Other Researcher">Other Researcher</option>
	      <option value="Post Doctoral Fellow">Post Doctoral Fellow</option>
	      <option value="Professor">Professor</option>
	      <option value="Staff">Staff</option>
	      <option value="Undergraduate Student">Undergraduate Student</option>
	      <option value="Not IU">Not IU</option>
	      <option value="Unknown">Unknown</option>
	    </select>
	  </td>
	  </tr>
	    <tr>
          <td>
            <code>Alternate e-mail</code>
          </td>
          <td>
	    <input type="text" id = "email"/>
	  </td>
	  </tr>
	<tr>
          <td>
            <code>Notes</code>
          </td>
          <td>
	    <input style  = "width : 80%%" type="text" id = "note"/>
	  </td>
	  </tr>
      </tbody>
    </table>
    </table>        
    <div style = "text-align:center;">
      <button type="button" class="btn btn-primary" id = "add_client_button" >Add This Client</button>
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
<script src = "js/add_project.js">
</script>
</html>
