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
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{Vite::asset('resources/images/logo.png')}}">
    <title>Riwayat Kawin | GembalaCerdas</title>
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
              <h3 class="text-white pt-3 mt-n5">Riwayat Kesehatan Ternak</h3>
            </div>
		
			<div class="container text-center mx-auto" style="margin-top:10px">
			@if(count($RiwayatKesehatan) > 0)
			<table class="table table-custom table-responsive">
			<thead>
				<tr>
					<th>ID Ternak</th>
					<th>ID Pemeriksa</th>
					<th>Tanggal Pemeriksaan</th>
					<th>Deskripsi</th>
				</tr>
			</thead>
			<tbody>
					@foreach ($RiwayatKesehatan as $RK)
					<tr>
						<td>
							<p>{{$RK->id_ternak}}</p>
						</td>
						<td>
							<p>{{$RK->id_pemeriksa}}</p>
						</td>
						<td>
							<p>{{$RK->tanggal_pemeriksaan}}</p>
						</td>
						<td>
							<p>{{$RK->deskripsi}}</p>
						</td>
					</tr>
					@endforeach
			</table>
			@else
                <div class="container alert alert-warning" role="alert" style="width:80%; margin-top:15px"> belum ada riwayat kesehatan </div>
            @endif
			</div>
		</div>
	</div>
</body>
</html>