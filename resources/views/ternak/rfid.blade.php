<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="{{Vite::asset('resources/images/logo.png')}}">
      <title>Input Ternak | GembalaCerdas</title>
      <!-- Fonts and icons -->
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

    <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background2.png')}}); align-items: center;" loading="lazy">
        <div class="col-lg-7 text-center mx-auto" style="margin-top: 130px">
            <h3 class="text-white pt-3 mt-n5">Pindai Ternak</h3>
            <div class="card mt-3">
                <div class="card-body">

                    @if(isset($ternakData) && $ternakData->count() > 0)
                        @foreach($ternakData as $ternak)
                            <p class="card-text">RFID Terakhir: {{ $ternak->rfid}}</p>
                            <p class="card-text">Nama Ternak: {{ $ternak->nama_ternak}}</p>
                            <p class="card-text">Jenis Kelamin: {{ $ternak->jenis_kelamin}}</p>
                        @endforeach
                    @else
                        <p class="card-text">Data ternak tidak ditemukan.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>
</html>
