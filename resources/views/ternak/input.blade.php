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
    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid px-0">
              <a class="navbar-brand" href="/" rel="tooltip">
                <img src="{{Vite::asset('resources/images/logo.png')}}" alt="GembalaCerdas" width="35" height="35">
              </a>
              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
              <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                  <li class="nav-item dropdown dropdown-hover mx-2  my-auto ms-3 ms-lg-0">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false" href="/">
                        Dashboard 
                    </a>
                  </li>
                    
                  <li class="nav-item dropdown dropdown-hover mx-2  my-auto ms-3 ms-lg-0">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                      Ternak
                      <img src="{{Vite::asset('resources/images/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                      <div class="d-none d-lg-block">
                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/ternak/input">
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Ternak</h6>
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/ternak/search">
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Search Ternak</h6>
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/ternak/kesehatan">
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Riwayat Kesehatan Ternak</h6>
                                
                              </div>
                            </div>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2  my-auto ms-3 ms-lg-0">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                       kandang
                       <img src="{{Vite::asset('resources/images/down-arrow-dark.svg')}}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                    <div class="d-none d-lg-block">
                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/kandang/add">
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Kandang</h6>
                                
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/kandang/edit">
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Pindah Kandang</h6>
                                
                              </div>
                            </div>
                          </a>
                        </li>
                      </div>
                    </ul>
                  </li>
                  <li class="nav-item dropdown dropdown-hover mx-2  my-auto ms-3 ms-lg-0">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{Vite::asset('resources/images/notif.png')}}" alt="profile" class="arrow ms-auto ms-md-2" width="35" height="35">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                      <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Tidak ada notifikasi</h6>
                    </ul>
                  </li>

                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false" href="/profile">
                    <img src="{{Vite::asset('resources/images/profile.png')}}" alt="profile" class="arrow ms-auto ms-md-2" width="35" height="35" style=margin-right:10px>
                  </a>
                  @if(auth()->user()->role == 'admin')
                    <li class="nav-item my-auto ms-3 ms-lg-0">
                      <a href="/register" class="btn btn-sm  bg-gradient-success  mb-0 me-1 mt-2 mt-md-0">Register</a>
                    </li>
                  @endif
                  <li class="nav-item my-auto ms-3 ms-lg-0">
                    <form action="/logout" method="post"> @csrf <div>
                        <button type="submit" class="btn btn-sm  bg-gradient-danger  mb-0 me-1 mt-2 mt-md-0" id="logout">Logout</button>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>

    <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background2.png')}});" loading="lazy">
        <div class="card card-body blur shadow-blur opacity-8" style="margin: 120px 20px 10px; padding: 50px 50px 20px;">
            <div class="col-lg-7 text-center mx-auto">
              <h3 class="text-dark pt-3 mt-n5">Input Data Ternak</h3>
            </div>
            <form action="{{ url('/ternak/add') }}" method="POST">
                @csrf
                <section class="py-1">
                    <div class="row justify-space-between py-2">
                        <div class=" mx-auto">
                        <div class="input-group input-group-static mb-1">
                            <label for="rfid">RFID</label>
                            <input class="form-control" placeholder="cth. AB716aA" type="text"  id="rfid" name="rfid" value="{{ old('rfid') }}">
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
                            <label for="nama_ternak">Nama Ternak</label>
                            <input class="form-control" placeholder="cth. BB 128" type="text"  id="nama_ternak" name="nama_ternak" value="{{ old('nama_ternak') }}" required>
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
                            <label for="ras">Ras</label>
                            <select class="form-control" id="ras" name="ras" required>
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
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
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
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control datepicker" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
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
                            <label for="bobot_badan">Bobot Badan</label>
                            <input type="text" pattern="[0-9]*" placeholder="cth. 128" inputmode="numeric" class="form-control" id="bobot_badan" name="bobot_badan" value="{{ old('bobot_badan') }}">
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
                            <label for="deskripsi_fenotip">Deskripsi Fenotip</label>
                            <textarea class="form-control"  id="deskripsi_fenotip" name="deskripsi_fenotip">{{ old('deskripsi_fenotip') }}</textarea>
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
                            <label for="status_sekarang">Status</label>
                            <select class="form-control" id="status_sekarang" name="status_sekarang">
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
                        <div class="input-group input-group-static mb-1" id="idAnakField" style="display: {{ old('status') === 'Anak' ? 'block' : 'none' }};">
                            <label for="id_anak">ID Anak</label>
                            <input type="text" placeholder="cth. 1" class="form-control" id="id_anak" name="id_anak" value="{{ old('id_anak') }}">
                            @error('id_anak')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        </div>
                    </div>
                </section>

                <button type="submit"  class="btn btn-sm  bg-gradient-success  mb-0 me-1 mt-2 mt-md-0">Submit</button>
            </form>
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
            idAnakField.querySelector('input').required = true;
        } else {
            idAnakField.style.display = 'none';
            idAnakField.querySelector('input').required = false;
        }
    });
