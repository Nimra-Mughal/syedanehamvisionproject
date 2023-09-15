<?php
    include './connection.php';
    $ID = $_GET['id'];
    $sql = "DELETE FROM `event` WHERE id=$ID";
    mysqli_query($con,$sql);
    header('location:./viewevent.php');
   
?>