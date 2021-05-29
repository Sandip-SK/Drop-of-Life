<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function valid()
  		{
  			var c=0;
        	n=parseInt(contact.value);
        	for(i=n;i>0;i=Math.floor(i/10))
        		c++;
        	if(c!=10)
       		{
        	document.getElementById("inv-contact").innerHTML="Mobile no must be of 10 digit!!!";
        	return false;
        	}
  		}
  		
  	</script>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css\layout.css">
	<title>Register to Drop of Life</title>
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
    	**************************************************REGISTRATION FORM*****************************************************
    	************************************************************************************************************************-->


<div class="container-fluid" id="reg" style="padding-top: 40px; padding-left: 150px; padding-right: 150px; padding-bottom: 40px;">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<form action="register.php" method="post" onsubmit="return valid()" class="was-validated formstyle">
				<div class="form-group">
					<label class="control-label" for="fullname">Full Name:</label>
					
					<input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name" required="true">

					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="blood_group">Blood Group</label>
					<select class="form-control" id="blood_group" name="bldgrp">
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
					<input type="number" name="contact" class="form-control" id="mobile_no" required="true">
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback" id="inv-contact"></div>
				</div>
				<div class="form-group">
					<label for="city">City:</label>
					<select class="form-control" name="city" id="city">
						<option>Ranchi</option>
					    <option>Dhanbad</option>
						<option>Jamshedpur</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="district">District:</label>
					<select class="form-control" name="dist" id="district" >
						<option>Ranchi</option>
					    <option>Dhanbad</option>
						<option>Jamshedpur</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="email">E-Mail Id:</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email ID" required="true">
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="avail">Donation Availability</label>
					<select class="form-control" id="avail" name="avail">
						<option>Available</option>
						<option>Unavailable</option>
					</select>
					<div class="valid-feedback">Valid</div>
     			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="pass" id="password" required="true">
					<small id="passwordHelpInline" class="text-muted">
                      Entering a strong password is advised.
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
				<br>
				<div class="form-group form-check">
					<label class="form-check-label">
						<input type="checkbox" name="agree" class="form-check-input" id="agree" required="true">I agree to that my contact details can be used to contact for blood donation requests.
					</label>
				</div>
				<input type="submit" class="btn btn-primary" name="submit">Register</input>
			</form>
		</div>
	</div>
</div>



<?php
	if (isset($_POST["submit"])) 
	{
		$name=$_POST["name"];
		$bldgrp=$_POST["bldgrp"];
		$contact=$_POST["contact"];
		$city=$_POST["city"];
		$district=$_POST["dist"];
		$email=$_POST["email"];
		$avail=$_POST["avail"];
		$password=$_POST["pass"];

		$conn=mysql_connect("127.0.0.1","root","");
		mysql_select_db("dol",$conn);
		if (mysql_query("insert into register values('$name','$bldgrp',$contact,'$city','$district','$email','$avail','$password')"))
		{
		?>

			<div class="container-fluid" id="success">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="card">
						<div class="card-block">
							<h3 class="card-header bg-info">REGISTRATION SUCCESSFUL</h3>
							<div class="card-body">
								<p>By registering you hereby agree that your contact details can be shown to people who
								are in need of blood donation for any request that arises in your locality.</p>
							</div>
							<center><a href="index.html" class="btn btn-primary">GO TO HOMEPAGE</a></center>
						</div>
						</div>
					</div>
				</div>
			</div>

		<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Some Error occured during registering.\n TRY AGAIN");
			</script>
			<?php
			echo "<script>location.href='register.php'</script>";
		}
	}
	
?>

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