<?php
	
$con =mysqli_connect("localhost","root","mysql","tseccodestorm") or die(mysqli_error($con));
session_start();
if(isset($_SESSION["logged_in"])){
	$User_id= $_SESSION["User_Email"];
}

$result = mysqli_query($con,"SELECT * FROM user WHERE Email = '".$User_id."'");
$row=mysqli_fetch_assoc($result);

$fname=$row['First_Name'];
$mname=$row['MiddleName'];
$lname=$row['Last_Name'];
$gender=$row['Gender'];
$contact=$row['Phone'];
$email=$row['Email'];
$pwd=$row['Password'];
$caddress=$row['Address'];
$state=$row['State'];
$religion=$row['Religion'];
$caste=$row['Caste'];
$income=$row['Income'];
$age=$row['Age'];
$occupation=$row['Occupation'];
?>
<!doctype HTML>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<style>
		a:hover{
		color: blue;
		}
		</style>
		
		<style>
		.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		height: 20px;
		width: 100%;
		background-color: #1a1a1a;
		color: white;
		text-align: center;
		}
		</style>
		<style>
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
		.navbar-inverse { margin : 0;}
		.user-row {
		margin-bottom: 14px;
		}
		.user-row:last-child {
		margin-bottom: 0;
		}
		.dropdown-user {
		margin: 13px 0;
		padding: 5px;
		height: 100%;
		}
		.dropdown-user:hover {
		cursor: pointer;
		}
		.table-user-information > tbody > tr {
		border-top: 1px solid rgb(221, 221, 221);
		}
		.table-user-information > tbody > tr:first-child {
		border-top: 0;
		}
		.table-user-information > tbody > tr > td {
		border-top: 0;
		}
		.toppad
		{margin-top:20px;
		}
		</style>
		<style>
		.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #0d0d0d;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
		}
		.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 18px;
		color: white;
		display: block;
		transition: 0.3s;
		}
		.sidenav a:hover {
		color: blue;
		}
		.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
		}
		@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
		}
		</style>
		<script>
		$(document).ready(function() {
		var panels = $('.user-infos');
		var panelsButton = $('.dropdown-user');
		panels.hide();
		//Click dropdown
		panelsButton.click(function() {
		//get data-for attribute
		var dataFor = $(this).attr('data-for');
		var idFor = $(dataFor);
		//current button
		var currentButton = $(this);
		idFor.slideToggle(400, function() {
		//Completed slidetoggle
		if(idFor.is(':visible'))
		{
		currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
		}
		else
		{
		currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
		}
		})
		});
		$('[data-toggle="tooltip"]').tooltip();
		$('button').click(function(e) {
		e.preventDefault();
		alert("This is a demo.\n :-)");
		});
		});
		</script>
	</head>
	<body style="background-color:#f2f2f2">
		<!-- Nav Bar Starts-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<div style="float:right";>
						
					</div>
				</div>
				<div class="nav navbar-nav navbar" id="myNavbar">
					<div class="nav navbar-nav navbar">
						<!-- Side bar starts-->
						
						<?php
						
						echo '<div id="mySidenav" class="sidenav">';
							echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
							echo '<a href="">Upload Documents</a>';
							echo '<a href="user_profile.php">Your Profile</a>';
						echo '</div>';
						?>
						
						<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>
						<script>
						function openNav() {
						document.getElementById("mySidenav").style.width = "250px";
						}
						function closeNav() {
						document.getElementById("mySidenav").style.width = "0";
						}
						</script>
						<!-- side bar ends-->
					</div>
					<a class="navbar-brand" href="#" style="padding-left:50px;color:white;">Scheme Portal</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="indexx.html">Home</a></li>
					<li><a href="#" class="blue">Services</a></li>
					<li><a href="#" class="blue">About Us </a></li>
					<li><a href="profile.php" class="blue"><span class="glyphicon glyphicon-user"></span><?php echo " ".$fname ?></a></li>
					<li><a href="logout.php" class="blue"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Nav Bar Ends-->
	
	<div class="container" style="width:100%">
		<div class="row">
			<br>
			<br>
			<!--<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
				<A href="editprofile.php" >Edit Profile&nbsp&nbsp</A>
				<A href="home.php" >Logout</A>-->
				<br>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $fname." ".$lname ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center" >
								<?php echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="img/profile.jpg"';?>
							</div>
							<div class=" col-md-9 col-lg-9 ">
								<table class="table table-user-information">
									<tbody>
										
										<tr>
											<td>Age</td>
											<td><?php echo $age ?></td>
										</tr>
										
										<tr>
											<tr>
												<td>Gender</td>
												<td><?php echo $gender ?></td>
											</tr>
											<tr>
												<td>Home Address</td>
												<td><?php echo $caddress ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><?php echo $email ?></td>
											</tr>
											<tr>
												<td>Phone Number</td>
												<td><?php echo $contact ?></td>
												
											</tr>
											<tr>
												<td>Caste</td>
												<td><?php echo $caste ?></td>
												
											</tr>
											<tr>
												<td>Religion</td>
												<td><?php echo $religion ?></td>
												
											</tr>
											<tr>
												<td>State</td>
												<td><?php echo $state ?></td>
												
											</tr>
											<tr>
												<td>Income</td>
												<td><?php echo $income ?></td>
												
											</tr>
										</tbody>
									</table>
									
									<a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
									<a href="logout.php" class="btn btn-danger">Log Out</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>