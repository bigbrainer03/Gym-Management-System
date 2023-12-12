<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Member Edit</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Member 
                            <a href="index.php" class="btn btn-danger float-end">Go Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['Customer_Name'])){
                            $customername=mysqli_real_escape_string($con,$_GET['Customer_Name']);
                            $query="SELECT * FROM customer WHERE Customer_Name='$customername' ";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){
                                $member=mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="customername" value="<?=$member['Customer_Name']; ?>">

                                    <div class="mb-3">
                                        <label>Member Name</label>
                                        <input type="text" name="name" value="<?=$member['Customer_Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email ID</label>
                                        <input type="email" name="email" value="<?=$member['email_id'];?>" class="form-control">
                                    </div>
                                     <div class="mb-3">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" value="<?=$member['DOB'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <input type="text" name="phone" value="<?=$member['Phone_Number'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$member['Address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <input type="text" name="gymid" value="<?=$member['GYM_ID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="memtype">Membership Type</label>
                                        <select name="memtype" name="memtype" value="<?=$member['Membership_name'];?>" class="form-control">
                                        <option value="Basic">Basic</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Annual">Annual</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_member" class="btn btn-primary">Update Member</button>
                                    </div>

                                    </form>
                                <?php
                            }
                            else{
                                echo "<h4>No Such Name found!</h4>";
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>