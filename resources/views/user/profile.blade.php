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
    <title>User profile</title>
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
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('background.png');
            background-size: cover;
            background-repeat: no-repeat;
            }
            main {
                display: flex;
            }

            .profile-container {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(201,235,235,0.997161779510841) 100%, rgba(0,212,255,1) 100%);
            position: relative;
            padding: 200px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transform: translate(100%,30%);
            display: flex;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            align-items:center;
            width:150px;
            height:150px;
        }


        .profile-content {
            text-align:left;
            position:relative;
            align-items: left;
            margin-top:-90px;
            transform: translate(-70%,70%);
            justify-content: space-between;
    }
        .edit-button {
            background-color: green; /* Ganti warna latar belakang menjadi hijau */
            color: white; /* Ganti warna teks menjadi putih */
            padding: 2px 5px; /* Sesuaikan padding sesuai kebutuhan Anda */
            border-radius:5px;
            transform: translate(-640%,-500%);
            align-items: center;
            position:relative;
    }
        .profile-picture{
            position: absolute; 
            margin-top:-200px;
            align-items:center;
            width:150px;
            height:150px;
            border-radius:100%;
            transform: translateX(-50%);
    }
        .container {
            text-align:center;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

<header><!-- NAVIGATION BAR-->
   <span class="mask bg-gradient-dark opacity-6"></span>
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
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="/ternak/add">
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
</header>

  <main>
   <div class="profile-container">
   
   <img class="profile-picture" src="download.png" alt="User Profile Picture">
   <a href="{{ route('profile.edit') }}"><button class="edit-button" id="EditDATA"><span class="icon">&#9998;</span></button></a><!-- tombol edit semua data user -->
      <div class="profile-content">
       <strong>
       <p style="font-size: 25px;">User Name </p>
       <p style="font-size: 25px;">john.doe@example.com </p>
       <p style="font-size: 25px;">Role</p>
       </strong>
       <!-- Tambahkan informasi pengguna lainnya sesuai kebutuhan -->
</div>

</main>

</body>

</html>