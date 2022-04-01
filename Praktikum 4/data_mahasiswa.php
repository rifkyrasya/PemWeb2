<?php
    require_once 'class_mahasiswa.php';

    $mahasiswa = new Mahasiswa(123,'Yaya',3);

    echo "NIM : ".$mahasiswa->nim.'<br>';
    echo "Nama : ".$mahasiswa->nama.'<br>';
    echo "IPK : ".$mahasiswa->ipk.'<br>';
    echo "Predikat : ".$mahasiswa->predikat_ipk();
?>