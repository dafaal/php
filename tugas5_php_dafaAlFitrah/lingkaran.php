<?php
require_once 'bentuk2D.php';
class lingkaran extends bentuk2D
{
    protected $jari2 = 4;
    public function namaBidang()
    {
        echo 'Lingkaran';
    }

    public function ket()
    {
        echo "r = $this->jari2 cm";
    }

    public function luasBidang()
    {
        return (3.14 * pow($this->jari2, 2));
    }

    public function kelilingBidang()
    {
        return (2 * 3.14 * $this->jari2);
    }
}
