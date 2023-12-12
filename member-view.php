<?php
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

    <title>Member View</title>
</head>
<body>
  
    <div class="container mt-4">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Details
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
                                        <p class="form-control">
                                            <?=$member['Customer_Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email ID</label>
                                        <p class="form-control">
                                            <?=$member['email_id'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Date of Birth</label>
                                        <p class="form-control">
                                            <?=$member['DOB'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <p class="form-control">
                                            <?=$member['Phone_Number'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$member['Address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <p class="form-control">
                                            <?=$member['GYM_ID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="memtype">Membership Type</label>
                                        <p class="form-control">
                                            <?=$member['Membership_name'];?>
                                        </p>
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