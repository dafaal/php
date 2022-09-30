<?php
//array scalar mahasiswa
$m1 = ['nim' => '3001', 'nama' => 'Laurent Tsai', 'nilai' => 98];
$m2 = ['nim' => '3002', 'nama' => 'Casey', 'nilai' => 89];
$m3 = ['nim' => '3003', 'nama' => 'Trevor Philips', 'nilai' => 19];
$m4 = ['nim' => '3004', 'nama' => 'Alex', 'nilai' => 75];
$m5 = ['nim' => '3005', 'nama' => 'Cbum', 'nilai' => 87];
$m6 = ['nim' => '3006', 'nama' => 'Haiyoe', 'nilai' => 90];
$m7 = ['nim' => '3007', 'nama' => 'Speed', 'nilai' => 60];
$m8 = ['nim' => '3008', 'nama' => 'Jay Jo', 'nilai' => 77];
$m9 = ['nim' => '3009', 'nama' => 'Risa', 'nilai' => 75];
$m10 = ['nim' => '3010', 'nama' => 'Aurelia', 'nilai' => 53];

//array assosiatif
$mahasiswa = [$m1, $m2 , $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//array judul
$ar_judul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//fungsi agregat
//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_mahasiswa;

//keterangan
$keterangan = [
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Nilai Rata-rata' => $rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 Php Dafa Al</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: #256D85">
    <font face='Trebuchet MS'>
    <h3 class="text-center p-3 text-white">Daftar Mahasiswa</h3>
    <table class="table table-striped w-50 table-hover mx-auto table-bordered" >
        <thead bgcolor="#06283D">
            <tr class="text-white">
                <?php
                foreach ($ar_judul as $jdl) {
                ?>
                    <th><?= $jdl ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $m) {
                //keterangan lulus
                $kelulusan = ($m['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                //Grade
                if ($m['nilai'] >= 85) $grade = 'A';
                else if ($m['nilai'] >= 70 && $m['nilai'] < 85) $grade = 'B';
                else if ($m['nilai'] >= 60 && $m['nilai'] < 70) $grade = 'C';
                else if ($m['nilai'] >= 30 && $m['nilai'] < 60) $grade = 'D';
                else $grade = 'E';

                //Predikat
                switch ($grade) {
                    case 'A':
                        $predikat = 'Sangat Baik';
                        break;
                    case 'B':
                        $predikat = 'Baik';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Buruk';
                        break;
                    case 'E':
                        $predikat = 'Sangat Buruk';
                        break;
                    default:
                        $predikat = '';
                }
            ?>
                <tr bgcolor="#8BBCCC">
                    <td><?= $no ?></td>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['nim'] ?></td>
                    <td><?= $m['nilai'] ?></td>
                    <td><?= $kelulusan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
        <tfoot class="text-white">
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
                <tr bgcolor="#4C6793">
                    <th colspan="6"><?= $ket ?></th>
                    <th colspan="6"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    </font>
</body>

</html>