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
      <title>Input Ternak | GembalaCerdas</title>
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
            <div class="col-lg-7 text-center mx-auto" style="margin-top: 150px">
               <h3 class="text-white pt-3 mt-n5">Input Data Ternak</h3>
            </div>
            <div style="margin: 10px 20px 10px; padding: 50px 50px 20px; ">
               <form action="{{ url('/ternak/add') }}" method="POST">
                  @csrf
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="rfid" style="color:white" >RFID</label>
                              <input class="form-control" placeholder="cth. AB716aA" type="text"  id="rfid" name="rfid" value="{{ old('rfid') }}" style="color:white" >
                              @error('rfid')
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
                              <label for="nama_ternak" style="color:white" >Nama Ternak</label>
                              <input class="form-control" placeholder="cth. BB 128" type="text"  id="nama_ternak" name="nama_ternak" value="{{ old('nama_ternak') }}" style="color:white" required>
                              @error('nama_ternak')
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
                              <label for="ras" style="color:white" >Ras</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="ras" name="ras"  style="color:white" required>
                              <option value="" {{ old('ras') === '' ? 'selected' : '' }} >Select Ras</option>
                              @foreach ($list_ras as $each_ras)
                              <option value="{{ $each_ras }}" {{ old('ras') === $each_ras ? 'selected' : '' }}>{{ $each_ras }}</option>
                              @endforeach
                              </select>
                              @error('ras')
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
                              <label for="jenis_kelamin"  style="color:white">Jenis Kelamin</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" style="color:white"  required>
                              <option value="" {{ old('jenis_kelamin') === '' ? 'selected' : '' }}>Select Jenis Kelamin</option>
                              <option value="Jantan" {{ old('jenis_kelamin') === 'Jantan' ? 'selected' : '' }}>Jantan</option>
                              <option value="Betina" {{ old('jenis_kelamin') === 'Betina' ? 'selected' : '' }}>Betina</option>
                              </select>
                              @error('jenis_kelamin')
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
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1">
                              <label for="bobot_badan" style="color:white" >Bobot Badan</label>
                              <input type="text" pattern="[0-9,.]*" placeholder="cth. 128" inputmode="numeric" class="form-control" id="bobot_badan" name="bobot_badan" value="{{ old('bobot_badan') }}" style="color:white" >
                              @error('bobot_badan')
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
                              <label for="deskripsi_fenotip" style="color:white" >Deskripsi Fenotip</label>
                              <textarea class="form-control"  id="deskripsi_fenotip" name="deskripsi_fenotip" style="color:white" >{{ old('deskripsi_fenotip') }}</textarea>
                              @error('deskripsi_fenotip')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1" id="statusField" style="display: {{ old('status_sekarang') === '' ? 'block' : 'none' }};">
                              <label for="status_sekarang" style="color:white">Status</label> <img src="{{Vite::asset('resources/images/down-arrow-white.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                              <select class="form-control" id="status_sekarang" name="status_sekarang" style="color:white" >
                              <option value="" {{ old('status_sekarang') === '' ? 'selected' : '' }}>Select Status</option>
                              <option value="Induk" {{ old('status_sekarang') === 'Induk' ? 'selected' : '' }}>Induk</option>
                              <option value="Pejantan" {{ old('status_sekarang') === 'Pejantan' ? 'selected' : '' }}>Pejantan</option>
                              <option value="Anak" {{ old('status_sekarang') === 'Anak' ? 'selected' : '' }}>Anak</option>
                              </select>
                              @error('status_sekarang')
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                           </div>
                        </div>
                     </div>
                  </section>
                  <section class="py-1">
                     <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                           <div class="input-group input-group-static mb-1" id="idAnakField" style="display: {{ old('status_sekarang') === 'Anak' ? 'block' : 'none' }};">
                              <label for="id_anak" style="color:white" >ID Anak</label>
                              <input type="text" placeholder="cth. 1" class="form-control" id="id_anak" name="id_anak" value="{{ old('id_anak') }}" style="color:white" >
                              @error('id_anak')
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
      <script>
         document.getElementById('jenis_kelamin').addEventListener('change', function() {
             var statusField = document.getElementById('statusField');
         
             if (this.value === '') {
                 statusField.style.display = 'none';
                 statusSelect.value = '';
             } else if (this.value === 'Jantan') {
                 statusField.style.display = 'block';
                 document.querySelector('#status_sekarang option[value="Induk"]').disabled = true;
                 document.querySelector('#status_sekarang option[value="Pejantan"]').disabled = false;
             } else if (this.value === 'Betina') {
                 statusField.style.display = 'block';
                 document.querySelector('#status_sekarang option[value="Induk"]').disabled = false;
                 document.querySelector('#status_sekarang option[value="Pejantan"]').disabled = true;
             } else {
                 statusField.style.display = 'block';
             }
         });
         
         document.getElementById('status_sekarang').addEventListener('change', function() {
             var idAnakField = document.getElementById('idAnakField');
         
             if (this.value === 'Anak') {
                 idAnakField.style.display = 'block';
                 idAnakField.querySelector('input').  required = true;
             } else {
                 idAnakField.style.display = 'none';
                 idAnakField.querySelector('input').  required = false;
             }
         });
      </script>
   </body>
</html>
