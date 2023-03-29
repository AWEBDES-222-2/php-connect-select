<?php include("inc/header.php"); ?>

<div class="container p-3">
    <h3>All Users</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
            $sql = "SELECT * FROM tbl_student";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row["userid"];?></th>
                    <td><?php echo $row["first_name"];?></td>
                    <td><?php echo $row["middle_name"];?></td>
                    <td><?php echo $row["last_name"];?></td>
                    <td><a class="btn btn-primary" href="profile.php?userid=<?php echo $row["userid"];?>">View Student</a></td>
                </tr>
                
            <?php 
            }
            } else {
            echo "<h3>No records found!</h3>";
            }

            ?>
            
        
        </tbody>
    </table>
</div>

<?php include("inc/footer.php"); ?>