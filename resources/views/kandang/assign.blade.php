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
      <title>Tambah Ternak | GembalaCerdas</title>
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
      <style>
        </style>
      <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
   </head>
   <body class="overlay">
      <x-navbar/>
      <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background4.png')}});" loading="lazy">
         <div class="row mx-auto">
            <div class="col-lg-7 text-center mx-auto" style="margin-top: 150px">
               <h3 class="text-white pt-3 mt-n5">Tambah Ternak ke kandang</h3>
            </div>
            
            <div class="mx-auto" style="margin: 10px; ">
            @if(session('assign'))
                  <div class="alert alert-success">
                     {{ session('assign') }}
                  </div>
            @endif
            - <form action="{{ url('/kandang/assignternak') }}" method="POST">
                  @csrf

                  <section class="py-1">
                        <div class="row justify-space-between py-2">
                            <div class="mx-auto">
                                <div class="input-group input-group-static mb-1">
                                    <label for="id_ternak" style="color:white">Pilih Ternak</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    <select class="form-control" id="id_ternak" name="id_ternak"  style="color:white" required>
                                    <option value="" {{ old('id_ternak') === '' ? 'selected' : '' }} >Select Ternak</option>
                                        @foreach($ternaks as $ternak)
                                            <option value="{{$ternak->id}}" {{ old('id_ternak') === '' ? 'selected' : '' }} >{{$ternak->nama_ternak}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="py-1">
                        <div class="row justify-space-between py-2">
                            <div class="mx-auto">
                                <div class="input-group input-group-static mb-1">
                                    <label for="select_kandang" style="color:white">Pilih Kandang</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    <select class="form-control" id="id_kandang" name="id_kandang"  style="color:white" required>
                                    <option value="" {{ old('id_kandang') === '' ? 'selected' : '' }} >Select Kandang</option>
                                        @foreach($kandangs as $kandang)
                                            <option value="{{$kandang->id}}" {{ old('id_kandang') === '' ? 'selected' : '' }} >{{$kandang->nama_kandang}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>


                    <div class="row py-1">
                        <div class="mx-auto">
                            <div class="input-group input-group-static">
                                <button type="submit" class="btn bg-gradient-success mb-0 me-1 mt-2 mt-md-0">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
