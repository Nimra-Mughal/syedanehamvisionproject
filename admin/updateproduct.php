<?php
include './connection.php';
$ID=$_GET['id'];
$sql = "SELECT * FROM `arijit singh` WHERE id=$ID";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_array($result);

if (isset($_POST['addproduct'])) {
    $songname=$_POST['name'];
    $image=$_FILES['image'];
    $desc=$_POST['desc'];
    $singername=$_POST['singername'];
    $song=$_FILES['song'];

 
   $imagename=$_FILES['image']['name'];
  $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file( $tmpname,"./upload/".$imagename);
    $img_url="./upload/$imagename";

    $audioname=$_FILES['song']['name'];
    $tmpaudio=$_FILES['song']['tmp_name'];
      move_uploaded_file( $tmpaudio,"./audio/".$audioname);
      $audio_url="./audio/$audioname";
    $sqll = "UPDATE `arijit singh` SET `name`='$name',`image`='$img_url',`desc`='$desc',`singername`='$singername',`song`='$audio_url' WHERE id=$ID";
    mysqli_query($con, $sqll);
    header("location:./viewproduct.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./icon/icon-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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

                    </div>
                </nav>
                <h1 class="text-center mt-5 text-danger">UPDATE PRODUCT</h1>


     <form action="" method="post" enctype="multipart/form-data" class="w-75 p-5 bg-light mx-auto">
    <input type="text" name="name" value='<?php echo $data['name'] ?>' class="form-control mt-2 " placeholder="namesong">
    <input type="file" name="image" value='<?php echo $data['image'] ?>' class="form-control mt-2">
    <input type="text" name="desc" value='<?php echo $data['desc'] ?>' class="form-control mt-2 " placeholder="desc">
    <input type="text" name="singername" value='<?php echo $data['singername'] ?>' class="form-control mt-2 " placeholder="singername">
    <input type="file" name="song" value='<?php echo $data['song'] ?>' class="form-control mt-2 " placeholder="song">

     <input type="number" name="price" value='<?php echo $data['price'] ?>' placeholder="price of product" class="form-control mt-2 ">
      <div class="form-group">
      <input type="text" list="cat" name="category" value='<?php echo $data['pbrand'] ?>' placeholder="productbrand" class="form-control mt-2">
    <datalist id="cat">
                            <?php
                            include './connection.php';
                            $sql = "SELECT * FROM `arijit singh`";
                            $result = mysqli_query($con,$sql);
                            foreach ($result as $row) {
                            ?>
                                <option><?php echo $row['name'] ?></option>";
                            <?php
                            }
                            ?>
                        </datalist>
                    </div>
                    <input type="file" name="image" value='<?php echo $data['image'] ?>' class="form-control mt-2">
                    <img src="<?php echo $data['image'] ?>" height='300px' alt="">
                    <input type="submit" name="addproduct" class=" mt-3 btn btn-dark rounded-pill px-5 offset-5">
                </form>
            </div>
        </div>
    </div>


</body>

</html>