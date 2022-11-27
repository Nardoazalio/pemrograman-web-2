<?php include "function.php";


$angka_pertama = isset($_POST['angka_pertama']) ? $_POST['angka_pertama'] : "";
$angka_kedua = isset($_POST['angka_kedua']) ? $_POST['angka_kedua'] : "";


if (isset($_POST['submit']) && $angka_pertama != "" && $angka_kedua != "") {
    $hasil_jumlah =  $angka_pertama + $angka_kedua;
    $hasil_kurang = $angka_pertama - $angka_kedua;
    $hasil_kali = $angka_pertama * $angka_kedua;
    $hasil_bagi = $angka_pertama / $angka_kedua;
    $hasil_modulus = $angka_pertama % $angka_kedua;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ARITMATIKA NARDO</title>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center">
            <h4>OPERATOR ARITMATIKA</h4>
            <p>20202205082 - Nardo Azalio Bangri <br> <p>
               <font size="4"> <?= getDateTime(); ?> </font></p>


        </div>
        <form action="" method="post">
            <div class="mt-5 mb-3 row">
                <div class="col-sm-2"></div>
                <label for="nim" class="col-sm-2 col-form-label">Angka Pertama</label>
                <div class="col-sm-5">
                    <input type="number" name="angka_pertama" class="form-control" id="angka_pertama">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <label for="nim" class="col-sm-2 col-form-label">Angka Kedua</label>
                <div class="col-sm-5">
                    <input type="number" name="angka_kedua" class="form-control" id="angka_kedua">
                    <br>
                    <div class="text-end">
                        <button class="btn btn-success" name="submit" type="submit">HITUNG</button>
                    </div>
                </div>
            </div>

        </form>

        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <hr class="start-50">
            </div>
        </div>

        <div align = "center" class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <?php if (isset($_POST['submit']) &&  $angka_pertama == "") : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Angka Pertama</strong> tidak boleh dikosongkan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (isset($_POST['submit']) &&  $angka_kedua == "") : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Angka Kedua</strong> tidak boleh dikosongkan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <?php if (isset($_POST['submit']) && $angka_pertama != "" && $angka_kedua != "") : ?>
                    <h4>Hasil Operasi Artimatika</h4> <br>
                    # Hasil Penjumlahan = <?= $hasil_jumlah; ?></p>
                    # Hasil Pengurangan = <?= $hasil_kurang; ?> </p>
                    # Hasil Perkalian = <?= $hasil_kali; ?></p>
                    # Hasil Pembagian = <?= $hasil_bagi; ?></p>
                    # Sisa Hasil Bagi = <?= $hasil_modulus; ?></p>
                <?php endif; ?>

            </div>
        </div>
</body>

</html>