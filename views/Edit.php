<?php
include '../classes/User.php';
$user = new User();
  session_start();

  $userData = $user->getUser($_SESSION['user_id']);

 
    

    
  
  
    
  ?> 
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <?php include 'nav.php' ?>
  <div class="row justify-content-center">
  <div class="col-6">
    <div class="mb-3">
      <h2 class="text-center mb-4">Edit User</h2>
      <form action="../actions/edit.php" enctype="multipart/form-data" method="post">
      <div class="row justify-content-center">
        <div class="col-6">
          <i class="fa-solid fa-user text-secondary d-block text-center"></i>
          <input type="file" name="photo" id="" class="form-control mt-2">
        </div>
        <div class="mb-3">
          <label for="first_name" class="fa-user fw-bold">First name</label>
          <input type="text" name="first_name" id="first_name"  class="form-control" value="<?= $userData['first_name'] ?>">
        </div>
        <div class="mb-3">
          <label for="last_name" class="fa-user fw-bold">Last name</label>
          <input type="text" name="last_name" id="last_name"  class="form-control" value="<?= $userData['last_name'] ?>">
        </div>
        <div class="mb-3">
          <label for="username" class="fa-user fw-bold">username</label>
          <input type="text" name="username" id="username"  class="form-control" value="<?=$userData['username'] ?>">
        </div>
        <div class="text-end">
          <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
          <button type="submit" class="btn btn-warning btn-sm px-5"name="submit">Save</button>
        </div>
        
        </div>
</form>
      </div>
    </div>
  </div>
  </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>