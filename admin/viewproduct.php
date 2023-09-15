<?php
include "./connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./icon/icon-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dash.css">


</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
                include './sidebar.php';
                error_reporting(0);

            ?>
            <div class="col-lg-10" style="height:100vh; overflow:auto;">
            <?php
           include "./nav.php";
           ?>
            <h1 class="text-center mt-5"  style="font-family: 'Times New Roman', Times, serif; color: maroon;">VIEW SONGS</h1>

            <table class="table table-bordered w-75 mx-auto shadow-lg p-3 mt-3 text-danger">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Desc</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM `arijit singh`";
                        $result=mysqli_query($con,$sql);
                        foreach($result as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><img src="<?php echo $row['image']?>" height="80px" alt=""></td>
                                <td><?php echo $row['desc']?></td>
                                <td><?php echo $row['singername']?></td>
                                <td><a href="./updateproduct.php" class="btn btn-success">Update</a></td>
                                <td><a href="./deleteproduct.php? <?php echo "id=$row[id]"?> " class="btn btn-danger">Delete</a></td>
                            </tr>
                    <?php 
                      }
                      ?>
                 
                </tbody>
            </table>

            </div>
        </div>
    </div>
    
</body>
</html>