<?php
    include('../includes/connection_db.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h3>All Leave Applications</h3></center>
    <table class="table" style="background-color: white; width: 75vw;">
        <tr>
            <th>S.No</th>
            <th>User</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
        $sno = 1;
        $query = "SELECT *FROM leaves1";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
                <td><?php echo $sno; ?></td>
                <?php 
                $query1 = "SELECT name from users WHERE uid = $row[uid]";
                $query_run1 = mysqli_query($connection,$query1);
                while($row1 = mysqli_fetch_assoc($query_run1)){
                    ?>
                    <td><?php echo $row1['name']; ?></td>
                    <?php
                }
                ?>
                <td><?php echo $row['subject'];?></td>
                <td><?php echo $row['message'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><a href="approve_leave.php?id=<?php echo $row['lid']?>">Approve</a> | 
                <a href="reject_leave.php?id=<?php echo $row['lid']?>">Reject</a></td>
            </tr>
            <?php
            $sno++;
        }
        
        ?>
    </table>
</body>
</html>