<?php include("inc/header.php"); ?>

<?php 
    if(isset($_GET['userid'])){ //check if there is an ID being passed
        $userid = $_GET['userid'];
        
        $sql = "SELECT * FROM tbl_student WHERE userid = $userid";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $studentid = $row['userid'];
            $fullname = $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
            $address = $row['address'];
        }
        } else {
            echo "<h3>No records found!</h3>";
        }
    
    }else{
        die(mysqli_connect_error());
    }
                
   
?>

<div class="container p-3">
    <div class="row">
        <div class="col">
            <a href="users.php" class="btn btn-primary">Back</a>
        </div>
        <div class="col text-end">
            <p>Welcome <strong><?php echo $fullname;?>!</strong></a>
        </div>
    </div>
    
    <table class="table">
        <tr>
            <td>Full Name</td>
            <td><span class="badge bg-success"><?php echo $fullname;?></span></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><span class="badge bg-success"><?php echo $address;?></span></td>
        </tr>
    </table>
   
</div>

<?php include("inc/footer.php"); ?>