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
	<title>Donate Blood</title>
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

	<div class="countainer-fluid" style="padding-left: 100px;padding-right: 100px;padding-top: 20px;padding-bottom: 20px;">
		<div class="row">
			<div class="col-md-6 col-xs-12">
    			<form action="donate.php" method="post" class="formstyle">
					
						<div class="form-group">
							<label for="blood_group">Blood Group</label>
							
							<select class="form-control" name="bldgrp" id="blood_group">
							<option>O+</option>
							<option>O-</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							</select>

						</div>
						<div class="form-group">
							<label for="select_city">Select City</label>
							
								<select class="form-control" name="city" id="select_city">
									<option>Ranchi</option>
								</select>
							
						
						</div>
						<div class="form-group">
							<label for="select_dist">Select District</label>
							
								<select class="form-control" name="district" id="select_dist">
									<option>Ranchi</option>
								</select>
							
						</div>
						
					
					<input class="btn btn-primary btn-block" type="submit" name="find" value="Find Requestors">
					<br>
				</form>
    		</div>

    		<div class="col-md-6 col-xs-12">
 <!--**************************************************************************************************************************
    	********************************************************PHP DONATE******************************************************
    	************************************************************************************************************************-->

      			<?php
      				if(isset($_REQUEST["find"]))
      				{
      					$bldgrp=$_POST["bldgrp"];
      					$city=$_POST["city"];
      					$district=$_POST["district"];
      					$conn=mysql_connect("127.0.0.1","root","");
      					mysql_select_db("dol",$conn);
      					$result= mysql_query("select name,bldgrp,hospital,contact from postrequest where bldgrp='$bldgrp' and district='$district' and city='$city'");
      					if($rows=mysql_fetch_array($result))
      					{
      						?>
      						<table class="table table-dark table-hover">
								<tr>
									<th>NAME</th>
									<th>BLOOD GROUP</th>
									<th>HOSPITAL</th>
									<th>CONTACT</th>
								</tr>

      						<?php
      						while ($rows=mysql_fetch_array($result)) 
      						{
      							?>
      								<tr>
										<td><?php echo $rows["name"]; ?></td>
										<td><?php echo $rows["bldgrp"]; ?></td>
										<td><?php echo $rows["hospital"]; ?></td>
										<td><?php echo $rows["contact"]; ?></td>
									</tr>
      							<?php
      						}
      						?>
      						</table>
      						<?php
      					}
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