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
    <title>Data Kandang | GembalaCerdas</title>
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
              <h3 class="text-white pt-3 mt-n5">Data Kandang</h3>
            </div>
			<div class="search-container">
				<form method="GET" action="/kandang">
					<input type="text" name="query" class="form-input search-box" placeholder="Search..." value="" required>
					<button type="submit" class="search-button">Cari</button>
				</form>
			</div>
			
			
			<div class="container text-center mx-auto" style="margin-top:10px">

            

            
			<table class="table table-custom table-responsive">
			<thead>
				<tr>
					<th>ID</th>
                    <!--tampilin ternak no brp di kandang ini, kalau nggak ada kosongin
					<th>ID Ternak</th> -->
                    <th>Nama Kandang</th>
                    <th>Kapasitas</th>
                    <!-- kalau belum ada NULL
                    <th>Tanggal Pengelompokan </th>--->
				</tr>
			</thead>
			<tbody>
					
					
			</table>

			
				<div class="alert alert-warning" role="alert"> Data Tidak Ditemukan </div>
			

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
	
</body>
</html>