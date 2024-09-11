<?php
session_start();
    include 'includes/connection_db.php';
    if(isset($_POST['adminlogin']))
    {
      $query = "SELECT email,password,name FROM admins WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
      $query_run = mysqli_query($connection,$query);
      if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
          $_SESSION['email'] = $row['email'];

        }
        echo "<script type = 'text/javascript'>
        window.location.href = './admin_details/admin_dashboard.php';
        </script>";
      }
      else{
        echo "<script type = 'text/javascript'>
        alert('please enter correct information');
        window.location.href = './admin_login.php';
        </script>";
      }
          
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="form">
   <form action="" method="POST">
        <h1>Admin Login</h1>

        <div class="input-box">
        <input type="email" name ="email" placeholder="Enter Email" required>
        </div>

        <div class="input-box">
        <input type="password" name ="password" placeholder="Enter Password" required>
        </div>

        <div>
        <input type="submit" name ="adminlogin"  value="Login" class="login-btn">
        </div>

        <div>
        <a href="index.php">Go Home</a>
        </div>

    </form>
   </div>
</body>
</html>