<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	<title>User Dashboard</title>
	<!-- jquery file -->
	 <script src="includes/jquery=3.7.1.js"></script>
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body style="background-color:#355764;" >
      <!-- header starts here -->
      <div class="row" id="header" style="background-color: #81CACF;
	height: 8vh;
	width: 101vw;
	padding-top: 10px;
	padding-bottom: 5px;
	padding-left: 50px;">
      	<div class="col-md-12">
      		<div class="col-md-4" style="display: inline-block;">
      			<h3>Project management system</h3>	
      		</div>
      		<div class="col-md-6" style="display: inline-block; text-align: right;">
      			<b>Email:</b> <?php echo $_SESSION['email']; ?> 
      			<span style="margin-left: 25px;"><b> Name:</b> <?php echo $_SESSION['name']; ?> </span>
      			
      		</div>
      	</div>
      </div>
      <!-- header code ends -->
      <div class="row">
      	<div class="col-md-2" id="left_sidebar" style="
      	margin-top: 50px;
      	  width: 13vw;
      	  height: 30vh;
      	  display: inline-block;">
      		<table class="table">
      			<tr  style=" background-color: #fff;color: black;font-size: 18px;script">
      				<td style=" text-align: center;">
      					<a href="user_dashboard.php" type="button" id="logout_link" style="text-decoration: none;
      					    color:orange;">Dasboard</a>
      				</td>
      			</tr>
      			<tr>
      				<td style=" text-align: center;">
      					<a href="update_task.php" type="button" class="">update task</a>
      				</td>
      			</tr>
      			<tr>
      				<td style=" text-align: center;">
      					<a href="apply_leave1.php" type="button" class="" id="apply_leave1">apply leave</a>
      				</td>
      			</tr>
      			<tr>
      				<td style=" text-align: center;">
      					<a href="view_leavestatus.php" type="button" class="" id="view_leave">leave status</a>
      				</td>
      			</tr>
      			<tr>
      				<td style=" text-align: center;">
      					<a href="logout.php" type="button" id="logout_link" style="text-decoration: none;
      					    color:orange;">logout</a>
      				</td>
      			</tr>
      		</table>
      	</div>
      	<div class="col-md-10" id="right_sidebar" style="padding: 35px; height: 75vh; width: 75vw; display: inline-block;color: white;">
      		<h4>INSTRUCTIONS FOR EMPLOYEES</h4>
      		<ul style="line-height: 1cm; list-style-type: none;">
      			<li>1.All employees should mark their attendanc daily.</li>
      			<li>2.Everyone must complete the task assigned to them</li>
      			<li>3.kindly maintain the decorum of the office</li>
      			<li>4.keep office and your area neat and clean</li>
      		</ul>
      	</div>
      </div>
</body>
</html>