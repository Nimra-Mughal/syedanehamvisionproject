<header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <!-- <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a> -->
                        <h1 class="text-light mt-2" style="font-family: 'Times New Roman', Times, serif; font-size:30px;">POP MUSIC</h1>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <h1></h1>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="albums-store.php">Latest</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="albums-store.php">Latest</a></li>
                                            <li><a href="event.php">Events</a></li>
                                            <li><a href="blog.php">News</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="#">Category</a>
                                                <ul class="dropdown">
                                                <li><a href="./albums-store.php">Latest</a></li>
                                                    <li><a href="./love.php">Love</a></li>
                                                    <li><a href="./sad.php">Sad</a></li>
                                                    <li><a href="./vlog.php">Vlog</a></li>
                                                    <li><a href="./travel.php">Travel</a>
                                                    <li><a href="./birthday.php">Birthday</a>
                                                    </li>
                                                </ul>
                                            <li><a href="#">Singer</a>
                                                <ul class="dropdown">
                                                    <li><a href="arijit singh.php">Arijit Singh</a></li>
                                                    <li><a href="atifaslam.php">Atif Aslam</a></li>
                                                    <li><a href="nehakakkar.php">Neha Kakkar</a></li>
                                                    <li><a href="rahat.php">Rahat Fateh Ali Khan</a>
                                                    <li><a href="sonunigam.php">Sonu Nigam</a>
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="event.php">Events</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <?php
                                    if (isset($_SESSION['user_name'])) {
                                    ?>
                                    <li><a href="./playlist.php">playlist</a></li>


                                    <?php
                                    }
                                    ?>

                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                         <?php
                                        include "./admin/connection.php";
                                        if(isset( $_SESSION['user_name'])){
                                            echo "<h1 class='text-light' style='font-size:20px;'>".$_SESSION['user_name'];
                                            echo ' <a href="/admin/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></h1>
                                            ';
                                        }
                                    if(!isset( $_SESSION['user_name'])){
                                        echo '<a href="login.php" id="loginBtn">Login / </a>

                                        ';
                                        echo '<a href="register.php" id="loginBtn">Register</a>
                                        
                                        ';
                                    }
                                         ?>
                                        <!-- <a href="login.php" id="loginBtn">Login / Register</a> -->
                                    </div>
                                    <!-- Cart Button -->
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>