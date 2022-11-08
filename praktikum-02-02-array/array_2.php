<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    $programmer_php = ["Andi", "Budi", "Wati", "Gunawan", "Baco", "Becce", "Fatma"];
    $programmer_python = ["Andi", "Fatma", "Fadli", "Haris", "Baco"];
    ?>

    <div class="container mt-5">
        <div class="card" style="width: 60rem;">
            <div class="card-header">
                <h5>Mahasiswa yang masuk kelompok Programmer PHP dengan nama 
                    diurutkan secara <b>ASCENDING</b></h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                sort($programmer_php);
                foreach ($programmer_php as $php) : ?>
                    <li class="list-group-item"><?= $php; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Mahasiswa yang masuk kelompok Programmer Python dengan nama
                    diurutkan secara <b>DESCENDING</b></h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                rsort($programmer_php);
                foreach ($programmer_php as $php) : ?>
                    <li class="list-group-item"><?= $php; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Mahasiswa yang masuk kelompok Programmer PHP tapi tidak
                    termasuk kelompok Programmer Python</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_diff($programmer_php, $programmer_python);
                foreach ($result as $hasil) : ?>
                    <li class="list-group-item"><?= $hasil; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Mahasiswa yang masuk kelompok Programmer Python tapi tidak
                    termasuk kelompok Programmer PHP</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_diff($programmer_python, $programmer_php);
                foreach ($result as $hasil) : ?>
                    <li class="list-group-item"><?= $hasil; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Mahasiswa yang masuk kelompok Programmer PHP dan Programmer
                    Python sekaligus</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_intersect($programmer_php, $programmer_python);
                foreach ($result as $hasil) : ?>
                    <li class="list-group-item"><?= $hasil; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP atau
                    Programmer Python</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                $result = array_keys(
                    array_flip($programmer_php) + array_flip($programmer_python)
                );
                foreach ($result as $hasil) : ?>
                    <li class="list-group-item"><?= $hasil; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php array_push($programmer_php, "Nardo") ?>
        <div class="card mt-5" style="width: 60rem;">
            <div class="card-header">
                <h5>Daftar seluruh mahasiswa yang masuk kelompok Programmer PHP</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php
                foreach ($programmer_php as $programanphp) : ?>
                    <li class="list-group-item"><?= $programanphp; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>

</html>