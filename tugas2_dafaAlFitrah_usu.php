<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card mt-3">
                    <div class="card-header bg-primary text-white">
                        Masukkan Data Pegawai
                    </div>

                    <div class="card-body">
                        <div class="container px-5 my-5">
                            <form method="post" action="" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input class="form-control" name="nama" id="nama" type="text" placeholder="Nama" data-sb-validations="required" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="agama">Agama</label>
                                    <select class="form-select" name="agama" id="agama" aria-label="Agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Jabatan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Manager" value="Manager" type="radio" name="jabatan" data-sb-validations="required" />
                                        <label class="form-check-label" for="manager">Manager</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Asisten" value="Asisten" type="radio" name="jabatan" data-sb-validations="required" />
                                        <label class="form-check-label" for="asisten">Asisten</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Kabag" type="radio" value="Kabag" name="jabatan" data-sb-validations="required" />
                                        <label class="form-check-label" for="kabag">Kabag</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Staff" value="Staff" type="radio" name="jabatan" data-sb-validations="required" />
                                        <label class="form-check-label" for="staff">Staff</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label d-block">Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="Menikah" value="Menikah" type="radio" name="status" data-sb-validations="required" />
                                        <label class="form-check-label" for="menikah">Menikah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="BelumMenikah" value="BelumMenikah" type="radio" name="status" data-sb-validations="required" />
                                        <label class="form-check-label" for="belummenikah">Belum Menikah</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                                    <input class="form-control" name="jumlahAnak" id="jumlahAnak" type="text" placeholder="Jika Belum Mempunyai Anak Isi 0" data-sb-validations="required" />
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            error_reporting(0);

            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlahAnak = $_POST['jumlahAnak'];

            //Gaji Pokok
            switch ($jabatan) {
                case 'Manager':
                    $gajiPokok = 20000000;
                    break;
                case 'Asisten':
                    $gajiPokok = 15000000;
                    break;
                case 'Kabag':
                    $gajiPokok = 10000000;
                    break;
                case 'Staff':
                    $gajiPokok = 4000000;
                    break;
                default:
                    $gajiPokok = '';
            }

            //Tunjangan Jabatan
            $tunjab = 0.2 * $gajiPokok;

            //Tunjangan Keluarga
            if ($status == 'Menikah' && $jumlahAnak <= 2 && $jumlahAnak >= 1) $tunkel = 0.05 * $gajiPokok;
            else if ($status == 'Menikah'  && $jumlahAnak > 2 && $jumlahAnak < 6) $tunkel = 0.1 * $gajiPokok;
            else if ($status == 'Menikah'  && $jumlahAnak > 5) $tunkel = 0.15 * $gajiPokok;
            else if ($status == 'BelumMenikah') $tunkel = 0;

            //Gaji Kotor
            $gajiKotor = $gajiPokok + $tunjab + $tunkel;

            //Zakat Profesi
            $zapro = ($agama == 'Islam' && $gajiKotor > '6000000') ? 0.025 * $gajiKotor : 0;

            //Take Home Pay
            $thp = $gajiKotor - $zapro;

            if (isset($_POST['submit'])) { ?>
                <div class="row">
                    <div class="col-12 pt-5 w-50 mx-auto">
                        <table class="table table-secondary table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <td><b>Nama :</b></td>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <td><b>Agama :</b></td>
                                    <td><?= $agama ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jabatan :</b></td>
                                    <td><?= $jabatan ?></td>
                                </tr>
                                <tr>
                                    <td><b>Status :</b></td>
                                    <td><?= $status ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jumlah Anak :</b></th>
                                    <td><?= $jumlahAnak ?></td>
                                </tr>
                                <tr>
                                    <td><b>Gaji Pokok :</b></td>
                                    <td><?= number_format($gajiPokok, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tunjangan Jabatan :</b></th>
                                    <td><?= number_format($tunjab, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tunjangan Keluarga:</b></th>
                                    <td><?= number_format($tunkel, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td><b>Gaji Kotor :</b></th>
                                    <td><?= number_format($gajiKotor, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td><b>Zakat Profesi :</b></td>
                                    <td><?= number_format($zapro, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td><b>Take Home Pay :</b></td>
                                    <td><?= number_format($thp, 2, ',', '.') ?></td>
                                </tr>
                            </thead>
                        <?php } ?>
                        </table>

                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>

</html>