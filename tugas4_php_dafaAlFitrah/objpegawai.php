<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas 4 PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="background-color: #EEE3CB">
  <h3 class="text-center p-4">Struktur Gaji Pegawai</h3>
  <table class="table table-striped w-75 mx-auto table-bordered border-dark">
    <tr class="text-center" bgcolor="#D7C0AE">
      <th>NIP</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Agama</th>
      <th>Status</th>
      <th>Gaji Pokok</th>
      <th>Tunjangan Jabatan</th>
      <th>Tunjangan Keluarga</th>
      <th>Zakat Profesi</th>
      <th>Gaji Bersih</th>
    </tr>
    <?php
    require 'pegawai.php';
    $laurent = new Pegawai('3001', 'laurent', 'Manager', 'Kong Hu Cu', ' Belum Menikah');
    $awal = new Pegawai('3002', 'Awal', 'Asmen', 'Islam', 'Belum Menikah');
    $ninda = new Pegawai('3003', 'ninda', 'Kabag', 'Kristen', 'Belum Menikah');
    $trevor = new Pegawai('3004', 'trevor', 'Staff', 'Islam', 'Menikah');
    $speed = new Pegawai('3005', 'speed', 'Manager', 'Protestan', 'Menikah');

    $laurent->mencetak();
    $awal->mencetak();
    $ninda->mencetak();
    $trevor->mencetak();
    $speed->mencetak();
    ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>