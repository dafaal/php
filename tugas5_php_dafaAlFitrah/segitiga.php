<?php
require_once 'bentuk2D.php';
class segitiga extends bentuk2D
{
    protected $alas = 5;
    protected $tinggi = 7;
    protected $sisi = 9;

    public function namaBidang()
    {
        echo 'Segitiga';
    }

    public function ket()
    {
        echo "a = $this->alas cm <br>";
        echo "t = $this->tinggi cm <br>";
        echo "s = $this->sisi cm";
    }

    public function luasBidang()
    {
        return (($this->alas * $this->tinggi) / 2);
    }

    public function kelilingBidang()
    {
        return ($this->alas + $this->tinggi + $this->sisi);
    }
}
