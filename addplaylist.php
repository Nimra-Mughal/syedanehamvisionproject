<?php
        include './admin/connection.php';
        session_start();
        $ID=$_GET['id'];
        $sql="SELECT * FROM `arijit singh` WHERE id =$ID";
        $result=mysqli_query($con,$sql);
        $data = mysqli_fetch_array($result);
        $sname=$data['singername'];
        $image=$data['image'];
        $songname=$data['name'];
        $desc=$data['desc'];
        $audio=$data['song'];
        $uname=$_SESSION['user_name'];
        $insertsql="INSERT INTO `playlist`(`singername`, `image`, `songname`, `desc`, `audio`, `username`) VALUES ('$sname','$image','$songname','$desc','$audio','$uname')";
        mysqli_query($con,$insertsql);
        header("location:playlist.php");
        
       
      

    
  


        
 

?>