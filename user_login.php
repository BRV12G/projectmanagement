
<?php
    session_start();
    include('includes/connection.php');
    if(isset($_POST['userlogin']))
    {
       $query = "select email,password,name,uid from users where  (email = '$_POST[email]' AND password = '$_POST[password]')";
       $query_run = mysqli_query($connection,$query);
       if(mysqli_num_rows($query_run)){
           while ($row = mysqli_fetch_assoc($query_run)) {
           	    $_SESSION['email'] = $row['email'];
           	    $_SESSION['name'] = $row['name'];
           	    $_SESSION['uid'] = $row['uid'];
           }
           echo "<script type='text/javascript'>
           	window.location.href = 'user_dashboard.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
           	alert('please enter correct details.');
           	window.location.href = 'user_login.php';
           </script>";
        }
    }
 ?>

 <!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>PROJECT MANAGEMENT SYSTEM</title>
	 <!-- jquery file -->
	 <script src="includes/jquery=3.7.1.js"></script>
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body style="background-color:#355764;" >
	 <div class="row">
	 	<div class="col-md-3 m-auto" id="login_home_page">
	 		<center><h3 style="background-color: #5A8F7B; padding: 5px; width: 20vw;"> User Login </h3> </center><br>
	 		<form action="" method="post">
	 			<div class="form-group">
	 				<input type="email" name="email" class="form-control" placeholder="Enter email" style="padding-bottom: 10px;" required>
	 			</div><br>
	 			<div class="form-group">
	 				<input type="password" name="password" class="form-control" placeholder="Enter password" style="padding-bottom: 10px;"required>	
	 			</div><br>
	 			<div class = "form-group">
	 				<center><input type="submit" name="userlogin" value="login" class ="btn btn-warning"></center>	
	 			</div><br><br>
	 		</form>
	 		<center><a href="index.php" class="btn btn-danger">Go To Home Page </a></center>
	 	</div>
	 </div>
</body>
</html>
