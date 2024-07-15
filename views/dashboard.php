<?php
include '../classes/User.php';
$user = new User();
session_start();
//session_start(); は PHP のセッション管理を開始するために使用される関数です。セッションは、ユーザーがウェブサイトを訪れている間、ユーザー固有のデータをサーバー側で保存し、アクセスできるようにする仕組み

$all_users = $user->getAllUsers();



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
            <h2>Product List</h2>
            <a href="#"><i class="fa-solid fa-plus text-primary"></i></a>
            <table class="table">
                <thead class="table-dark">
                    <td></td>
                    <td>ID</td>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Username</td>
                    <td></td>
                </thead>
                <tbody>
                    <?php foreach ($all_users as $user): ?>
                        <!-- 配列やオブジェクトの要素を順に処理するために使う -->
                        <tr>
                            <td></td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['first_name'] ?></td>
                            <td><?= $user['last_name'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <?php if ($user['id'] == $_SESSION['user_id']): ?>
                                    <a href="edit.php" class="btn btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    <a href="delete-user.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    
                                    <a href="#" class="bg-success text-white"><i class="fa-solid fa-pager"></i></a>
                                <?php endif; ?>
                                <!-- if文の終了を示す -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- foreach文の終了を示す -->
                </tbody>
            </table>
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