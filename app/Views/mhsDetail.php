<html>

<head>
	<title>Native MVC Example</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="row">
		<div class="col-md-4">&nbsp;</div>
		<div class="col-md-4 mt-5 p-3">

			<form action="/mvc-example/?act=update-data" method="POST" class="border p-3">
				<h3 class="text-center">Data Mahasiswa</h3>
				<label class="fw-bold">
					ID
				</label>
				<input type="number" name="id" value="<?php echo $rs['id']; ?>" class="form-control" readonly>
				<label class="fw-bold mt-3">
					NIM
				</label>
				<input type="text" name="nim" id="nim" value="<?php echo $rs['nim']; ?>" class="form-control">
				<label class="fw-bold mt-3">
					Nama
				</label>
				<input type="text" name="nama" id="nama" value="<?php echo $rs['nama']; ?>" class="form-control">


				<div class="mt-3 d-flex flex-row-reverse gap-3">
					<a href="/mvc-example/?act=delete-data&i=<?php echo $rs['id']; ?>" class="btn btn-danger">Delete</a>
					<input type="submit" class="btn btn-success" value="Update">
				</div>
			</form>
			<a href="/mvc-example/?act=tampil-data" class="btn btn-secondary">Back</a>
		</div>
		<div class="col-md-4">&nbsp;</div>
	</div>
</body>

</html>