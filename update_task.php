<?php
    session_start();
    $connection = mysqli_connect("localhost" , "root" , "");
    $db = mysqli_select_db($connection, "pms1_db");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	<title>User Dashboard update task</title>
	<!-- jquery file -->
	 <script src="includes/jquery=3.7.1.js"></script>
	 <!-- Bootstrap fils -->
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	 <!-- external css file -->
	 <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body style="background-color:#355764;" >
     <center> <h3>Your Tasks</h3></center>
     <table class="table">
      <tr>
            <th>s.no</th>
            <th>Task id</th>
            <th>description</th>
            <th>start date</th>
            <th>end date</th>
            <th>status</th>
            <th>action </th>

      </tr>
         <?php
            $query = "select * from task where uid = $_SESSION[uid]";
            $sno = 1;
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['tid']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="update_status.php?id=<?php echo $row['tid']; ?>">update</a></td>          
                </tr>
                <?php
                $sno = $sno +1;
            }


         ?>  
     </table>
</body>
</html>