<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{Vite::asset('resources/images/logo.png')}}">
    <title>Data Ternak | GembalaCerdas</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    @vite('resources/css/material-kit.css')
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
	<!-- <style>
		body{
			background-image: url('{{Vite::asset('resources/images/background2.png')}}');
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%;
			height: 120vh;
		}
	</style> -->
  </head>
  <body class="index-page bg-gray-200">
  	<x-navbar/>
	
	<div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background2.png')}}); align-items: center;" loading="lazy">
		<div class="col-12">
			<div class="col-lg-7 text-center mx-auto" style="margin-top: 130px">
              <h3 class="text-white pt-3 mt-n5">Data Ternak</h3>
            </div>
			<div class="search-container">
				<form method="GET" action="/ternak">
						<input type="text" name="query" class="form-input search-box" placeholder="Search..." value="" required>
						<button type="submit" class="search-button">Cari</button>
				</form>
			</div>
			
			
        	<!-- <div class="card card-body blur shadow-blur opacity-8" style="margin: 10px 50px 10px; padding: 50px 50px 20px;"> -->
			<div class="container text-center mx-auto" style="margin-top:10px">
			<table class="table table-custom table-responsive">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Ras Domba</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Bobot Badan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
					@foreach ($ternaks as $ternak)
					<tr>
						<td>
							<p>{{$ternak->id}}</p>
						</td>
						<td>
							<p>{{$ternak->nama_ternak}}</p>
						</td>
						<td>
							<p>{{$ternak->ras}}</p>
						</td>
						<td>
							<p>{{$ternak->jenis_kelamin}}</p>
						</td>
						<td>
							<p>{{$ternak->tanggal_lahir}}</p>
						</td>
						<td>
							<p>{{$ternak->bobot_badan}}</p>
						</td>
						<div class="custom-card-buttons">
							<td>
								<button class="btn btn-sm bg-gradient-info w-auto me-1 mb-0" style="margin-right: 5px;">Detail</button>
								<button class="btn btn-sm bg-gradient-primary w-auto me-1 mb-0" style="margin-right: 5px;" onclick="window.location.href='/ternak/edit/{{$ternak->id}}'">Edit</button>
								<button class="btn btn-sm bg-gradient-warning w-auto me-1 mb-0" onclick="deleteTernak({{ $ternak->id }})">Delete</button>
							</td>
						</div>
					</tr>
					@endforeach
			</table>

			<section class="py-1">
			<div class="container">
				<div class="row justify-space-between py-2">
				<div class="col-lg-4 mx-auto">
					<ul class="pagination pagination-primary m-4">
					<li class="page-item">
						<a class="page-link" href="javascript:;" aria-label="Previous">
						<span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_left</i></span>
						</a>
					</li>
					<li class="page-item active">
						<a class="page-link" href="javascript:;">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:;">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:;">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:;">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:;">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="javascript:;" aria-label="Next">
						<span aria-hidden="true"><i class="material-icons" aria-hidden="true">chevron_right</i></span>
						</a>
					</li>
					</ul>
				</div>
				</div>
			</div>
			</section>



			</div>
		</div>
	</div>
	<script>
		function deleteTernak(id) {
			if(confirm("Apakah Anda yakin ingin menghapus ternak ini?")) {
				var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
				fetch(`/ternak/delete/${id}`, {
					method: 'DELETE',
					headers: {
						'X-CSRF-TOKEN': csrfToken,
						'Content-Type': 'application/json',
					},
					body: JSON.stringify({
						id: id
					}),
				}).then(response => response.json()).then(data => {
					if(data.success) {
						location.reload();
						alert("berhasil");
					} else {
						alert("gagal");
						location.reload();
					}
				});
			}
		}
		</script>
</body>
</html>

<!--   
<body>
	NAVIGATION BAR
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
		<div class="container"> <img src="{{ asset('images/logo.png') }}" alt="GembalaCerdas" width="45" height="45">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/dashboard">Dashboard
                        </a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/data-ternak"><u>Data Ternak</u></a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/input_ternak">Input Ternak</a> </li>
					<li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/form_kandang">Pindah Kandang</a>
                     </li>
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
		<form method="GET" action="/ternak" class="mb-4">
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
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach ($ternaks as $ternak)
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
						</td>
						<div class="custom-card-buttons">
							<td>
								<button class="btn btn-primary" style="margin-right: 5px;" onclick="window.location.href='/ternak/edit/{{$ternak->id}}'">Edit</button>
							</td>
							<td>
								<button class="btn btn-danger" onclick="deleteTernak({{ $ternak->id }})">Delete</button>
							</td>
						</div>
					@endforeach
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body> -->