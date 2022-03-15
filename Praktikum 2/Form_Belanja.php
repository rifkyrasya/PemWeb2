<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h2 style="margin: 2vw;">Belanja Online</h2>
    <hr/>

    <div class="container-fluid">
	    <div class="row">
		    <div class="col-md-12">
			    <div class="row">
				    <div class="col-md-9">
                        <div class="m-5 border border-success p-4 rounded">
                            <form method="GET" action="form_belanja.php" autocomplete="off">
                                <div class="form-group row">
                                    <label for="nama_customer" class="col-4 col-form-label">Nama Customer</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label>
                                    <div class="col-8">
                                        <label id="produk" for="produk" class="custom-control custom-radio">
                                            <input type="radio" name="produk" id="tv" value="tv"> TV
                                            <input type="radio" name="produk" id="kulkas" value="kulkas"> KULKAS
                                            <input type="radio" name="produk" id="mc" value="mc"> MESIN CUCI
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
				    </div>
				    <div class="col-md-3">
					    <div class="card">
                            <h5 class="card-header">
                                Daftar Harga
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    TV : 5.400.000
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Kulkas : 3.900.000
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    MESIN CUCI : 4.300.000
                                </p>
                            </div>
                            <div class="card-footer">
                                Harga Dapat Berubah Setiap Saat
                            </div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
    
    <div class="m-5 border border-primary p-4 rounded">
        <?php

            if(isset($_GET['submit'])){
                $submit = $_GET['submit'];
                $nama_customer = $_GET['nama_customer'];
                $produk = $_GET['produk'];
                $jumlah = $_GET['jumlah'];
                if (isset($_GET['produk'])) {
                    $produk = $_GET['produk'];
                }
            }

            if($produk=="tv"){
                $total = 5400000 * $jumlah;
            }elseif($produk=="kulkas"){
                $total = 3900000 * $jumlah;
            }elseif($produk=="mesin cuci"){
                $total = 4300000 * $jumlah;
            }else{
                $total = 0;
            }

            echo 'Nama Customer : ' .$nama_customer = $_GET['nama_customer'].'<br>';
            echo 'Produk : '.$produk.'<br/>';
            echo 'Jumlah : ' .$jumlah = $_GET['jumlah'].'<br>';
            echo 'Total : ' .$total.'<br/>';
        ?>
    </div>
</body>
</html>