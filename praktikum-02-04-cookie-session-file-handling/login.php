<?php

if (isset($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";


    if ($username == "20202205060" && $password == "20202205060") {
        session_start();
        $_SESSION['nama'] = "Rivanky Valensius Bara";
        $_SESSION['nim'] = "20202205060";

        header('Location: dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center">
            <h3>Form Login</h3>
        </div>
        <form action="" method="post">
            <div class="mt-5 mb-3 row">
                <div class="col-sm-2"></div>
                <label for="nim" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-5">
                    <input type="text" name="username" placeholder="Username" class="form-control" id="username">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <label for="nim" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                    <br>
                    <div class="text-end">
                        <button class="btn btn-success" name="login" type="submit">Login</button>
                    </div>
                </div>
            </div>

        </form>

</body>

</html>