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
    <title>Register | GembalaCerdas</title>
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

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-header align-items-start min-vh-100" style="background-image: url({{Vite::asset('resources/images/background.png')}});" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                <img src="{{Vite::asset('resources/images/logotextwhite.png')}}" alt="GembalaCerdas" width="225" height="50" class="mx-auto d-block" style=margin:5px>
              </div>
            </div>
            <div class="card-body">
              <form action="/register" method="post" class="text-start">
                @csrf
                <div class="input-group input-group-outline mb-3">
                  <label  for="name" class="form-label"> </label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus required>
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label  for="email" class="form-label"> </label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" autofocus required>
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label for="password" class="form-label"> </label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <div class="row">
                        <!-- <div class="col"> -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="admin" value="admin" required>
                                <label class="form-check-label" for="admin">Admin</label>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="col"> -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="doctor" value="doctor" required>
                                <label class="form-check-label" for="doctor">Doctor</label>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="col"> -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" id="employee" value="employee" required>
                                <label class="form-check-label" for="employee">Employee</label>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
</body>
</html>