<?php

    //mendeklarasikan array buah
    $buah = array('Pisang', 'Apel', 'Jeruk', 'Mangga');
    $buah = ['Pisang', 'Apel', 'Jeruk', 'Mangga'];
    
    //menampilkan isi array
    echo 'Buah index 0 => '.$buah[0].'<br>';
    echo 'Buah index 1 => '.$buah[1].'<br>';
    echo 'Buah index 2 => '.$buah[2].'<br>';
    echo 'Buah index 3 => '.$buah[0];

    //menambahkan data pada array
    //$buah[] = 'Alpukat';

    //echo 'Buah index 4 => '.$buah[4].'<br>';

    //menampilkan jumlah array
    echo '<br>Jumlah array : '.count($buah);

    //menghapus data pada array
    //unset($buah[2]);

    echo '<hr>';
    echo 'menampilkan isi array dengan foreach : <br>';
    //menampilkan isi array dengan foreach list
    echo '<ol>';
    foreach ($buah as $b) {
        echo '<li>'.$b.'</li>';
    }
    echo '</ol>';
    
    //menampilkan isi array dengan foreach
    echo '<ul>';
    foreach ($buah as $b => $value) {
        echo '<li>'.$b.' => '.$value.'</li>';
    }
    echo '</ul>';
?>