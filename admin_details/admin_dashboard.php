
<!-- admin create a task using create task form -->

<?php
session_start(); 
include('../includes/connection_db.php');
if(isset($_POST['create_task'])){
    $query = "INSERT INTO tasks VALUES(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('Task Created');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }else{
        echo "<script type='text/javascript'>
        alert('Error');
        window.location.href = 'create_task.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="user_admin_dashboard.css"> -->
     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

     
    <!-- BootStrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/user_admin_dashboard.css">

    <!-- jquery code -->
     <!-- show data in right sidebar -->
     <script type="text/javascript">
        $(document).ready(function(){
           $("#create_task").click(function(){
            event.preventDefault();
            $("#right_sidebar").load("create_task.php");
           }); 
        });

        $(document).ready(function(){
           $("#manage_task").click(function(){
            event.preventDefault();
            $("#right_sidebar").load("manage_task.php");
           }); 
        });

        $(document).ready(function(){
           $("#view_leave_applications").click(function(){
            event.preventDefault();
            $("#right_sidebar").load("view_leave_applications.php");
           }); 
        });
     </script>

</head>
<body>

 <!-- header -->
<div class="nav">
   <div class="header">
            <div>
            <h1>Admin Dashboard</h1>
            </div>
            <div>
                <b><?php echo $_SESSION['email'];?></b>
            </div>
        </div>
</div>

<!-- content -->
<!-- <!left sidebar --> 
<div class="row">
    <div class="col-md-2" id="left_sidebar">
        <table class="table">
            <tr>
                <td style="text-align: center;">
                    <a href="admin_dashboard.php" type="button" class="link">Dashboard</a>
                </td>
                <hr>
            </tr>

            <tr>
                <td style="text-align: center;">
                    <a href="create_task.php" type="button" class="link" id="create_task">Create Task</a>
                </td>
            </tr>
 
            <tr>
                <td style="text-align: center;">
                    <a href="manage_task.php" type="button" class="link" id="manage_task">Manage Task</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <a href="" type="button" class="link" id="view_leave_applications">Leave Application</a>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <a href="../logout.php" type="button" class="link">Logout</a>
                </td>
            </tr>

        </table>
    </div>

<!-- right sidebar -->
    <div class="col-md-10" id="right_sidebar">
        <h4>Instruction for Admin</h4>
        <ul>
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, magni omnis. Dicta, earum iure consequuntur nam harum commodi ipsum dolorem eveniet iste sint repellat voluptate laborum nulla pariatur ea natus?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sunt, omnis tenetur iure culpa praesentium. Dolor totam, enim, commodi, incidunt sunt sequi quidem quaerat vero repudiandae deserunt reprehenderit provident possimus!</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quae repudiandae hic adipisci blanditiis. Repellat sequi non in. Soluta quam assumenda distinctio laudantium. Adipisci facilis quo deleniti commodi, deserunt assumenda?</li>
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