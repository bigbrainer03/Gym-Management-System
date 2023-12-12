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

    <title>Equipment Details</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <h2>ADMIN</h2>
                    <div class="card-header">
                        <style>
                            .btn-basic {
                                border: 1px solid #000; /* Set your desired border color */
                                padding: 10px 20px; /* Adjust padding as needed */
                                text-decoration: none;
                                color: #000; /* Set your desired text color */
                            }
                            .btn-basic:hover{
                               background: #959595; 
                               transition: 0.4s;
                            }
                            </style>

                        <a href="index.php" class="btn btn-basic">Member Details </a>
                        <a href="trainer-index.php" class="btn btn-basic">Trainer Details</a>
                        <a href="equipment-index.php" class="btn btn-basic">Equipment Details</a>
                            <a href="equipment-create.php" class="btn btn-primary float-end">Add Equipment</a>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Gym ID</th>
                                    <th>Equipment ID</th>
                                    <th>Equipment Name</th>
                                    <th>Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM equipment";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $equipment)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $equipment['id']; ?></td>
                                                <td><?= $equipment['GYM_ID']; ?></td>
                                                <td><?= $equipment['Equipment_id']; ?></td>
                                                <td><?= $equipment['Equipment_Name']; ?></td>
                                                <td><?= $equipment['Purchase_Date']; ?></td>
                                                <td>
                                                    <a href="equipment-view.php?id=<?= $equipment['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="equipment-edit.php?id=<?= $equipment['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="codeE.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_equipment" value="<?=$equipment['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>