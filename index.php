

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ass</title>
</head>
<body>
 <h1 class="text-center my-5 text-success ">ENTER YOUR DATA HERE</h1>

 <form action="recive.php" method="post" enctype="multipart/form-data" class="container">

  <div class="mb-3">
    <label class="form-label">username</label>
    <input name="Username" type="text" class="form-control">
    </div>

  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input name="Phone" type="tel" class="form-control">
    </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input name="Email" type="email" class="form-control">
</div>

  <div class="mb-3">
    <label class="form-label">JobTitle</label>
    <input name="JobTitle" type="text" class="form-control">
</div>

  <div class="mb-3">
    <label class="form-label">profileImage</label>
    <input name="image" type="file" class="form-control">
</div>
  
  <input type="submit" class="btn btn-success w-100 my-3">

</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


