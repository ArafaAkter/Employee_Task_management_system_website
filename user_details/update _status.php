<?php
      include('../includes/connection_db.php');
      if(isset($_POST['update_status'])){
        $query = "UPDATE tasks SET status = '$_POST[status]' WHERE tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Status Updated');
            window.location.href = 'user_dashboard.php';
            </script>";
        }
        else{
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
    <title>Edit Task</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- BootStrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-image: url('https://i.ibb.co.com/7yd8Z0C/pngtree-blue-abstract-background-business-image-564246.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

    </style>

   
</head>
<body>

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 m-auto">
            <h3 style="color: white;">Update Status</h3>
            <?php 
                $query = "SELECT *FROM tasks WHERE tid = $_GET[id]";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
            <form action="" method="POST">
                <div class="form-group">
                   <input type="hidden" name="id" class="form-control" value="" required> 
                </div>
                <div class="form-group">
                    <select class="form-control" name="status">
                       <option> -select-</option> 
                       <option>In-Progress</option> 
                       <option>Complete</option> 
                    </select>

                   </div>
                   <input type="submit" class="btn btn-primary" name="update_status" value="Update"style="margin-top: 5px;>
            </form>
            <?php
            }
         ?>
        </div>

    </div>

<!-- Bootstrap CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>