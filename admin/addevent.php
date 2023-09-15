<?php 
include './connection.php';
session_start();
if(isset($_POST['addevent'])){
    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $address=$_POST['address'];
    $image=$_FILES['image'];

    $imagename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
      move_uploaded_file( $tmpname,"./upload/".$imagename);
      $img_url="./upload/$imagename";
      
    $sql="INSERT INTO `event`(`name`,`desc`,`address`,`image`) VALUES ('$name','$desc','$address','$img_url')";
    mysqli_query($con,$sql);
    header('location:./viewevent.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icon/icon-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
                include './sidebar.php';
                error_reporting(0);
            ?>
            <div class="col-lg-10">
            <?php
           include "./nav.php";
           ?>
                <h1 class="text-center mt-5" style="font-family: 'Times New Roman', Times, serif; color: maroon;">ADD EVENT</h1>
                <form action="./addevent.php" method="post" enctype="multipart/form-data" class="w-75 p-5 bg-light mx-auto">
                            <input type="text" name="name" id="" class="form-control mt-2 " placeholder="Singername">
                            <input type="text" name="desc" placeholder="Desc" id="" class="form-control mt-2 ">
                            <input type="text" name="address" placeholder="Location" id="" class="form-control mt-2 ">
                            <input type="file" name="image" id="" class="form-control mt-2" placeholder="imgupload">
                            <input type="submit" name="addevent" class=" mt-3 btn btn-dark rounded-pill px-5 offset-5">
                            
                       
                         </form>
            </div>
        </div>
    </div>
    
</body>
</html>