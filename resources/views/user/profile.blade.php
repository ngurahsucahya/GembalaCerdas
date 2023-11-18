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
  <x-navbar/>
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
