<?php
   session_start();
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");

    if(isset($_POST['submit_leave'])){
      $query = "insert into leaves values(null,$_SESSION[uid],'$_POST[subject]','$_POST[message] ,'No action')";
      $query_run = mysqli_query($connection,$query);
      if($query_run){
            echo "<script type='text/javascript'>
            alert('form submitted succesfully...');
            window.location.href = 'user_dashboard.php';
           </script>";
        }
       else{
         echo "<script type='text/javascript'>
            alert('Error...please try again');
            window.location.href = 'user_dashboard.php';
           </script>";
        }
  }
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
<body style="background-color:#355764;" ><center>
      <h3 style="color: whitesmoke; padding-top: 20px;">Your leave applications</h3><br>
        <table class="table" style="background-color: whitesmoke; width:75vw;">
          <tr>
            <th>s.no</th>
            <th>subject</th>
            <th>message</th>
            <th>status</th>
          </tr>
          <?php
          $sno=1;
              $query = "select * from leaves where uid = $_SESSION[uid]";
              $query_run = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                  <td><?php echo $sno; ?></td>
                  <td><?php echo $row['subject']; ?></td>
                  <td><?php echo $row['message']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  
                </tr>
                <?php
                $sno = $sno +1;
              }
              ?>
        </table>
  </center>    
</body>
</html>