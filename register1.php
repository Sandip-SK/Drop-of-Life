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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Find Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recent Request</a>
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
        <a class="nav-link" href="#">Contact Us</a>
      </li>   
    </ul>
  </div>  
</nav>

<!--**************************************************************************************************************************
    	**************************************************PHP CODE REGISTER*****************************************************
    	************************************************************************************************************************-->
<?php
	if (isset($_POST["submit"])) 
	{
		$name=$_POST["name"];
		$bldgrp=$_POST["bldgrp"];
		$contact=$_POST["contact"];
		$city=$_POST["city"];
		$district=$_POST["dist"];
		$email=$_POST["email"];
		$status=$_POST["avail"];
		$password=$_POST["pass"];

		$conn=mysql_connect("127.0.0.1","root","");
		mysql_select_db("dol",$conn);
		if (mysql_query("insert into register values('$name','$bldgrp',$contact,'$city','$district','$email','$avail','$password')"))
		{
			echo "DATA SAVED";
		}
		else
		{
			echo "error try again";
		}
	}
	else
	{
		echo "submit failed";
	}
?>

 <!--**************************************************************************************************************************
    	***********************************************************FOOTER*********************************************************
    	************************************************************************************************************************-->

    <footer class="footer bg-dark" style="height: 80px; padding-top: 30px;">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
</body>
</html>