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
      <title>Input Riwayat Kawin | GembalaCerdas</title>
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
         <div class="row mx-auto">
            <div class="col-lg-7 text-center mx-auto" style="margin-top: 150px">
               <h3 class="text-white pt-3 mt-n5">Input Riwayat Kawin</h3>
            </div>
            
            <div class="mx-auto" style="margin: 10px; ">
               @if(session('success'))
                  <div class="alert alert-success">
                     {{ session('success') }}
                  </div>
               @endif
               <form action="{{ url('/riwayat/kawin/add') }}" method="POST">
                  @csrf
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="id_pejantan" style="color:white" >Pejantan</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="id_pejantan" name="id_pejantan"  style="color:white" required>
                              <option value="" {{ old('id_pejantan') === '' ? 'selected' : '' }} >Select Pejantan</option>
                              @foreach ($list_pejantan as $each_pejantan)
                                 <option value="{{ $each_pejantan['id'] }}" {{ old('id_pejantan') === $each_pejantan['id'] ? 'selected' : '' }}>{{ $each_pejantan['nama_ternak'] }}</option>
                              @endforeach
                              </select>
                              @error('id_pejantan')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>

                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="id_induk" style="color:white" >Induk</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="id_induk" name="id_induk"  style="color:white" required>
                              <option value="" {{ old('induk') === '' ? 'selected' : '' }} >Select induk</option>
                              @foreach ($list_induk as $each_induk)
                                 <option value="{{ $each_induk['id'] }}" {{ old('induk') === $each_induk['id'] ? 'selected' : '' }}>{{ $each_induk['nama_ternak'] }}</option>
                              @endforeach
                              </select>
                              @error('id_induk')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>
                  
                  <div class="row py-1">
                     <div class="mx-auto">
                        <div class="input-group input-group-static">
                           <label for="tanggal_kawin" style="color:white" >Tanggal Kawin</label>
                           <input class="form-control datepicker" type="date" id="tanggal_kawin" name="tanggal_kawin" value="{{ old('tanggal_kawin') }}" style="color:white"  required>
                           @error('tanggal_kawin')
                           <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                  </div>
                  
                  <button type="submit"  class="btn bg-gradient-success  mb-0 me-1 mt-2 mt-md-0">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
