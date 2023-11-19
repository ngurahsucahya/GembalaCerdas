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

            .profile-card {
            width: 300px;
            height: 400px;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(201,235,235,0.997161779510841) 100%, rgba(0,212,255,1) 100%);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transform: translate(155%,40%);
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius:100%;
            transform: translateY(-35%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding:2px;
            box-sizing: content-box;
            background-color: #118F6A;
        }
        
        .user-info {
            padding: 20px;
            transform:translateY(-20%);
        }

        .username {
            font-size: 1.4em;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .email {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 10px;
        }

        .role {
            font-size: 1.2em;
            color: #888;
        }
    
        .container {
            text-align:center;
            justify-content: center;
            align-items: center;
        }
        .edit-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 15px;
            background: linear-gradient(87deg, #ade38d 0, #118F6A 100%) !important;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .edit-button:hover {
          background-color: #45a049;
        }
        .profile-card .card-header {
            position: relative;
            width:300px;
        }
        .larger-box {
            background: linear-gradient(87deg, #ade38d 0, #118F6A 100%) !important; /* Use your desired gradient colors */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important; /* Adjust the shadow if needed */
            border-radius: 15px !important; /* Adjust the border-radius for rounded corners */
            padding: 30px 30px !important; /* Adjust the padding to make it larger */
        }
        
    </style>
</head>

<body>
  <x-navbar/>
  <main>
  <div class="profile-card">
       <div class="card-header">
              <div class="larger-box">
                <img src="http://127.0.0.1:8000/build/assets/logotextwhite-bf4967ae.png" alt="GembalaCerdas" width="225" height="50" class="mx-auto d-block" style="margin:5px; top:0;">
              </div>
            </div>
        <img class="profile-picture" src="{{ asset('/download.png') }}" alt="Profile Picture">
        <div class="user-info">
            <div class="username">{{$user->name}}</div>
            <div class="email">{{$user->email}}</div>
            <div class="role">{{$user->role}}</div>
            <a href="{{ route('profile.edit') }}" class="edit-button">Edit Profile</a>
        </div>
    </div>

</main>

</body>

</html>
