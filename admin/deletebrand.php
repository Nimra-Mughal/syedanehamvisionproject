<?php
    include './connection.php';
    $ID = $_GET['id'];
    $sql = "DELETE FROM `brand` WHERE id=$ID";
    mysqli_query($con,$sql);
    header('location:./viewbrand.php');
   
?>