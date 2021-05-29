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
	<title>Post Request</title>
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
        <a class="nav-link" href="#">Contact Us</a>
      </li>   
    </ul>
  </div>  
</nav>
 <!--**************************************************************************************************************************
    	***********************************************************PHP CODE****************************************************
    	************************************************************************************************************************-->

<?php
if (isset($_REQUEST["post"])) 
{
	$name=$_POST["pname"];
	$bldgrp=$_POST["bldgrp"];
	$city=$_POST["city"];
	$district=$_POST["district"];
	$hospital=$_POST["hospital"];
	$contact=$_POST["contact"];

	$conn=mysql_connect("127.0.0.1","root","");
	mysql_select_db("dol",$conn);
	if(mysql_query("insert into postrequest values('$name','$bldgrp','$city','$district','$hospital',$contact)"))
	{
	?>

	<div class="container-fluid" id="success">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="card-block">
							<h3 class="card-header bg-info">Donation Request Posted</h3>
							<div class="card-body">
								<p>Your Donation request will be posted on our website's notification panel </p>
							</div>
							<center><a href="index.html" class="btn btn-info">GO TO HOMEPAGE</a></center>
						</div>
					</div>
				</div>
	</div>

	<?php	
		mysql_select_db("dol",$conn);
	
	$result= mysql_query("select name,bldgrp,contact,email from register where bldgrp='$bldgrp' and district='$district' and city='$city'");
	if(($rows=mysql_fetch_array($result)))
	{
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-xs-12">
		<table class="table table-dark table-hover">
			<tr>
				<th>NAME</th>
				<th>BLOOD GROUP</th>
				<th>CONTACT</th>
				<th>EMAIL</th>
			</tr>
		<?php	
		while($rows=mysql_fetch_array($result))
		{
			#echo "<tr><td>".$rows["name"]."</td></td>".$rows["bldgrp"]."</td></tr>".$rows["contact"]."</td></tr>".$rows["email"]."</td></tr>";		
			?>
			<tr>
				<td><?php echo $rows["name"]; ?></td>
				<td><?php echo $rows["bldgrp"]; ?></td>
				<td><?php echo $rows["contact"]; ?></td>
				<td><?php echo $rows["email"]; ?></td>
			</tr>

		<?php
		}
		?>
		</table>
		</div>
		</div>
		</div>
		<?php
	}
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