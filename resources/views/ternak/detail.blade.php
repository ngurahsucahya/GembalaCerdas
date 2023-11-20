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
                    <div class="z-index-0 fadeIn3 fadeInBottom align-items-start border-radius-lg" style="background-image:url({{Vite::asset('resources/images/cardblur.png')}}); padding:20px; background-size: cover; background-attachment: fixed; height auto;">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-light border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Detail Data Ternak</h4>
                            </div>
                        </div>
                        <div class="card-body" style="margin-left:40px;">
                            <h3 class="text-white" style="margin-top:20px; margin-left:10px; margin-bottom:0px;">ID: {{$ternak->id}}</h3>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4 class="text-white"  style="margin-left:10px; margin-bottom:0px;" >RFID: {{$ternak->rfid}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4  class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Nama Ternak: {{$ternak->nama_ternak}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4   class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Ras: {{$ternak->ras}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4   class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Jenis Kelamin: {{$ternak->jenis_kelamin}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4   class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Tanggal Lahir: {{$ternak->tanggal_lahir}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4  class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Status: {{$ternak->status_sekarang}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4  class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Bobot Badan: {{$ternak->bobot_badan}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%">
                            <h4  class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Deskripsi fenotip: {{$ternak->deskripsi_fenotip}}</h4>
                            <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%"> <br>
                            
                            @if($ternak->status_sekarang !="Anak")
                                <h4  class="text-white"  style="margin-left:10px; margin-bottom:0px;" >Riwayat Kawin</h4>
                                <table class="table table-custom text-center table-responsive" style="width:70%">
                                <thead>
                                    <tr>
                                        @if($ternak->status_sekarang=="Pejantan")
                                            <th>ID Induk</th>
                                        @else
                                            <th>ID Pejantan</th>
                                        @endif
                                        <th>Tanggal kawin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(\App\Models\RiwayatKawin::all() as $rk)
                                        @if($ternak->status_sekarang=="Pejantan")
                                            @if($rk->id_pejantan == $ternak->id)
                                                <td>
                                                    <p>{{$rk->id_induk}}</p>
                                                </td>
                                            @endif
                                        @else
                                            @if($rk->id_induk == $ternak->id)
                                                <td>
                                                    <p>{{$rk->id_pejantan}}</p>
                                                </td>
                                            @endif
                                        @endif

                                            <td>
                                                <p>{{$rk->tanggal_kawin}}</p>
                                            </td>
                                    @endforeach
                                </tbody>
                                </table>
                                <img src="{{Vite::asset('resources/images/line.png')}}" alt="line" style="width:90%"> <br>
                            @endif

                            @if(auth()->user()->role != 'employee') <button class="btn bg-gradient-info w-auto me-1 mb-0" style="margin-top:10px;" onclick="window.location.href='/ternak/edit/{{$ternak->id}}'">Edit</button> @endif
                        
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    </body>
</html>