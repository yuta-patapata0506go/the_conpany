<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
      <?php include 'nav.php' ?>
      <div class="row justify-content-center mt-5">
        <div class="col-6">
          <div class="text-center">
              <i class="fa-solid fa-triangle-exclamation display-2 mb-2 text-warning"></i>
              <h1 class="mb-5">DELETE ACCOUNT</h1>
              <p>Are you sure you want to delete youe account?</p>
           <div class="">
              <form action="../actions/delete-user.php" method="post" class="d-inline">
                <button type="submit" class="btn btn-secondary text-white btn-lg">Cancel</button>
                <a href="dashboard.php" class="btn btn-outline-danger btn-lg">Delete</a>
            </div>
           </form>
           </div>
      </div>
           
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>