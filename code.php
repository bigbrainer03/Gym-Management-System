<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_member'])){
    $customername=mysqli_real_escape_string($con,$_POST['delete_member']);
    $query="DELETE FROM customer WHERE Customer_Name='$customername'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Member Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message']="Member Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_member'])){
    $customername=mysqli_real_escape_string($con,$_POST['customername']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $memtype=mysqli_real_escape_string($con,$_POST['memtype']);

    $query="UPDATE customer SET Customer_Name='$name', DOB='$dob', email_id='$email', Phone_Number='$phone', Address='$address', GYM_ID='$gymid', Membership_name='$memtype' WHERE Customer_Name='$customername'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Member Updated Successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message']="Member Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $memtype=mysqli_real_escape_string($con,$_POST['memtype']);

    $query= "INSERT INTO customer (Customer_Name,DOB,email_id,Phone_Number,Address,GYM_ID,Membership_name) VALUES ('$name','$dob','$email','$phone','$address','$gymid','$memtype')";

    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Member Created Successfully";
        header("Location: member-create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Member Not Created";
        header("Location: member-create.php");
        exit(0);
    }
}
?>