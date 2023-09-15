<?php 
// if(!isset($_SESSION['admin_name'])){
//     header('location:../login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
           <?php 
            include './sidebar.php';
           ?>
         
            <div class="col-lg-10">
                <nav class="navbar bg-light shadow-lg">
                    <form action="">
                        <input type="text" name="" id="" class="form-control ">
                    </form>
                    <div class="w-25 ms-auto">
                        <?php 
                        session_start();
                        echo "<b>".$_SESSION['admin_name']."</b>";

                        ?>
                        <a href="./logout.php">logout</a>
                    </div>
                </nav>
                <div class="tab-content">
                   
                    <div class="tab-pane  p-5" id="addproduct">
                            
                      
                
                        
                    </div>
                    <div class="tab-pane pt-5" id="viewproduct">
                            <h1 class="text-center mt-5 text-danger">VIEW PRODUCT</h1>
                            
                            <!-- 
                            <table class="table mx-auto w-75">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>CONTACT</th>
                                        <th>EMAIL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table> -->

                    </div>
                    <div class="tab-pane" id="addbrand">
                       
                        
                    </div>
                    <div class="tab-pane" id="viewbrand">
                        <h1 class="text-center mt-5">ADD BRAND</h1>
                        

                    </div>
                </div>
                <div class="bg-light" style="margin-top:150px;">
                    <p class="text-center">@Copyright</p>
                </div>
            </div>
        </div>
    </div>
  
    
</body>
</html>