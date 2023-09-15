<?php
    include './connection.php';
    $ID = $_GET['id'];
    $sql = "DELETE FROM `arijit singh` WHERE id=$ID";
    mysqli_query($con,$sql);
    header('location:./viewhit.php');
   
?>