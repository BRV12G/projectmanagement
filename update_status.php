<?php
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");

    if(isset($_POST['edit_task'])){

    	$query = "update task set status = '$_POST[status]' where tid = $_GET[id]";
    	$query_run = mysqli_query($connection,$query);
    	if($query_run){
    		echo "<script type='text/javascript'>
           	  alert('status updated succesfully');
           	  window.location.href = 'user_dashboard.php';
              </script>";
    	}
    	else
    	{
    		echo "<script type='text/javascript'>
           	  alert('please try again');
           	  window.location.href = 'user_dashboard.php';
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
	 <!-- header code starts -->
	 <div class="row" id="header" style="background-color: skyblue; font-size: 30px;">
	 	<div class="col-md-12">
	 		<h3><i class="fa fa-solid fa-list" style="padding-right: 15px;"></i>Project Managemnt system</h3>
	 	</div>	
	 </div>
	 <div class="row">
	 	<div class="col-md-4 m-auto" style="color: white;"><br>
	 		<h3 style="color: white;">update the task</h3><br>
	 		<?php 
	 		   $query = "select * from task where tid = $_GET[id]";
	 		   $query_run = mysqli_query($connection,$query);
	 		   while($row = mysqli_fetch_assoc($query_run)){
	 		       ?> 
	 	        <form action="" method="post">
	 			 <div class="from-group">
	 				<input type="hidden" name="id" class="form-control" value="" required>
	 			</div>
	 			<div class="form-group">
 				<select class="form-control" name="status">
 					<option>-select-</option>
 					<option>-in-progress-</option>
 					<option>-completed-</option>
 					
 				</select>
 				
 	</div><br><br><br><br>
 	
 			<input type="submit" class="btn btn-warning" name="edit_task" value="updatestatus" required="" >
	 		</form>
	 	<?php
	 	  }
	    ?>
	 	</div>
	 	
	 </div>
</body>
</html>
