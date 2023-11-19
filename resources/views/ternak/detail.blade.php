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
      <title>Detail Ternak | GembalaCerdas</title>
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
   </head>
   <body class="index-page bg-gray-200">
        <x-navbar/>
        <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background2.png')}});" loading="lazy">
            <div class="col-12">
            <div style="margin: 100px 20px 10px; padding: 50px 50px 20px; ">
                <div class="container my-auto">
                <div class="row">
                <div class="col-lg-10 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Detail Data Ternak</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>ID: {{$ternak->id}}<h3>
                            <h4>RFID: {{$ternak->rfid}}<h4>
                            <h4>Nama Ternak: {{$ternak->nama_ternak}}<h4>
                            <h4>Ras: {{$ternak->ras}}<h4>
                            <h4>Jenis Kelamin: {{$ternak->jenis_kelamin}}<h4>
                            <h4>Tanggal Lahir: {{$ternak->tanggal_lahirk}}<h4>
                            <h4>Status: {{$ternak->status_sekarang}}<h4>
                            <h4>Bobot Badan: {{$ternak->bobot_badan}}<h4>
                            <h4>Deskripsi fenotip: {{$ternak->deskripsi_fenotip}}<h4>
                            <button class="btn bg-gradient-info w-auto me-1 mb-0" style="margin-top:10px" onclick="window.location.href='/ternak/edit/{{$ternak->id}}'">Edit</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    </body>
</html>