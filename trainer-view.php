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

    <title>Trainer View</title>
</head>
<body>
  
    <div class="container mt-4">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Trainer Details
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
                                        <p class="form-control">
                                            <?=$trainer['Trainer_ID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Trainer Name</label>
                                        <p class="form-control">
                                            <?=$trainer['Trainer_Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <p class="form-control">
                                            <?=$trainer['Phone_Number'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$trainer['Address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <p class="form-control">
                                            <?=$trainer['GYM_ID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Customer Name</label>
                                        <p class="form-control">
                                            <?=$trainer['Customer_Name'];?>
                                        </p>
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