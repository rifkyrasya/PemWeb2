<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;
    function __construct( $r )
    {
        $this->jari = $r;
    }
    function getLuas ($panjang, $lebar)
    {
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling ($panjang, $lebar)
    {
        return 2 * self::PHI * $this->jari;
    }
}
?>