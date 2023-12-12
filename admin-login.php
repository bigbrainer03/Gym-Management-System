<?php
    session_start();

?>

<span style="font-family: verdana, geneva, sans-serif;"></span><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
        <!-- Font Awesome Iocns cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <title>Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="black-bg">
    <header class="header">
        <div class="contain">
            <h2>ADMIN</h2>
            <div class="login-body">
                <form action="admin.php" method="POST">
                    <div class="userid">
                        <label>User ID</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="pass">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control">    
                    </div>
                    <div class="sub">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>

                    </div>
                </form>
            </div>
        </div>

    </header>

</body>
</html>