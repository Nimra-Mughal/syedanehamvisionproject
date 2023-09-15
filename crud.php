<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 bg-dark py-5" style="height:100vh">
            <img src="https://th.bing.com/th/id/R.77d3911c92290e93fb5971f4bfe6bd96?rik=HSnKz22tW9QLWA&pid=ImgRaw&r=0&quot" class="w-75" alt="">
                <ul class="nav nav-tab flex-column mt-5">
                    <li class="nav-item active"><a href="#addproduct" data-bs-toggle="tab" class="nav-link text-light mt-3">ADD PRODUCT</a></li>
                    <li class="nav-item"><a href="#viewproduct" data-bs-toggle="tab" class="nav-link text-light mt-3">VIEW PRODUCT</a></li>
                    <li class="nav-item"><a href="#addbrand" data-bs-toggle="tab" class="nav-link text-light mt-3">ADD BRAND</a></li>
                    <li class="nav-item"><a href="#viewbrand" data-bs-toggle="tab" class="nav-link text-light mt-3">VIEW BRAND</a></li>
                </ul>
            </div>
         
            <div class="col-lg-10">
                <nav class="navbar bg-light shadow-lg">
                    <form action="">
                        <input type="text" name="" id="" class="form-control ">
                    </form>
                    <div class="w-25 ms-auto">

                    </div>
                </nav>
                <div class="tab-content" >
                    <div class="tab-pane active pt-5" id="addproduct">
                        <h1 class="text-center mt-5">ADD PRODUCT</h1>
                        <form action="insert.php"action="insert.php"method="post" enctype="multipart/form-data" class="w-50 mx-auto">
                        <input type="text" name="name" id="" class="form-control mt-3">
                         <input type="number" name="price" id="" class="form-control mt-3">
                        <input type="file" name="image" id="" class="form-control mt-3">
                          <input type="submit" name="save" id="btn" class="btn btn-dark offset-5  rounded-pill mt-3">
                        </form>
                    </div>

                    <div class="tab-pane pt-5" id="viewproduct">
                    <h1 class="text-center mt-5">VIEW PRODUCT</h1>
                    <table class="table mx-auto w-75">
                        <thead>
                            <tr>
                            <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>DELETE</th>
                <th>UPDATE</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            include 'conn.php';
            $sql="SELECT * FROM `tbclass`";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                foreach($result as $row){
                       echo"

                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><img src='$row[image]' width='100px'</td>
                        <td><a href='delete.php? id=$row[id]'class='btn btn-danger'>delete</a></td>
                        <td><a href='update.php? id=$row[id]' class='btn btn-success'>Update</a></td>
    
                    </tr>

                    ";
                }
            }
            ?>
                        </tbody>
                    </table>

                    </div>
                    <div class="tab-pane" id="addbrand">
                    <h1 class="text-center">ADD BRAND</h1>
                    <input type="number" name="id" id="">
                    <input type="text" name="" id="">
                    </div>
                    <div class="tab-pane" id="viewbrand">
                    <h1 class="text-center">ADD VIEW</h1>

                    </div>
                </div>
                <div class="bg-light" style="margin-top:10%">
                    <p class="text-center">@Copyright</p>
                </div>
            </div>
        </div>
    </div>
 
   
</body>
</html>