<?php
      include('../includes/connection_db.php');
      if(isset($_POST['edit_task'])){
        $query = "UPDATE tasks SET uid = $_POST[id],description = '$_POST[description]',start_date = '$_POST[start_date]',end_date = '$_POST[end_date]'WHERE tid = $_GET[id]";
        
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type='text/javascript'>
            alert('Task Updated');
            window.location.href = 'admin_dashboard.php';
            </script>";
        }
        else{
            echo "<script type='text/javascript'>
            alert('Error');
            window.location.href = 'admin_dashboard.php';
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
<link rel="stylesheet" href="../css/user_admin_dashboard.css">
   
</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3>ETMS</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto">
            <h3>Edit Task</h3>
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
                    <label>Select User:</label>
                    <select class="form-control" name="id" required>
                        <option>
                            -Select-
                        </option>
                        <?php
                            $query1 = "SELECT uid,name FROM users";
                            $query_run1 = mysqli_query($connection,$query1);
                            if(mysqli_num_rows($query_run1)){
                                while($row1 = mysqli_fetch_assoc($query_run1)){
                                    ?>
                                    <option value="<?php echo $row1['uid']; ?>"> <?php echo $row1['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                </div>
                <div class="form-group">
                <label>Description: </label>
                <textarea class="form-control" rows="3" cols="50" name="description" required><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <level>Start Date:<level>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'];?>" required>
                   </div>
                   <div class="form-group">
                    <level>End Date:<level>
                    <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'];?>"required>
                   </div>
                   <input type="submit" class="btn-btn-warning" name="edit_task" value="Update">

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