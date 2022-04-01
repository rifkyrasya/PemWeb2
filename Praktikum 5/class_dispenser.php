<?php
class Dispenser{
    public $volume;
    public $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        $this->volume = $vol;
    }
    public function isiGelas($gelas){
        $this->volumeGelas = $gelas;
    }
    public function harga($harga){
        $this->hargaSegelas = $harga;
    }
    public function nama($minuman){
        $this->namaMinuman = $minuman;
    }
}

$latte = new Dispenser();
$latte->volume = 1000;
$latte->gelas = 250;
$latte->harga = 10000;
$latte->minuman = 'Kopi Latte';

echo 'Minuman yang dipesan: '.$latte->minuman.'<br/>';
echo 'Volume dispenser: '.$latte->volume.'<br/>';
echo 'Volume gelas: '.$latte->gelas.'<br/>';
echo 'Harga per gelas: '.$latte->harga.'<br/>';
?>