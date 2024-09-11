<?php
session_start();
 include('../includes/connection_db.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Status</title>
</head>
<body>
    <center><h3>Your Leave Applications</h3></center><br>
    <table class="table" style="background-color: white;width:75vw;">
    <tr>
        <th>S.No</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
    </tr>
    <?php
    $sno = 1;
    $query = "SELECT * FROM leaves1 WHERE uid = $_SESSION[uid]";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
        <td><?php echo $sno; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['status']; ?></td>
        </tr>
        <?php
        $sno++;
    }
    
    ?>
    </table>
</body>
</html>