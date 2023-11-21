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
               <form action="{{ url('/riwayat/kesehatan/add') }}" method="POST">
                  @csrf
                  <input type="hidden" id="id_ternak" name="id_ternak" value={{$id}}>
                  <input type="hidden" id="id_pemeriksa" name="id_pemeriksa" value={{auth()->user()->id}}>

                  <div class="row py-1">
                     <div class="mx-auto">
                        <div class="input-group input-group-static">
                           <label for="tanggal_pemeriksaan" style="color:white" >Tanggal pemeriksaan</label>
                           <input class="form-control datepicker" type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan') }}" style="color:white"  required>
                           @error('tanggal_pemeriksaan')
                              <small class="text-danger">{{ $message }}</small>
                           @enderror
                        </div>
                     </div>
                  </div>
                  
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="deskripsi" style="color:white" >Deskripsi</label>
                              <textarea class="form-control"  id="deskripsi" name="deskripsi" style="color:white" >{{ old('deskripsi') }}</textarea>
                              @error('deskripsi')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>

                  <button type="submit"  class="btn bg-gradient-success  mb-0 me-1 mt-2 mt-md-0">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
