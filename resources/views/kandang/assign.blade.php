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
      <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/Group29.png')}});" loading="lazy">
         <div class="row mx-auto">
            <div class="col-lg-7 text-center mx-auto" style="margin-top: 150px">
               <h3 class="text-white pt-3 mt-n5">Tambah Ternak</h3>
            </div>
            
            <div class="mx-auto" style="margin: 10px; ">
            <!--- <form action="{{ url('/riwayat/kawin/add') }}" method="POST">
                  @csrf ntar ubah yh -->

                  <section class="py-1">
    <div class="row justify-space-between py-2">
        <div class="mx-auto">
            <div class="input-group input-group-static mb-1">
                <label for="select_ternak" style="color:white">Pilih Ternak</label>
                <input list="ternak_options" type="text" class="form-control" id="select_ternak" name="select_ternak" style="color:white" required placeholder="Select or type Ternak">
                <datalist id="ternak_options">
                    <option value="Option 1">
                    <option value="Option 2">
                    <option value="Option 3">
                    <!-- Add more options as needed -->
                </datalist>
            </div>
        </div>
    </div>
</section>

<section class="py-1">
    <div class="row justify-space-between py-2">
        <div class="mx-auto">
            <div class="input-group input-group-static mb-1">
                <label for="select_kandang" style="color:white">Pilih Kandang</label>
                <input list="kandang_options" type="text" class="form-control" id="select_kandang" name="select_kandang" style="color:white" required placeholder="Select or type Kandang">
                <datalist id="kandang_options">
                    <option value="Option A">
                    <option value="Option B">
                    <option value="Option C">
                    <!-- Add more options as needed -->
                </datalist>
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
