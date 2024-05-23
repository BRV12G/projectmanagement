<?php
    include('includes/connection.php');
    if(isset(($_POST['userregistration'])))
    {
       $query = "insert into users values(null , '$_POST[name]', '$_POST[email]' , '$_POST[password]' , $_POST[phonenumber])";
       $query_run = mysqli_query($connection,$query);
       if($query_run){
           echo "<script type='text/javascript'>
           	alert('User registered succesfully...');
           	window.location.href = 'index.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
           	alert('Error...please try again');
           	window.location.href = 'register.php';
           </script>";
        }
    }
 ?>
 
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>PROJECT MANAGEMENT SYSTEM|registration page</title>
	 <!-- jquery file -->
	 <script src="includes/jquery=3.7.1.js"></script> 
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="CSS/styles.css" >
</head>
<body style="background-color:#355764;" >
	 <div class="row">
	 	<div class="col-md-3 m-auto" id="register_home_page">
	 		<center><h3 style="background-color: #5A8F7B; padding: 5px; width: 30vw;"> User Registration </h3> </center><br>
	 		<form action="" method="post">
	 			<div class="form-group">
	 				<input type="text" name="name" class="form-control" placeholder="Enter name" required>
	 			</div><br>
	 			<div class="form-group">
	 				<input type="email" name="email" class="form-control" placeholder="Enter email" style="padding-bottom: 10px;" required>
	 			</div><br>
	 			<div class="form-group">
	 				<input type="password" name="password" class="form-control" placeholder="Enter password" style="padding-bottom: 10px;"required>	
	 			</div><br>
	 			<div class="form-group">
	 				<input type="number" name="phonenumber" class="form-control" placeholder="Enter Phone Number" required>
	 			</div><br>
	 			<div class = "form-group">
	 				<center><input type="submit" name="userregistration" value="register" class ="btn btn-warning"></center>	
	 			</div><br><br>
	 		</form>
	 		<center><a href="index.php" class="btn btn-danger">Go To Home Page </a></center>
	 	</div>
	 </div>
</body>
</html>

