<?php 
   session_start();
   
   include('../includes/connection_db.php');

   if(isset($_POST['submit_leave'])){
    $query = "INSERT INTO leaves1 VALUES(null,$_SESSION[uid],'$_POST[subject]','$_POST[message]','NO Action')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('submitted');
        window.location.href = 'user_dashboard.php';
        </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Error');
        window.location.href = 'user_dashboard.php';
        </script>";
    }

   }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../admin_user.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- jquery code -->
     <!-- show data in right sidebar -->

     <script type="text/javascript">
        $(document).ready(function(){
           $("#update_task").click(function(){
            event.preventDefault(); 
            $("#right_sidebar").load("update_task.php");
           }); 
        });

        $(document).ready(function(){
           $("#apply_leave").click(function(){
            event.preventDefault(); 
            $("#right_sidebar").load("apply_leave.php");
           }); 
        });

        $(document).ready(function(){
           $("#leave_status").click(function(){
            event.preventDefault(); 
            $("#right_sidebar").load("leave_status.php");
           }); 
        });
        </script>

</head>
<body>
<!-- header -->
<div class="container">
   <div class="row align-items-center">
            <div class="col">
            <h2>TskTrack</h2>
            </div>
            <div class="col text-end">
                 <b><?php echo $_SESSION['email']; ?></b>  
            </div>
        </div>
</div>
    <div class="user_dashboard">
        <h2>Welcome To User Dashboard......!</h2>
    </div>
    <hr>

<!-- content -->
<!-- <!left sidebar --> 

<div class="row">
    <div class="col-md-3" id="left-sidebar">
        <table class="table">
            <tr>
                <td style="text-align: center;">
                <a href="user_dashboard.php" type="button" class="link">
                    <i class="fas fa-home fa-3x"></i>
                    <br> Dashboard
                </a>
                 </td>

            </tr>
            <tr>
                <td style="text-align: center;">
                    <a href="update_task.php" type="button" class="link" id="update_task">
                    <i <i class="fas fa-tasks fa-3x"></i>
                    <br>Update Task</a>
                </td>
            </tr>
           
            <tr>
                <td style="text-align: center;">
                    <a type="button" class="link" id="apply_leave">
                        <i class="fas fa-calendar-alt fa-3x"></i> 
                        <br>Apply Leave</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <a type="button" class="link" id="leave_status">
                    <i class="fas fa-clock fa-3x"></i>
                    <br>Leave Status</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <a href="../logout.php" type="button" class="link">
                    <i class="fas fa-sign-out-alt fa-2x"></i>
                  <br> Logout</a>
                </td>
            </tr>

        </table>
    </div>

<!-- right sidebar -->
    <div class="col-md-8" id="right_sidebar" style="color: white;"> 
        <h4>Instruction for Employees</h4>
        <ul>
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, magni omnis. Dicta, earum iure consequuntur nam harum commodi ipsum dolorem eveniet iste sint repellat voluptate laborum nulla pariatur ea natus?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sunt, omnis tenetur iure culpa praesentium. Dolor totam, enim, commodi, incidunt sunt sequi quidem quaerat vero repudiandae deserunt reprehenderit provident possimus!</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quae repudiandae hic adipisci blanditiis. Repellat sequi non in. Soluta quam assumenda distinctio laudantium. Adipisci facilis quo deleniti commodi, deserunt assumenda?</li>
        </ul>
    </div>
</div>

<!-- Bootstrap CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
