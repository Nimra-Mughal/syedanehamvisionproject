<?php
include "./connection.php";
session_start();
$sql="SELECT COUNT(name) FROM `arijit singh`";
$songname = mysqli_query($con,$sql);
$songdata = mysqli_fetch_array($songname);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Stylesheet -->
<link rel="icon" href="./icon/icon-removebg-preview.png">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid">
        <div class="row">
          
                <?php 
                    include './sidebar.php';
                ?>
         
            <div class="col-lg-10 px-">
           <?php
           include "./nav.php";
           ?>

                <div class="w-75 mx-auto pt-5 mt-5">
                    <div class="row pt-3 mt-2">
                        <div class="col-lg-4 mt-3 ">
                                <div class="card p-4 dd shadow-lg">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <img src="/img/core-img/image-removebg-preview (25).png" width="150%" alt="">
                                    </div>
                                    <div class="col-lg-8">
                                    <h5 class="tt">Total <br> Songs</h5>
                                   <p class="tt fa-2x"><?php echo $songdata['COUNT(name)'];?></p>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-lg-4 mt-3 ">
                            <div class="card p-4 dd shadow-lg">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="/img/core-img/image-removebg-preview (26).png" width="150%" alt="">
                                    </div>
                                    <div class="col-lg-8">
                                        <?php
                                        $sql="SELECT COUNT(name) FROM `event`";
                                        $songname = mysqli_query($con,$sql);
                                        $singersdata = mysqli_fetch_array($songname);
                                        ?>
                                    <h5 class="tt">All <br> Singers</h5>
                                    <p class="tt fa-2x"><?php echo $singersdata['COUNT(name)']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 ">
                            <div class="card p-4 dd shadow-lg">
                                <div class="row">
                                        <div class="col-lg-4">
                                            <img src="/img/core-img/image-removebg-preview (27).png" width="150%" alt="">
                                        </div>
                                        <div class="col-lg-8">
                                            <?php
                                            $sql="SELECT COUNT(name) FROM `brand`";
                                            $songname = mysqli_query($con,$sql);
                                            $data = mysqli_fetch_array($songname);
                                            ?>
                                        
                                        <h5 class="tt">Singers & Category</h5>
                                        <p class="tt fa-2x"><?php  echo $data['COUNT(name)'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    
</body>
</html>