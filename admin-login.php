<?php
    session_start();

?>

<span style="font-family: verdana, geneva, sans-serif;"></span><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
        <!-- Font Awesome Iocns cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <title>Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="black-bg">
        <header class="header">
        <div class="contain">
             <a href="index.html" class="logo">
            <i class="fas fa-dumbbell"></i>FitNess
            </a>
        </header>
            <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>ADMIN LOGIN
                            <a href="index.html" class="btn btn-danger float-end">Go to Home</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="admin.php" method="POST">

                            <div class="mb-3">
                                <label>User Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>

</body>
</html>