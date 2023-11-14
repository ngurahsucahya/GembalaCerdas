<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <title>GembalaCerdas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
         body {
            height: 100%;
            margin: 0;
            background-color: white;
            justify-content: center;
            align-items: center;
         }

         .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
         }

         .title-section {
            justify-content: center;
            /* position: relative; */
            background-color: transparent;
            align-items: center;
            padding: 30px 0;
            text-align: center;
            margin-top: 6vh;
         }

         .navbar {
            display: flex;
            justify-content: center;
            background-color: #118F6A;
         }

         .navbar-brand {
            color: #ffffff;
         }

         .navbar-collapse {
            justify-content: flex-end;
         }

         .navbar-nav .nav-link {
            color: #ffffff !important;
         }

         .bg-primary {
            background-color: #118F6A;
         }

         .nav-item {
            margin-right: 20px;
            justify-content: center;
            align-items: center;
         }

         .bg1{
            background-color: #14795C;
         }

         .bg2{
            background-color: #209C77;
         }

         .bg3{
            background-color: #44AB7F;
         }

         .container{
            justify-content: center;
            align-items: center;
            /* background-color: #000000; */
         }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="GembalaCerdas" width="45" height="45">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <div class="container">
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
            @if (Route::has('login'))
                    @auth
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/">
                           <u>Dashboard</u>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/data-ternak">Data Ternak</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/input_ternak">Input Ternak</a>
                     </li>
                     <li class="nav-item">
                        <img src="{{ asset('images/notif.png') }}" alt="Notif" width="40" height="40">
                     </li>
                     <li class="nav-item">
                        <img src="{{ asset('images/profile.png') }}" alt="Notif" width="45" height="45">
                     </li>
                     <form action="/logout" method="post"> @csrf <div class="d-grid gap-3">
                           <button type="submit" class="btn btn-warning btn-block" id="logout">Logout</button>
                        </div>
                     </form>
                     @if(auth()->user()->role == 'admin')
                        <li class="nav-item">
                           <a class="btn btn-warning btn-block" aria-current="page" href="/register" style=margin-left:10px>Register</a>
                        </li>
                     @endif
                  </ul>
               
                    @else
                        <a href="{{ route('login') }}" class="btn btn-warning btn-block">Log in</a>
                    @endauth
                    </div>
               </div>
                </div>
            @endif   
            </div>
         </nav>
         
         <section class="title-section">
            <div class="container">
               <img src="{{ asset('images/logotext.png') }}" alt="GembalaCerdas" width="450" height="100">
            </div>
         </section>
    </body>
</html>
