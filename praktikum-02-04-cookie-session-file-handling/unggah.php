<?php
$cmdUnggah = isset($_POST["cmdUnggah"]) ? $_POST["cmdUnggah"] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Unggah File Gambar</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-center">Unggah File Gambar</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-3">
                <form action="unggah.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Pilih

                            File Gambar</label>

                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="txtGambar">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="cmdUnggah" value="Unggah">Unggah</button>

                </form>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-6 offset-md-3">
                <?php
                if ($cmdUnggah == "Unggah") {
                    $txtGambar = $_FILES["txtGambar"];

                    $fileSementara = $txtGambar["tmp_name"];
                    $namaFile = $txtGambar["name"];
                    $tipeFile = $txtGambar["type"];
                    $ukuranFile = $txtGambar["size"];
                    if ($txtGambar["tmp_name"]) {
                        if (
                            $tipeFile == "image/jpeg" ||

                            $tipeFile == "image/png"
                        ) {
                            copy($fileSementara, $namaFile);
                            echo "<img src='" . $namaFile . "' />";
                        } else {
                            echo "<div class='alert alert-dangertext-center'>File harus berupa gambar bertipe JPG atau PNG</div>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>