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
      background-color: #fff;
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

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
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
<!-- Navbar Transparent -->
<body>
<x-navbar/>

<main>

  <div class="form-space">
    <h2>Edit Profile</h2>
    <form>
      <div class="text-center">
        <img src="imej" class="avatar img-circle img-thumbnail" alt="test">
        <h5>Upload foto baru...</h5>
        
        <input type="file" class="form-control">
      </div>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter new username">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter new email">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter new password">

      <label for="role">Role:</label>
      <select id="role" name="role">
        <option value="user">Employee</option>
        <option value="admin">Doctor</option>


      </select>

      <button type="button" style="margin-top:20px;" onclick="submitForm()">Save Changes</button>
    </form>
  </div>


  </main>
  </body>
</html>
