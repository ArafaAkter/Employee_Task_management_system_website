<?php
    include ('includes/connection_db.php');

    if(isset($_POST['userRegister'])){
        $query = "INSERT INTO users VALUES(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo"<script type = 'text/javascript'>
            alert('User added');
            window.location.href = 'index.php';
            </script>";
        }
        else{
            
            echo"<script type = 'text/javascript'>
            alert('Error');
            window.location.href = 'user_register.php';
            </script>";
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="form">
<form action="" method="POST">
        <h1>User Registration</h1>

        <div class="input-box">
        <input type="text" name ="name" placeholder="Enter Name" required>
        </div>

        <div class="input-box">
        <input type="email" name ="email" placeholder="Enter Email" required>
        </div>

        <div class="input-box">
        <input type="password" name ="password" placeholder="Enter Password" required>
        </div>
        <div class="input-box">
        <input type="text" name ="mobile" placeholder="Enter Mobile No." required>
        </div>

        <div>
        <input type="submit" name ="adminRegister"  value="Register" class="register-btn"><br>
        </div>

        <div class="login">
        <p>You have an account? <a href="user_login.php">Login</a></p>
        </div>

        <div>
        <a href="index.php">Go Home</a>
        </div>


    </form>
   </div>
</body>
</html>




