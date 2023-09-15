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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/back.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Love Songs <span>Love Songs</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="./love.php" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Latest albums</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Latest Songs <span>Latest Songs</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="./albums-store.php" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>See what’s new</p>
                        <h2>Latest Albums</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-12">
            <div class="albums-slideshow owl-carousel">
                <?php
                 $sql="SELECT * FROM `brand`";
                 $resulte=mysqli_query($con,$sql);
                 foreach($resulte as $row){
                 ?>
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="<?php echo "./admin/".$row['image']?>"  alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5><?php echo $row['name'] ?></h5>
                                </a>
                                <p><?php echo $row['desc'] ?></p>
                            </div>
                        </div>
                 <?php
                 }
                 ?>
                        <!-- <div class="single-album">
                            <img src="img/img/atif aslam1.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Atif Aslam</h5>
                                </a>
                                <p>Singer</p>
                            </div>
                        </div> -->

                        <!-- Single Album -->
                        <!-- <div class="single-album">
                            <img src="img/img/neha kakkar.jpg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Neha Kakkar</h5>
                                </a>
                                <p>Singer</p>
                            </div>
                        </div> -->

                        <!-- Single Album -->
                        <!-- <div class="single-album">
                            <img src="img/img/rahat fateh" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Rahat Fateh Ali Khan </h5>
                                </a>
                                <p>Singer</p>
                            </div>
                        </div> -->

                        <!-- Single Album -->
                        <!-- <div class="single-album">
                            <img src="img/img/sonu nigam.jpeg" alt="">
                            <div class="album-info">
                                <a href="#">
                                    <h5>Sonu Nigam</h5>
                                </a>
                                <p>Singer</p>
                            </div>
                        </div>                        -->
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->


    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                <?php
                        $sql="SELECT * FROM `hit`";
                       $result=mysqli_query($con,$sql);
                       foreach($result as $row){

                        ?>
                         <div class="featured-artist-thumb">
                        <img src="<?php echo "./admin/".$row['image']?>" alt="" style="border-radius: 20px;">
                    </div>
                        <?php
                       }
                        ?>
                   
                </div>
                <div class="col-12 col-md-7 col-lg-8">

                    <div class="">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>See what’s new</p>
                            <h2>You Listen Hit Song</h2>
                        </div>
                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>

                        <?php
                        $sql="SELECT * FROM `hit`";
                       $result=mysqli_query($con,$sql);
                       foreach($result as $row){

                        ?>
                        <div class="song-play-area st">
                            <div class="">
                            <p class="text-light"><?php echo $row['name'] . " | " .$row['desc'] ?></p>
                            </div>
                            <audio preload="auto" controls>
                                    <source src="<?php echo "./admin/".$row['song'] ?>">
                                </audio>
                                </div>
                        <?php
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ***** Weeks Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp shad" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>LATEST</h2>
                        </div>

                        <!-- Single Top Item -->
                        <?php
                $sql = "SELECT * FROM `arijit singh` WHERE singername = 'LATEST'";
                $resulte = mysqli_query($con, $sql);
                foreach ($resulte as $row) {
                ?>
  <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                <img src="<?php echo "./admin/".$row['image']?>" alt="">
                                </div>
                                <div class="content-">
                                    <p><?php echo $row['name']?></p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                            <source src="<?php echo "./admin/".$row['song'] ?>">
                            </audio>
                        </div>
                
                <?php
                }
                ?>

                     
                    </div>
                </div>

                <!-- ***** New Hits Songs ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp shad" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>VLOG</h2>
                        </div>

                        <!-- Single Top Item -->
                        <?php
                $sql = "SELECT * FROM `arijit singh` WHERE singername = 'VLOG'";
                $resulte = mysqli_query($con, $sql);
                foreach ($resulte as $row) {
                ?>
  <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                <img src="<?php echo "./admin/".$row['image']?>" alt="">
                                </div>
                                <div class="content-">
                                    <p><?php echo $row['name']?></p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                            <source src="<?php echo "./admin/".$row['song'] ?>">
                            </audio>
                        </div>
                
                <?php
                }
                ?>

                     
                    </div>
                </div>

                <!-- ***** Popular Artists ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp shad" data-wow-delay="50ms">
                            <p>See what’s new</p>
                            <h2>Popular Artist</h2>
                        </div>
                        <?php
                        include "./admin/connection.php";
                        $sql="SELECT * FROM `brand`";
                        $resulte=mysqli_query($con,$sql);
                        foreach($resulte as $row){
                        ?>
  <!-- Single Artist -->
  <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <div class="thumbnail">
                                <img src="<?php echo "./admin/".$row['image']?>" alt="">
                            </div>
                            <div class="content-">
                                <p><?php echo $row['name']?></p>
                            </div>
                        </div>

<?php
                        }
?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
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
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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