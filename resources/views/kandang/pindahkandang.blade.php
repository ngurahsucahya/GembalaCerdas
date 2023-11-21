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
    <title>Pindah Kandang</title>
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
            background-color: #f4f4f4;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 120vh;
          }
            .transparent-form {
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the transparency */
            padding: 20px;
            border-radius: 10px;
            width: 750px; /* Adjust the width as needed */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 50px auto;
            transform:translateY(20%);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background: linear-gradient(87deg, #74f52f 0, #118F6A 100%);
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .card-header {
    width: 100%; /* Adjust the max-width as needed */
    margin: 0 auto;
    line-height: 10px; /* Adjust the line height as needed */
        }

        .larger-box {
            background: linear-gradient(87deg,#74f52f 0, #118F6A 100%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            padding: 20px; /* Adjust padding for content inside the larger box */
            text-align: center; /* Center the content inside the larger box */
        }

        .larger-box h2 {
            margin: 5px;
            top: 0;
            color:#ffff;
            font-family: 'Courier New', monospace;"
        }
        </style>
<body style="background-image: url('{{Vite::asset('resources/images/background3.png')}}');">
<span class="mask bg-gradient-dark opacity-6" style= height:120vh;></span>
                <header>
                <x-navbar/>
            </header>
            <main>
            <div class="transparent-form">
            <div class="card-header">
              <div class="larger-box">
              <h2> Pindah Kandang </h2>
              </div>
            </div>
        <div class="form-group">
            <label for="selectTernak">Pilih Ternak:</label>
            <select id="selectTernak" name="selectTernak">
                <option value="ternak1">Ternak 1</option>
                <option value="ternak2">Ternak 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group">
        <label for="kandang-asal">Kandang asal:</label>
        <input type="text" id="kandang-asal" name="kandang-asal" placeholder="Enter kandang asal" value="autofill saat memilih ternak" style="width:250px; border-radius:8px;">
         </div>


        <div class="form-group">
            <label for="selectKandangTujuan">Kandang Tujuan:</label>
            <select id="selectKandangTujuan" name="selectKandangTujuan">
                <option value="kandang1">Kandang 1</option>
                <option value="kandang2">Kandang 2</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <button type="submit">Submit</button>
    </div>

</main>