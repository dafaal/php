<?php
class Pegawai
{
    //variabel
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    //konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function setGajiPokok()
    {
        switch ($this->jabatan) {
            case 'Manager':
                $this->gaPok = 15000000;
                break;
            case 'Asmen':
                $this->gaPok = 10000000;
                break;
            case 'Kabag':
                $this->gaPok = 7000000;
                break;
            case 'Staff':
                $this->gaPok = 4000000;
                break;
            default:
                $this->gaPok = 0;
        }
        return $this->gaPok;
    }

    public function settunJab()
    {
        $this->tunJab = 0.2 * $this->gaPok;
        return $this->tunJab;
    }

    public function settunKel()
    {
        $this->tunKel = ($this->status == 'Menikah') ? 0.1 * $this->gaPok : 0;
        return $this->tunKel;
    }

    public function setZakatProfesi()
    {
        $this->zaProf = ($this->agama == 'Islam' && $this->gaPok >= 6000000) ? 0.025 * $this->gaPok : 0;
        return $this->zaProf;
    }

    public function setGajiBersih()
    {
        $this->thp = $this->gaPok + $this->tunJab + $this->tunKel - $this->zaProf;
        return $this->thp;
    }

    public function mencetak()
    { ?>
        <tr>
            <td><?= $this->nip; ?></td>
            <td><?= $this->nama; ?></td>
            <td><?= $this->jabatan; ?></td>
            <td><?= $this->agama; ?></td>
            <td><?= $this->status; ?></td>
            <td><?= 'Rp' . number_format($this->setGajiPokok(), 0, '', '.'); ?></td>
            <td><?= 'Rp' . number_format($this->setTunJab(), 0, '', '.'); ?></td>
            <td><?= 'Rp' . number_format($this->setTunKel(), 0, '', '.'); ?></td>
            <td><?= 'Rp' . number_format($this->setZakatProfesi(), 0, '', '.'); ?></td>
            <td><?= 'Rp' . number_format($this->setGajiBersih(), 0, '', '.'); ?></td>
        </tr>
<?php }
}
