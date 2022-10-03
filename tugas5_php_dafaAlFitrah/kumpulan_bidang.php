<?php
//array scalar
$ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran();
$persegiPanjang = new persegiPanjang();
$segitiga = new segitiga();

$bangunDatar = [$lingkaran, $persegiPanjang, $segitiga];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Bidang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: #EEE3CB">
            <h3 class="text-center p-4">Struktur Gaji Pegawai</h3>
            <!--Awal table-->
            <table class="table table-striped w-50 mx-auto table-bordered border-dark">
                <thead>
                    <tr bgcolor="#D7C0AE">
                        <?php
                        foreach ($ar_judul as $judul) {
                        ?>
                            <th><?= $judul ?></th>
                        <?php } ?>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($bangunDatar as $bd) {
                    ?>
                        <tr bgcolor="#D8BFD8">
                            <td><?= $no ?></td>
                            <td><?= $bd->namaBidang() ?></td>
                            <td><?= $bd->ket() ?></td>
                            <td><?= $bd->luasBidang() ?></td>
                            <td><?= $bd->kelilingBidang() ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>