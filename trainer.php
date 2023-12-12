<?php
session_start();
require 'dbcon.php';
?>

<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FitNess - Home | By Code Info</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!-- Font Awesome Iocns cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <header class="header">
            <a href="index.html" class="logo">
                <i class="fas fa-dumbbell"></i>FitNess
            </a>
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="services.html">Services</a>
                <a href="#footer">Contact</a>
                <a href="pricing.html">Pricing</a>
                <a href="#">|</a>
                <a href="admin-login.php">Login</a>
                <a href="member-create.php" class="btn">Sign Up</a>
            </nav>
        </header>

        <div class="container">
            <style>
                h2{
                    font-weight: bold;
                    margin-top: 50px;
                }
            </style>
            <h2>Trainers</h2>
            <?php
                $query="SELECT * FROM trainer";
                $result=mysqli_query($con,$query);
            ?>
            <style>
                .table1 {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    border-collapse: collapse;
                    width: 1400px;
                    height: 200px;
                    border: 1px solid #bdc3c7;
                    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
                    background-color: #000;
                    margin-top: 150px;
                    }

                    tr {
                    transition: all .2s ease-in;
                    cursor: pointer;
                    }

                    th,     
                        td {
                            padding: 25px;
                            text-align: left;
                            border-bottom: 1px solid #ddd;
                            color: #fff;
                            font-size:15px;
                        }
                        
                        #header {
                            background-color: rgba(255, 255, 255, 0.2);
                            color: #fff;
                        }
                        tr:hover {
                            background-color: #959595;
                            transform: scale(1.02);
                            box-shadow: 2px 2px 12px rgba(255, 255, 255, 0.2), -1px -1px 8px rgba(255, 255, 255, 0.2);
                    }
            </style>
            <table class="table1">
                <tr id="header">
                    <th>Trainer ID</th>
                    <th>Trainer Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Gym ID</th>  
                    <th>Customer Name</th>  
                </tr>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Trainer_ID'] . "</td>";
                    echo "<td>" . $row['Trainer_Name'] . "</td>";
                    echo "<td>" . $row['Phone_Number'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['GYM_ID'] . "</td>";
                    echo "<td>" . $row['Customer_Name'] . "</td>";
                    echo "</tr>";
                    }
                ?>
            </table>
        </div>

        <footer id="footer">
                <div class="footerContainer">
                    <div class="SocialIcons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-google-plus"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footerNav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                    </ul>
                </div>
                <div class="footerbottom">
                    <p>
                        Copyright &copy;2023; Designed by <span class="designer">Abishek</span>
                    </p>
    
                </div>
            </footer>
</body>
</html></span>
