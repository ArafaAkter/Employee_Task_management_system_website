<?php
    include('../includes/connection_db.php');
    $query = "UPDATE leaves1 SET status = 'Approved' WHERE lid = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('leave status updated');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('Error');
        window.location.href = 'admin_dashboard.php';
        </script>";
    }
?>