<nav class="navbar bg-light shadow-lg">
    <form action="">
        <input type="text" name="" id="" class="form-control ">
    </form>
    <div class="w-25 ms-auto">
        <?php
        include "./connection.php";
        if (isset($_SESSION['admin_name'])) {
            echo "<h3 class='text-dark' style='font-size:20px;'>" . $_SESSION['admin_name'];
            echo ' <a href="./logout.php"><i class="fa-solid fa-right-from-bracket text-danger"></i></a></h3>
                                            ';
        }
        if (!isset($_SESSION['admin_name'])) {
            header("location:../login.php");
        }
        ?>
    </div>
</nav>