 <?php
    include ('./includes/connection_db.php');

    if(isset($_POST['adminRegister'])){
        $query = "INSERT INTO admins VALUES(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo"<script type = 'text/javascript'>
            alert('admin added');
            window.location.href = './index.php';
            </script>";
        }
        else{
            
            echo"<script type = 'text/javascript'>
            alert('Error');
            window.location.href = 'admin_register.php';
            </script>";
        }
    } 

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Registration</title>

         <!-- External css -->
        <link rel="stylesheet" href="login_register.css">
    
    </head>
<body>
    <div class="form">
    <form action="" method="POST">
        <h1>Admin Registration</h1>
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
        <p>You have an account? <a href="admin_login.php">Login</a></p>
        </div>
        
        <div class="go_home">
        <a href="index.php">Go Home</a>
        </div>

    </form>
   </div>
</body>
</html>
