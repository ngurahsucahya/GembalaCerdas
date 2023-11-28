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
      <title>Input Riwayat Lahir | GembalaCerdas</title>
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
      <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background5.png')}});" loading="lazy">
         <div class="row mx-auto">
            <div class="col-lg-7 text-center mx-auto" style="margin-top: 150px">
               <h3 class="text-white pt-3 mt-n5">Input Riwayat Lahir</h3>
            </div>
            
            <div class="mx-auto" style="margin: 10px; ">
               @if(session('success'))
                  <div class="alert alert-success">
                     {{ session('success') }}
                  </div>
               @endif
               <form action="{{ url('/riwayat/lahir/add') }}" method="POST">
                  @csrf
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="id_kawin" style="color:white" >ID Kawin</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="id_kawin" name="id_kawin"  style="color:white" required>
                              <option value="" {{ old('id_kawin') === '' ? 'selected' : '' }} >Select ID kawin</option>
                              @foreach ($Rkawin as $each_kawin)
                                 <option value="{{ $each_kawin['id']  }}" {{ old('id_kawin') === $each_kawin['id']  ? 'selected' : '' }}>{{ $each_kawin['id'] }}</option>
                              @endforeach
                              </select>
                              @error('id_kawin')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>

                    <!-- <section>
                    <div class="row justify-space-between py-3" id="idLahirField" style="display: {{ old('id_kawin') === '' ? 'block' : 'none' }};">
                        <div class=" mx-auto">
                            <div class="mb-1">
                                <h6 class="text-white">test</h6>
                            </div>
                        </div>
                    </div>
                    </section> -->

                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="bobot_lahir" style="color:white" >Bobot Lahir</label>
                              <input type="text" pattern="[0-9,.]*" placeholder="cth. 128" inputmode="numeric" class="form-control" id="bobot_lahir" name="bobot_lahir" value="{{ old('bobot_lahir') }}" style="color:white" >
                              @error('bobot_lahir')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>

                  <div class="row py-1">
                     <div class="mx-auto">
                        <div class="input-group input-group-static">
                           <label for="tanggal_lahir" style="color:white" >Tanggal Lahir</label>
                           <input class="form-control datepicker" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" style="color:white"  required>
                           @error('tanggal_lahir')
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
