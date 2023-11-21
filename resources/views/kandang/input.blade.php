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
    <title>Input Kandang</title>
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
      height: 150vh;
    }
      .box {
      background-color: rgba(255, 255, 255, 0.8); 
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 50px auto;
      transform:translateY(10%);
      width:700px;
      height:700px;
  }

     form {
    max-width: 400px; /* Adjust the width as needed */
    margin: 0 auto;
    }

/* Add additional styling for form elements if needed */
label {
    display: block;
    margin-bottom: 8px;
}

input,
select,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;

}


#deskripsi {
    width: 100%;
    height: 200px; /* Adjust the height as needed */
    padding: 8px;
    box-sizing: border-box;
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
<span class="mask bg-gradient-dark opacity-6" style= height:150vh;></span>
    <header>
    <x-navbar/>
</header>
<main>
  <div class="box">
  <div class="card-header">
              <div class="larger-box">
              <h2> Input Kandang </h2>
              </div>
            </div>
            <label for="nama_kandang">Nama Kandang:</label>
            <input type="text" id="nama_kandang" name="nama_kandang" required>

            <label for="ternak">Ternak:</label>
            <select id="ternak" name="ternak">
            <option value="test2">ternak1</option>
            <option value="test1">ternak2</option>
            </select>
            <label for="kapasitas">Kapasitas:</label>
            <input type="number" id="kapasitas" name="kapasitas" required>
            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea>

            <button type="submit" class="btn bg-gradient-success mb-0 me-1 mt-2 mt-md-0" style="background: linear-gradient(87deg, #74f52f 0, #118F6A 100%);">Submit</button>

  </div>
</main>









</body>
</hmtl>