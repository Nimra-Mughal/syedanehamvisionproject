<?php
    include './admin/connection.php';
    $ID = $_GET['id'];
    $sql = "DELETE FROM `playlist` WHERE id=$ID";
    mysqli_query($con,$sql);
    header('location:./playlist.php');
   
?>