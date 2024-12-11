<html>

<head>
	<title>Native MVC Example</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="row">
		<div class="col-md-4">&nbsp;</div>
		<div class="col-md-4 mt-5">
			<h3 class="text-center">Data Mahasiswa</h3>
			<table class="table table-responsive table-bordered table-striped">
				<thead>
					<tr class="fw-bold">
						<td>No</td>
						<td>NIM</td>
						<td>Nama</td>
					</tr>
				</thead>
				<tbody class="align-middle">
					<?php
					$i = 1;
					if (isset($rs)) {
						foreach ($rs as $mahasiswa => $list) {
							echo '<tr><td class="d-grid"><a class="btn btn-primary" href="?act=tampil-data&i=' . $list['id'] . '"' . $list['id'] . '>' . $i . '</a></td><td>' . $list['nim'] . '</td><td>' . $list['nama'] . '</td></tr>';
							$i++;
						}
					}
					?>
				</tbody>
			</table>
			<a class="btn btn-secondary" href="/mvc-example/">Back</a>
		</div>
		<div class="col-md-4">&nbsp;</div>
	</div>
</body>

</html>