<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai - Nurul Afidah SI13</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="margin: 2vw;">Form Nilai Siswa</h2>
    <hr/>
    <div class="m-5 border border-success p-4 rounded">
        <form method="POST" action="data_nilaimahasiswa.php" autocomplete="off">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nim" name="nim" placeholder="Masukkan NIM" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="DDP">Dasar-Dasar Pemograman</option>
                    <option value="Basis Data">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="number" class="form-control" required="required">
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
        require_once ('class_nilaimahasiswa.php');

        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $nilai = $_POST['nilai'];

        $nilaisiswa = new nilaiMahasiswa($nim,$matakuliah,$nilai);

        echo 'NIM : '.$nilaisiswa->nim.'<br/>';
        echo 'Mata Kuliah : '.$nilaisiswa->matakuliah.'<br/>';
        echo 'Nilai : '.$nilaisiswa->nilai.'<br/>';
        echo 'Predikat : '.$nilaisiswa->nilai_grade().'<br/>';
    ?>
</body>
</html>