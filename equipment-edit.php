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

    <title>Equipment Edit</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Equipment Details 
                            <a href="equipmet-index.php" class="btn btn-danger float-end">Go Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $id=mysqli_real_escape_string($con,$_GET['id']);
                            $query="SELECT * FROM equipment WHERE ID='$id' ";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){
                                $equip=mysqli_fetch_array($query_run);
                                ?>
                                <form action="codeE.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$equip['id']; ?>">
                                    <div class="mb-3">
                                        <label>ID</label>
                                        <input type="text" name="id" value="<?=$equip['id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <input type="text" name="gymid" value="<?=$equip['GYM_ID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Equipment ID</label>
                                        <input type="text" name="eid" value="<?=$equip['Equipment_id'];?>" class="form-control">
                                    </div>
                                     <div class="mb-3">
                                        <label>Equipment Name</label>
                                        <input type="text" name="ename" value="<?=$equip['Equipment_Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Purchase Date</label>
                                        <input type="date" name="purchase" value="<?=$equip['Purchase_Date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_equipment" class="btn btn-primary">Update Equipment</button>
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