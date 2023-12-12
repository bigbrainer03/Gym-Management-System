<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_equipment'])){
    $id=mysqli_real_escape_string($con,$_POST['delete_equipment']);
    $query="DELETE FROM equipment WHERE ID='$id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Equipment Removed Successfully";
        header("Location: equipment-index.php");
        exit(0);
    }else{
        $_SESSION['message']="Equipment Not Removed";
        header("Location: equipment-index.php");
        exit(0);
    }
}


if(isset($_POST['update_equipment'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $eid=mysqli_real_escape_string($con,$_POST['eid']);
    $ename=mysqli_real_escape_string($con,$_POST['ename']);
    $purchase=mysqli_real_escape_string($con,$_POST['purchase']);

    $query="UPDATE equipment SET ID='$id',GYM_ID='$gymid', Equipment_id='$eid', Equipment_Name='$ename', Purchase_Date='$purchase' WHERE ID='$id'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Equipment Updated Successfully";
        header("Location: equipment-index.php");
        exit(0);
    }else{
        $_SESSION['message']="Equipment Not Updated";
        header("Location: equipment-index.php");
        exit(0);
    }

}



if(isset($_POST['submit'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $gymid=mysqli_real_escape_string($con,$_POST['gymid']);
    $eid=mysqli_real_escape_string($con,$_POST['eid']);
    $ename=mysqli_real_escape_string($con,$_POST['ename']);
    $purchase=mysqli_real_escape_string($con,$_POST['purchase']);

    $query= "INSERT INTO equipment (id,GYM_ID,Equipment_id,Equipment_Name,Purchase_Date) VALUES ('$id','$gymid','$eid','$ename','$purchase')";

    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Equipment Added Successfully";
        header("Location: equipment-create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Equipment Not Added";
        header("Location: equipment-create.php");
        exit(0);
    }
}

?>