<?php
require_once 'bentuk2D.php';
class persegiPanjang extends bentuk2D
{
    protected $panjang = 12;
    protected $lebar = 7;

    public function namaBidang()
    {
        echo 'Persegi Panjang';
    }

    public function ket()
    {
        echo "p = $this->panjang cm <br>";
        echo "p = $this->lebar cm <br>";
    }

    public function luasBidang()
    {
        return ($this->panjang * $this->lebar);
    }

    public function kelilingBidang()
    {
        return (2 * ($this->panjang + $this->lebar));
    }
}
