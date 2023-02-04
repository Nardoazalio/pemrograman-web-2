<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
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
            <h2>Halaman Dashboard</h2>
            <p><?= $_SESSION['nama'] . " - " . $_SESSION['nim']; ?></p>


            <form action="logout.php" method="post">
                <button class="btn btn-danger">Log out</button>
            </form>
        </div>
</body>

</html>