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

    <title>Equipment View</title>
</head>
<body>
  
    <div class="container mt-4">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Equipment Details
                            <a href="equipment-index.php" class="btn btn-danger float-end">Go Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){
                            $id=mysqli_real_escape_string($con,$_GET['id']);
                            $query="SELECT * FROM equipment WHERE id='$id' ";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){
                                $equip=mysqli_fetch_array($query_run);
                                ?>
                                <form action="codeE.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$equip['id']; ?>">

                                    <div class="mb-3">
                                        <label>ID</label>
                                        <p class="form-control">
                                            <?=$equip['id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Gym ID</label>
                                        <p class="form-control">
                                            <?=$equip['GYM_ID'];?>
                                        </p>
                                    </div>
                                     <div class="mb-3">
                                        <label>Equipment ID</label>
                                        <p class="form-control">
                                            <?=$equip['Equipment_id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Equipment Name</label>
                                        <p class="form-control">
                                            <?=$equip['Equipment_Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Purchase Date</label>
                                        <p class="form-control">
                                            <?=$equip['Purchase_Date'];?>
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