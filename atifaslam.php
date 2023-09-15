<?php
include "./admin/connection.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>POP MUSIC</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php
    include "navbar.php";
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/core-img/vv.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Atif Aslam</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->

    <!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70" style="margin-top: 15%">
        <div class="container">
            <div class="row">

                <!-- Single Song Area -->
                <?php
                $sql = "SELECT * FROM `arijit singh` WHERE singername = 'Atif Aslam'";
                $resulte = mysqli_query($con, $sql);
                foreach ($resulte as $row) {
                ?>
                    <div class="col-12">
                        <div class="single-song-area d-flex flex-wrap align-items-end mt-3">
                            <div class="song-thumbnail">
                                <img src="<?php echo "./admin/" . $row['image'] ?>" alt="" style="border-radius: 10px;">
                                <p class="text-center mb-30"><?php echo $row['singername'] ?></p>
                            </div>
                            <div class="song-play-area mb-50 mt-1">
                                <div class="song-name">
                                    <p><?php echo $row['name'] . " | " . $row['desc'] ?></p>
                                    <?php
                                    if (isset($_SESSION['user_name'])) {
                                    ?>
                                    <?php 
                                    $songname=$row['name'] ;
                                    $playuser=$_SESSION['user_name'];
                                    $sqlplay="SELECT * FROM `playlist` where username='$playuser' and songname='$songname'";
                                    $resultplay=mysqli_query($con,$sqlplay);
                                    if(mysqli_num_rows($resultplay)>0){
                                        if(mysqli_num_rows($resultplay)<2){
                                            ?>
                                      
                                            <a href="" data-bs-target="#modal2" data-bs-toggle="modal"><i class="fa-solid fa-bookmark con" style="margin-left:90%;"></i></a>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                   
                                   <a href="./addplaylist.php? id=<?php echo $row['id'] ?>"><i class="fa-solid fa-bookmark con" style="margin-left:90%;"></i></a>
                                    <?php
                                    }
                                    ?>
                                        
                                    <?php
                                    } else {
                                    ?>

                                        <a href="" data-bs-target="#modal1" data-bs-toggle="modal"><i class="fa-solid fa-bookmark  con" style="margin-left:90%;"></i></a>
                                        <a href="" data-bs-target="#modal3" data-bs-toggle="modal"><i class="fa-solid fa-download con" style="margin-left: 1%;"></i></a>                       

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if(isset($_SESSION['user_name'])){
                                    ?>
                                    <a href="download.php?file=./admin/<?php echo $row['song']?>".><i class="fa-solid fa-download con" style="margin-left: 1%;"></i></a>                       
                                    
                                    <?php
                                    }
                                    else{
                                    ?>
                                    
                                    
                                    <?php
                                    }
                                    ?>
                                    
                                </div>
                                <audio preload="auto" controls>
                                    <source src="<?php echo "./admin/" . $row['song'] ?>">
                                </audio>
                            </div>
                        </div>
                    </div>

                <?php
                }

                ?>



            </div>
        </div>
    </div>


    <!-- ##### Song Area End ##### -->

    <!-- modal -->
    <div class="modal" id="modal1">
        <div class="modal-dialog">
            <div class="modal-content" id="md">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body">
                    <h4 class="text-center text-light mt-2 ms-1" style="font-family: 'Times New Roman', Times, serif;">Please login first<i class="fa-solid fa-circle-check text-success ms-2 "></i></h4>
                    <h6 class="text-center text-light mt-2" style="font-family: 'Times New Roman', Times, serif;">click here glow <br><i class="fa-solid fa-arrow-down text-success mt-2 me-2"></i>
                    </h6>
                    <a href="./login.php" class="btn text-light mx-auto d-block w-25" style="background-color:rgba(198, 3, 3, 0.8);">LOGIN</a>

                </div>


            </div>
        </div>
    </div>
    <div class="modal" id="modal3">
        <div class="modal-dialog">
            <div class="modal-content" id="md">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body">
                    <h4 class="text-center text-light mt-2" style="font-family: 'Times New Roman', Times, serif;">Please login first<i class="fa-solid fa-circle-down mt-2 ms-2 text-primary"></i></h4>
                    <h6 class="text-center text-light mt-2" style="font-family: 'Times New Roman', Times, serif;">click here glow <br><i class="fa-solid fa-arrow-down text-primary mt-2 me-2"></i>
                    </h6>
                    <a href="./login.php" class="btn text-light mx-auto d-block w-25" style="background-color:rgba(198, 3, 3, 0.8);">LOGIN</a>

                </div>


            </div>
        </div>
    </div>
    <div class="modal" id="modal2">
        <div class="modal-dialog">
            <div class="modal-content" id="md">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"></button>

                </div>

                <div class="modal-body">
                    <i class="fa-solid fa-arrow-down text-danger mt-2 offset-6 fa-2x"></i>
                    <h4 class="text-center text-light mt-2 ms-3" style="font-family: 'Times New Roman', Times, serif;">Already have added</h4>

                </div>


            </div>
        </div>
    </div>
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Albums</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>