<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
     <!-- BootStrap CDN CSS-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <h3>Create a new Task</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Select User:</label>
                    <select class="form-control" name="id">
                        <option>
                            -Select-
                        </option>
                        <?php
                            include('../includes/connection_db.php');
                            $query = "SELECT uid,name FROM users";
                            $query_run = mysqli_query($connection,$query);
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <option value="<?php echo $row['uid']; ?>"> <?php echo $row['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>

                </div>
                   <div class="form group">
                    <label>Description: </label>
                    <textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the task"></textarea>
                   </div> 
                   <div class="form-group">
                    <level>Start Date:<level>
                    <input type="date" class="form-control" name="start_date">
                   </div>
                   <div class="form-group">
                    <level>End Date:<level>
                    <input type="date" class="form-control" name="end_date">
                   </div>
                   <input type="submit" class="btn-btn-warning" name="create_task" value="Create">
            </form>

        </div>

    </div>

    <!-- Bootstrap CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>