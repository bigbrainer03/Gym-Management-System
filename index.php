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

    <title>Member CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Details
                            <a href="member-create.php" class="btn btn-primary float-end">Add Members</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Gym ID</th>
                                    <th>Membership Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM customer";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $customer)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $customer['Customer_Name']; ?></td>
                                                <td><?= $customer['DOB']; ?></td>
                                                <td><?= $customer['email_id']; ?></td>
                                                <td><?= $customer['Phone_Number']; ?></td>
                                                <td><?= $customer['Address']; ?></td>
                                                <td><?= $customer['GYM_ID']; ?></td>
                                                <td><?= $customer['Membership_name']; ?></td>
                                                <td>
                                                    <a href="member-view.php?Customer_Name=<?= $customer['Customer_Name']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="member-edit.php?Customer_Name=<?= $customer['Customer_Name']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_member" value="<?=$customer['Customer_Name'];?>" class="btn btn-danger btn-sm">Delete</button>
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