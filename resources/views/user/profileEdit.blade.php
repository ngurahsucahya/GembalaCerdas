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
    <title>Profile Edit</title>
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
      background-image: url('{{ asset('background.png') }}');
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      height: 120vh;
    }

    .form-space {
      max-width: 600px;
      margin: 50px auto;
      background: rgb(2,0,36);
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,255,255,1) 0%, rgba(201,235,235,0.997161779510841) 100%, rgba(0,212,255,1) 100%);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transform: translateY(10%);
      background-position: auto;
     
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
    }

    input {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      
    }

    .submit-button {
      background: linear-gradient(87deg, #ade38d 0, #118F6A 100%) !important;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top:20px
      
    }

    .submit-button:hover {
    background-color: #45a049;
    }

		image{
      width: 100px;
      height: 100px;
    }
    html, body {
    width: 100%;
    margin: 0; 
    padding: 0; 
    }
    
	</style>
<body>
<header><!-- NAVIGATION BAR-->
<x-navbar/>
<span class="mask bg-gradient-dark opacity-6" style="  height: 120vh;"></span>
</header>
<!-- End Navbar -->

<main>

  <div class="form-space">
    <h2>Edit Profile</h2>
    <form action="/profile/update/{{$user->id}}" method="post">
      @csrf
      <div class="text-center">
        <img src="{{Vite::asset('resources/images/profile.png')}}"  alt="profile" class="arrow ms-auto ms-md-2" width="75" height="75">
        <h5>Upload foto baru...</h5>
        
        <input type="file" class="form-control">
      </div>

      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter new username" value={{$user->name}}>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter new email" value={{$user->email}}>

      <!-- <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter new password">
       nanti value nya itu autofill ke data si user sekarang -->

      <!-- <label for="role">Role:</label>
      <select id="role" name="role">
        <option value="user">Employee</option>
        <option value="admin">Doctor</option>

      </select> -->
      
      <!-- Role sama password keliatannya perlu dibikin fungsi khusus, jadi ga sembarangan bisa edit -->

      <button type="submit" class="submit-button">Save Changes</button>
    </form>
  </div>


  </main>
  </body>
</html>
