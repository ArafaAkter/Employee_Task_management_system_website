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

    <link rel="stylesheet" href="../css/user_admin_dashboard.css">
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- BootStrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3>ETMS</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto">
            <h3>Update Status</h3>
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
                   <input type="submit" class="btn-btn-warning" name="update_status" value="Update">

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