</script>
  </body> 
</html>



<!-- 
<body>

<div class="container">
    <h2>Input Data Ternak</h2>

    <form action="{{ url('/ternak/add') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="rfid">RFID:</label>
            <input type="text" class="form-control" id="rfid" name="rfid" value="{{ old('rfid') }}">
            @error('rfid')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_ternak">Nama Ternak:</label>
            <input type="text" class="form-control" id="nama_ternak" name="nama_ternak" value="{{ old('nama_ternak') }}" required>
            @error('nama_ternak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="ras">Ras:</label>
            <select class="form-control" id="ras" name="ras" required>
                <option value="" {{ old('ras') === '' ? 'selected' : '' }} >Select Ras</option>
                @foreach ($list_ras as $each_ras)
                    <option value="{{ $each_ras }}" {{ old('ras') === $each_ras ? 'selected' : '' }}>{{ $each_ras }}</option>
                @endforeach
            </select>
            @error('ras')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" {{ old('jenis_kelamin') === '' ? 'selected' : '' }}>Select Jenis Kelamin</option>
                <option value="Jantan" {{ old('jenis_kelamin') === 'Jantan' ? 'selected' : '' }}>Jantan</option>
                <option value="Betina" {{ old('jenis_kelamin') === 'Betina' ? 'selected' : '' }}>Betina</option>
            </select>
            @error('jenis_kelamin')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="bobot_badan">Bobot Badan:</label>
            <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="bobot_badan" name="bobot_badan" value="{{ old('bobot_badan') }}">
            @error('bobot_badan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi_fenotip">Deskripsi Fenotip:</label>
            <textarea class="form-control" id="deskripsi_fenotip" name="deskripsi_fenotip">{{ old('deskripsi_fenotip') }}</textarea>
            @error('deskripsi_fenotip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group" id="statusField" style="display: {{ old('status') === '' ? 'none' : 'block' }};">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="" {{ old('status') === '' ? 'selected' : '' }}>Select Status</option>
                <option value="Induk" {{ old('status') === 'Induk' ? 'selected' : '' }}>Induk</option>
                <option value="Pejantan" {{ old('status') === 'Pejantan' ? 'selected' : '' }}>Pejantan</option>
                <option value="Anak" {{ old('status') === 'Anak' ? 'selected' : '' }}>Anak</option>
            </select>
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div id="idAnakField" class="form-group" style="display: {{ old('status') === 'Anak' ? 'block' : 'none' }};">
            <label for="id_anak">ID Anak:</label>
            <input type="text" class="form-control" id="id_anak" name="id_anak" value="{{ old('id_anak') }}">
            @error('id_anak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    document.getElementById('jenis_kelamin').addEventListener('change', function() {
        var statusField = document.getElementById('statusField');

        if (this.value === '') {
            statusField.style.display = 'none';
            statusSelect.value = '';
        } else if (this.value === 'Jantan') {
            statusField.style.display = 'block';
            document.querySelector('#status option[value="Induk"]').disabled = true;
            document.querySelector('#status option[value="Pejantan"]').disabled = false;
        } else if (this.value === 'Betina') {
            statusField.style.display = 'block';
            document.querySelector('#status option[value="Induk"]').disabled = false;
            document.querySelector('#status option[value="Pejantan"]').disabled = true;
        } else {
            statusField.style.display = 'block';
        }
    });

    document.getElementById('status').addEventListener('change', function() {
        var idAnakField = document.getElementById('idAnakField');

        if (this.value === 'Anak') {
            idAnakField.style.display = 'block';
            idAnakField.querySelector('input').required = true;
        } else {
            idAnakField.style.display = 'none';
            idAnakField.querySelector('input').required = false;
        }
    });
</script>

</body>
</html> -->
