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
    <title>Dashboard | GembalaCerdas</title>
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
    <header class="header-2">
      <div class="page-header min-vh-75 relative" style="background-image: url({{Vite::asset('resources/images/background.png')}})">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 text-center mx-auto">
              <!-- <h1 class="text-white pt-3 mt-n5">GembalaCerdas</h1> -->
              <img src="{{ Vite::asset('resources/images/logotextwhite.png') }}" alt="GembalaCerdas" width="450" height="105">
              <p class="lead text-white mt-3">Ceritanya mau dikasih jargon<br/>hehe</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
      <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mx-auto py-3">
              <div class="row">
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h1 class="text-primary">
                      <span id="state1" countTo="70">0</span>
                    </h1>
                    <h5 class="mt-3">Pejantan</h5>
                    <!-- <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p> -->
                  </div>
                  <hr class="vertical dark">
                </div>
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h1 class="text-primary">
                      <span id="state2" countTo="15">0</span>
                    </h1>
                    <h5 class="mt-3">Induk</h5>
                    <!-- <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p> -->
                  </div>
                  <hr class="vertical dark">
                </div>
                <div class="col-md-4">
                  <div class="p-3 text-center">
                    <h1 class="text-primary" id="state3" countTo="4">0</h1>
                    <h5 class="mt-3">Anak</h5>
                    <!-- <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </body> 
</html>