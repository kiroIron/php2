<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";



$Username = $_POST['Username'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$JobTitle = $_POST['JobTitle'];

$imagename = $_FILES['image']['name'];
$imagelocation = $_FILES['image']['tmp_name'];
$imagetype = $_FILES['image']['type'];
$imagesize = $_FILES['image']['size'];

if($imagetype != "image/jpeg" &&  $imagetype != "image/png"){
    echo "file not supported";
}

if($imagesize > 3000000){
echo "file is to large ";
}
$r = rand();
$t = time();
$newimagename ="$r$t$imagename";
$newLocation = "image/$newimagename";




move_uploaded_file($imagelocation,$newLocation);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ll</title>
</head>
<body>
 <h1 class="text-center my-5 text-success ">DATA IS HERE</h1>

<div class="container d-flex">

 <div class="card w-50  mx-auto my-2" >
  <img src="<?= $newLocation ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Name:<?=$Username?></h5>
    <p class="card-text">Email:<?=$Email?></p>
    <p class="card-text">Phone:<?=$Phone?></p>
    <p class="card-text">JobTitle:<?=$JobTitle?></p>

  </div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>