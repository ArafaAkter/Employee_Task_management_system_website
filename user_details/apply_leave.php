<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Leave</title>

    <link rel="stylesheet" href="../css/user_admin_dashboard.css">
    <!-- Bootstrap CDN CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3>Apply Leave</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
               <div class="form-group">
                    <input type="text" class="form-control" name ="subject" placeholder="Enter Subject">
               </div> 
               <div class="form_group">
                    <textarea class="form-control" rows="5" cols="50" name="message" placeholder="Type Message.."></textarea>
                    <input type="submit" class="btn btn-warning" name="submit_leave">
               </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>