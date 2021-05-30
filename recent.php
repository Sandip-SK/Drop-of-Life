<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css\layout.css">
	<title>Recent Requests</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.html">Drop of Life</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#find">Find Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.html">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="recent.php">Recent Request</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li> 
        <!-- Dropdown -->
     <li class="nav-item dropdown">
     	 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        User's Controls
      	</a>
     	 <div class="dropdown-menu">
     	 	<a class="dropdown-item" href="donate.php">Donate</a>
        	<a class="dropdown-item" href="login.php">Login</a>
        	<a class="dropdown-item" href="logout.php">Logout</a>
       		<a class="dropdown-item" href="update.php">Update Profile</a>
      	</div>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </li>   
    </ul>
  </div>  
</nav>
<!--**************************************************************************************************************************
    	*********************************************************HEADING*******************************************************
    	************************************************************************************************************************-->
<div class="jumbotron">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2><strong><u>Recent Requests</u></strong></h2>
				
				<h3><p>These are the recent blood donation requests we have received. If you are a healthy person we request you to consider donating Blood <strong>Your Donation can Save a Life</strong>.</p>
				<p>
					<strong>Click the <a href="donate.php" class="btn btn-primary">SEARCH</a></strong> Button to search for patients in need in your locality.
				</p>
				<p>
					<strong>Still unsure about blood donation?</strong> Check out our <a href="FAQ.html" class="btn btn-info">FAQ</a> page to get some knoweledge about Blood Donations.
				</p>
				</h3>
			</div>
		</div>
	</div>
</div>
<!--**************************************************************************************************************************
    	***************************************************RECENT REQUEST*******************************************************
    	************************************************************************************************************************-->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<?php
			$conn=mysql_connect("127.0.0.1","root","");
			mysql_select_db("dol");
			$result=mysql_query("select * from postrequest order by name");
			if($rows=mysql_fetch_array($result))
			{
				?>
				<table class="table table-dark table-hover">
					<tr>
						<th>NAME</th>
						<th>BLOOD GROUP</th>
						<th>CITY</th>
						<th>DISTRICT</th>
						<th>HOSPITAL</th>
						<th>CONTACT</th>
					</tr>
				<?php
				while($rows=mysql_fetch_array($result))
				{
					?>
						<tr>
							<td><?php echo $rows["name"]; ?></td>
							<td><?php echo $rows["bldgrp"]; ?></td>
							<td><?php echo $rows["city"]; ?></td>
							<td><?php echo $rows["district"]; ?></td>
							<td><?php echo $rows["hospital"]; ?></td>
							<td><?php echo $rows["contact"]; ?></td>
						</tr>
					<?php
				}
				?>
				</table>
				<?php
			}
			else
			{

			}
			?>
		</div>
	</div>
</div>

<!--**************************************************************************************************************************
    	***********************************************************FOOTER*********************************************************
    	************************************************************************************************************************-->

<footer class="footer bg-dark" style="height: 105px; padding-top: 30px;">
      <div class="container">
        <span class="text-muted"><span class="glyphicon glyphicon-copyright-mark"></span>Copyright Reserved 2020-2025.<br>
        Disclimer:The Content for FAQ has been obtained from different sources from the internet.<br>
        <strong>Creator: Sandip</strong>
    </span>
      </div>
</footer>

</body>
</html>