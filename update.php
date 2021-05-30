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
	<title>Update Profile</title>
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
        <a class="nav-link" href="index.html">Find Donor</a>
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
    	*****************************************************UPDATE PROFILE*****************************************************
    	************************************************************************************************************************-->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<?php
			session_start();

			if(isset($_SESSION["uname"]))
			{
				$conn=mysql_connect("127.0.0.1","root","");
				mysql_select_db("dol",$conn);
				$email1=$_SESSION["uname"];
				$result=mysql_query("select * from register where email='$email1'");
				// displaying the details inside a form for editing
				if($row=mysql_fetch_array($result))
				{
					?>
<!-- ****************************************DISPLAY DATA IN A FORM FOR EDITTIND*********************************************-->
						
			<form action="update.php" method="post">
				<div class="form-group">
					<label class="control-label" for="fullname">Full Name:</label>
					
					<input type="text" name="name" class="form-control" id="fullname" value="<?php echo $row[0]; ?>" placeholder="Enter Full Name" required="true">

					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="blood_group">Blood Group</label>
					<select class="form-control" id="blood_group" name="bldgrp" value="<?php echo $rows[1]; ?>">
						<option>O+</option>
						<option>O-</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="mobile_no">Contact Number:</label>
					<input type="number" name="contact" class="form-control" id="mobile_no" value="<?php echo $row[2]; ?>">
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<select class="form-control" name="city" id="city" value="<?php echo $row[3]; ?>">
						<option>Ranchi</option>
					    <option>Dhanbad</option>
						<option>Jamshedpur</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="district">District:</label>
					<select class="form-control" name="dist" id="district" value="<?php echo $row[4]; ?>">
						<option>Ranchi</option>
					    <option>Dhanbad</option>
						<option>Jamshedpur</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="email">E-Mail Id:</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email ID" value="<?php echo $row[5]; ?>">
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="avail">Donation Availability</label>
					<select class="form-control" id="avail" name="avail" value="<?php echo $row[6]; ?>">
						<option>Available</option>
						<option>Unavailable</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
			<!--	<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="pass" id="password" required="true">
					<small id="passwordHelpInline" class="text-muted">
                      Must be 8-20 characters long.
                    </small>
                    <div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="password_r">Re-Enter Password:</label>
					<input type="password" name="pass_r" id="password_r" required="true">
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				
				<div class="form-group form-check">
					<label class="form-check-label">
						<input type="checkbox" name="agree" class="form-check-input" id="agree">I agree to that my contact details can be used to contact for blood donation requests.
					</label>
				</div>
			-->
				<button type="submit" class="btn btn-primary" name="update">Update</button>
			</form>
					<?php

// ************************************* PHP CODE TO UPDATE THE CHANGED DATA IN THE ABOVE FORM *******************************
					if(isset($_REQUEST["update"]))
					{
						$name=$_POST["name"];
						$bldgrp=$_POST["bldgrp"];
						$contact=$_POST["contact"];
						$city=$_POST["city"];
						$district=$_POST["dist"];
						$email=$_POST["email"];
						$avail=$_POST["avail"];
						mysql_select_db("dol",$conn);
						if(mysql_query("update register set name='$name',bldgrp='$bldgrp',contact=$contact,city='$city',district='$district',email='$email',avail='$avail' where email='$email' "))
						{
							?>
							<script type="text/javascript">
								alert("Your Details have been updated \n Click OK to jump to homepage");
							</script>
							<?php
							echo "<script>location.href='index.html'</script>";
						}
						else
						{
							echo "<script>location.href='update.php'</script>";
						}
					}
				}
				else
				{
					echo "Some error occured while retrieving your details try again";
				}
			}
			else
			{
				echo "<script>location.href='login.php'</script>";
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