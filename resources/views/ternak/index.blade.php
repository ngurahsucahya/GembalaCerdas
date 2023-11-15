<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Ternak</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
	/* Custom styles */
	
	body {
		height: 100%;
		margin: 0;
		background-color: white;
	}
	
	.fixed-top {
		position: fixed;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1030;
	}
	
	.title-section {
		position: relative;
		background-color: transparent;
		padding: 30px 0;
		text-align: center;
		margin-top: 6vh;
	}
	
	.navbar {
		display: flex;
		justify-content: center;
		background-color: #118F6A;
	}
	
	.navbar-brand {
		color: #ffffff;
	}
	
	.navbar-collapse {
		justify-content: flex-end;
	}
	
	.navbar-nav .nav-link {
		color: #ffffff !important;
	}
	
	.bg-primary {
		background-color: #118F6A;
	}
	
	.nav-item {
		margin-left: 0px;
		margin-right: 20px;
	}
	
	.bg1 {
		background-color: #14795C;
	}
	
	.bg2 {
		background-color: #209C77;
	}
	
	.bg3 {
		background-color: #44AB7F;
	}
	
	.mt-5 {
		margin-top: 5rem !important;
	}
	
	table {
		border-collapse: collapse;
		width: 100%;
	}
	
	table,
	th,
	td {
		border: 2px solid black;
	}
	
	th,
	td {
		padding: 5px;
	}
	
	th {
		background-color: #409C7C;
		color: white;
	}
	
	tr:hover {
		background-color: #FFCE4D;
	}
	
	.container {
        text-align:center;
        justify-content: center;
		align-items: center;
	}
	</style>
</head>

<body>
	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
		<div class="container"> <img src="{{ asset('images/logo.png') }}" alt="GembalaCerdas" width="45" height="45">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/dashboard">Dashboard
                        </a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/data-ternak"><u>Data Ternak</u></a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/input_ternak">Input Ternak</a> </li>
					<!-- <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/form_kandang">Pindah Kandang</a>
                     </li> -->
					<li class="nav-item"> <img src="{{ asset('images/notif.png') }}" alt="Notif" width="27" height="30"> </li>
					<form action="/logout" method="post"> @csrf
						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-warning btn-block" id="logout">Logout</button>
						</div>
					</form>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-5">
		<h1>Data Ternak</h1>
		<form method="GET" action="/data-ternak" class="mb-4">
			<div class="input-group">
				<input type="text" name="query" class="form-control" placeholder="Ketik disini..." value="" required>
				<button type="submit" class="btn btn-primary">Cari</button>
			</div>
		</form>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Ras Domba</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Bobot Badan</th>
					<th>Bobot lahir</th>
					<th>Bobot sapih</th>
					<th>kandang</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
					</td>
					<td>
						<p>x</p>
						<div class="custom-card-buttons">
							<!-- <td><button class="btn btn-success" style="margin-right: 5px;" onclick="window.location.href='/lihat-lengkap/{{ $ternakItem->id }}'">Lihat Lengkap</button></td> -->
							<td>
								<button class="btn btn-primary" style="margin-right: 5px;" onclick="window.location.href='{{ route('edit-ternak', ['id' => $ternakItem->id]) }}'">Edit</button>
							</td>
							<td>
								<button class="btn btn-danger" onclick="deleteTernak({{ $ternakItem->id }})">Delete</button>
							</td>
						</div>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
<script>
function deleteTernak(id) {
	if(confirm("Apakah Anda yakin ingin menghapus ternak ini?")) {
		// Dapatkan token CSRF dari meta tag.
		var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
		// Jika pengguna menekan OK, kirim permintaan POST ke rute penghapusan dengan token CSRF.
		fetch(`/delete-ternak/${id}`, {
			// alert("TEST")
			method: 'DELETE',
			headers: {
				'X-CSRF-TOKEN': csrfToken, // Menambahkan token CSRF ke header.
				'Content-Type': 'application/json',
			},
			body: JSON.stringify({
				id: id
			}), // Mengirimkan data yang diperlukan (opsional).
		}).then(response => response.json()).then(data => {
			if(data.success) {
				// Refresh atau lakukan tindakan lain setelah penghapusan berhasil.
				location.reload(); // Contoh: Muat ulang halaman.]
				alert("berhasil");
			} else {
				// Tampilkan pesan kesalahan jika diperlukan.
				alert("gagal");
				location.reload();
			}
		});
	}
}
</script>

</html>