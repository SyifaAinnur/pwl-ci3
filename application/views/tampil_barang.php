<html>

<head>
	<title>Data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap'">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<h3 align="center">Data Pelanggan</h3>
	<h5 align="center">Muhammad Khairul Anam(A11.2019.11712)</h3>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Input Data</button>
		<table class="table table-bordered">
			<tr style="background-color :aquamarine">
				<th>Kode Pelanggan</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Kota</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			<?php foreach ($pelanggan as $brg) : ?>
				<tr>
					<td><?php echo $brg['kode']; ?></td>
					<td><?php echo $brg['nama_plggn']; ?></td>
					<td><?php echo $brg['alamat']; ?></td>
					<td><?php echo $brg['no_telp']; ?></td>
					<td><?php echo $brg['kota']; ?></td>
					<td onclick="javascript : return confirm('Yakin data dihapus ?')">
						<?php echo anchor('stokbarang/hapus/' . $brg['kode'], '<div class="btn btn-danger btn-sm"> 
						<i class="fa fa-trash-o"></i></div>') ?>
					</td>
					<td>
						<?php echo anchor('stokbarang/edit/' . $brg['kode'], '<div class="btn btn-primary btn-sm" > 
						<i class="fa fa-edit"></i></div>') ?>
					</td>

				</tr>
			<?php endforeach; ?>
		</table>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="POST" action="<?php echo base_url() . 'Stokbarang/simpan'; ?>">
							<div class="form-group">
								<label>Kode</label>
								<input type="text" class="form-control" name="xkode" placeholder="kode Pelanggan">
								<label>Nama Pelanggan</label>
								<input type="text" class="form-control" name="xnama" placeholder="nama Pelanggan">
								<label>Alamat</label>
								<input type="text" class="form-control" name="xalamat" placeholder="Alamat">
								<label>Nomor Telepon</label>
								<input type="text" class="form-control" name="xnohp" placeholder="Nomor Telepon">
								<label>Kota</label>
								<input type="text" class="form-control" name="xkota" placeholder="Kota">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>