<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Mahasiswa</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav>
				<ul class="navbar-nav">
					<li class="nav-item active">
						 <a class="nav-link" href="#">WEB02 <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Review PHP</a>
					</li>
                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP5 OOP</a>
					</li>
				</ul>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="text"> 
					<button class="btn btn-primary my-2 my-sm-0" type="submit">
						Submit
					</button>
				</form>
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item active">
						 <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
					Action
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					 <a class="dropdown-item disabled" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
            <form class="form-inline">
                Search : 
				<input class="form-control mr-sm-2" type="text"> 
			</form>
		</div>
	</div>
			<table style="border: 1;">
				<thead>
					<tr>
						<th>
							No
						</th>
						<th>
							NIM
						</th>
						<th>
							Nama
						</th>
						<th>
							Prodi
						</th>
                        <th>
                            Thn Angkatan
                        </th>
                        <th>
                            IPK
                        </th>
                        <th>
                            Predikat
                        </th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-active">
						<td>
							1
						</td>
						<?php
                            require_once ('class_mahasiswa.php');

                            $mahasiswa = new Mahasiswa(123, 'Yaya', 'SI', 2020, 3);
                            
                            echo '<td>'.$mahasiswa->nim.'</td>';
                            echo '<td>'.$mahasiswa->nama.'</td>';
                            echo '<td>'.$mahasiswa->prodi.'</td>';
                            echo '<td>'.$mahasiswa->thn_angkatan.'</td>';
                            echo '<td>'.$mahasiswa->ipk.'</td>';
                            echo '<td>'.$mahasiswa->predikat_ipk().'</td>';
                        ?>
					</tr>
                    <tr class="table-success">
						<td>
							2
						</td>
						<?php
                            require_once ('class_mahasiswa.php');

                            $mahasiswa = new Mahasiswa(134, 'Nunu', 'TI', 2020, 3.5);
                            
                            echo '<td>'.$mahasiswa->nim.'</td>';
                            echo '<td>'.$mahasiswa->nama.'</td>';
                            echo '<td>'.$mahasiswa->prodi.'</td>';
                            echo '<td>'.$mahasiswa->thn_angkatan.'</td>';
                            echo '<td>'.$mahasiswa->ipk.'</td>';
                            echo '<td>'.$mahasiswa->predikat_ipk().'</td>';
                        ?>
					</tr>
                    <tr class="table-warning">
						<td>
							3
						</td>
						<?php
                            require_once ('class_mahasiswa.php');

                            $mahasiswa = new Mahasiswa(145, 'Caca', 'TI', 2020, 3.5);
                            
                            echo '<td>'.$mahasiswa->nim.'</td>';
                            echo '<td>'.$mahasiswa->nama.'</td>';
                            echo '<td>'.$mahasiswa->prodi.'</td>';
                            echo '<td>'.$mahasiswa->thn_angkatan.'</td>';
                            echo '<td>'.$mahasiswa->ipk.'</td>';
                            echo '<td>'.$mahasiswa->predikat_ipk().'</td>';
                        ?>
					</tr>
                    <tr class="table-danger">
						<td>
							4
						</td>
						<?php
                            require_once ('class_mahasiswa.php');

                            $mahasiswa = new Mahasiswa(123, 'Pipo', 'SI', 2020, 3);
                            
                            echo '<td>'.$mahasiswa->nim.'</td>';
                            echo '<td>'.$mahasiswa->nama.'</td>';
                            echo '<td>'.$mahasiswa->prodi.'</td>';
                            echo '<td>'.$mahasiswa->thn_angkatan.'</td>';
                            echo '<td>'.$mahasiswa->ipk.'</td>';
                            echo '<td>'.$mahasiswa->predikat_ipk().'</td>';
                        ?>
					</tr>
				</tbody>
			</table>
	<div class="row">
		<div class="col-md-6">
            <p>Showing 1 to 4 of 4 entries</p>
		</div>
		<div class="col-md-6">
			<nav>
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Previous</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			 
			<address>
				 <strong>Lab Pemrograman Web Lanjutan</strong><br> Dosen: Sirojul Munir S.Si,M.Kom<br> STT-NF - Kampus B<br>
			</address>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>