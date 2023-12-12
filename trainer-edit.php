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

    <title>Trainer Edit</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Trainer 
                            <a href="trainer-index.php" class="btn btn-danger float-end">Go Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['Trainer_ID'])){
                            $trainerid=mysqli_real_escape_string($con,$_GET['Trainer_ID']);
                            $query="SELECT * FROM trainer WHERE Trainer_ID='$trainerid' ";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){
                                $trainer=mysqli_fetch_array($query_run);
                                ?>
                                <form action="codeT.php" method="POST">
                                    <input type="hidden" name="trainerid" value="<?=$trainer['Trainer_ID']; ?>">

                                    <div class="mb-3">
                                        <label>Trainer ID</label>
                                        <input type="text" name="tid" value="<?=$trainer['Trainer_ID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Trainer Name</label>
                                        <input type="text" name="tname" value="<?=$trainer['Trainer_Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <input type="text" name="phone" value="<?=$trainer['Phone_Number'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$trainer['Address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <input type="text" name="gymid" value="<?=$trainer['GYM_ID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Customer Name</label>
                                        <input type="text" name="name" value="<?=$trainer['Customer_Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_trainer" class="btn btn-primary">Update Trainer</button>
                                    </div>

                                    </form>
                                <?php
                            }
                            else{
                                echo "<h4>No Such ID found!</h4>";
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