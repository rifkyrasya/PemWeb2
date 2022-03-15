<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="margin: 2vw;">Form Nilai Siswa</h2>
    <hr/>
    <div class="m-5 border border-success p-4 rounded">
        <form method="GET" action="nilai_siswa.php" autocomplete="off">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="ddp">Dasar-Dasar Pemrograman</option>
                    <option value="basis_data">Basis Data</option>
                    <option value="pw2">Pemrograman Web 2</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum" type="number" class="form-control" required="required">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

        <?php
            if(isset($_GET['submit'])){
                echo 'Nama : ' .$nama_lengkap = $_GET['nama_lengkap'].'<br>';
                echo 'Matkul : ' .$matkul = $_GET['matkul'].'<br>';
                echo 'Nilai UTS : ' .$nilai_uts = $_GET['nilai_uts'].'<br>';
                echo 'Nilai UAS : ' .$nilai_uas = $_GET['nilai_uas'].'<br>';
                echo 'Nilai Tugas : ' .$nilai_tugas = $_GET['nilai_tugas'].'<br>';
            }
            
            $nilai = 0.3 * $nilai_uts + 0.35 * $nilai_uas + 0.35 * $nilai_tugas;
            $minimal = '55';

            if ($nilai >= $minimal) {
                echo "Selamat Anda Lulus".'<br/>';
            } else {
                echo "Anda Tidak Lulus".'<br/>';
            }
            
            if ($nilai >= 85 and $nilai <= 100) {
                echo "Predikat: A";
            } elseif ($nilai >= 70) {
                echo "Predikat: B";
            } elseif ($nilai >= 56) {
                echo "Predikat: C";
            } elseif ($nilai >= 36) {
                echo "Predikat: D";
            } elseif ($nilai >= 0) {
                echo "Predikat: E";
            } else {
                echo "Nilai tidak valid.";
            }
        ?>

</body>
</html>