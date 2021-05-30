<!DOCTYPE html>
<html>
<head>
	<title>Unexecutable codes</title>
</head>
<body>
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
		<?php
	}
	}
}
?>



	
/*
 <?php
	$bldgrp="O+";
	$city="Ranchi";
	$district="Ranchi";
	$conn2=mysql_connect("127.0.0.1","root","");
	mysql_select_db("dol",$conn2);
	
	$result= mysql_query("select name,bldgrp,contact,email from register where bldgrp='$bldgrp' and district='$district' and city='$city'");
	if(($rows=mysql_fetch_array($result)))
	{
		?>
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
		<?php
	}
?>
*/

</body>
</html>