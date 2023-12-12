<?php 
session_start();
require 'dbcon.php';


if(isset($_POST['delete_trainer'])){
    $trainerid=mysqli_real_escape_string($con,$_POST['delete_trainer']);
    $query="DELETE FROM trainer WHERE Trainer_ID='$trainerid'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Trainer Deleted Successfully";
        header("Location: trainer-index.php");
        exit(0);
    }else{
        $_SESSION['message']="Trainer Not Deleted";
        header("Location: trainer-index.php");
        exit(0);
    }
}


if(isset($_POST['update_trainer'])){
    $trainerid=mysqli_real_escape_string($con,$_POST['trainerid']);
    $tid=mysqli_real_escape_string($con,$_POST['tid']);
    $tname=mysqli_real_escape_string($con,$_POST['tname']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $name=mysqli_real_escape_string($con,$_POST['name']);

    $query="UPDATE trainer SET Trainer_ID='$tid', Trainer_Name='$tname', Phone_Number='$phone', Address='$address', GYM_ID='$gymid', Customer_Name='$name' WHERE Trainer_ID='$trainerid'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Trainer Updated Successfully";
        header("Location: trainer-index.php");
        exit(0);
    }else{
        $_SESSION['message']="Trainer Not Updated";
        header("Location: trainer-index.php");
        exit(0);
    }

}


if(isset($_POST['submit'])){
    $tid=mysqli_real_escape_string($con,$_POST['tid']);
    $tname=mysqli_real_escape_string($con,$_POST['tname']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $name=mysqli_real_escape_string($con,$_POST['name']);

    $query= "INSERT INTO trainer (Trainer_ID,Trainer_Name,Phone_Number,Address,GYM_ID,Customer_Name) VALUES ('$tid','$tname','$phone','$address','$gymid','$name')";

    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Trainer Created Successfully";
        header("Location: trainer-create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Trainer Not Created";
        header("Location: trainer-create.php");
        exit(0);
    }
}

?>