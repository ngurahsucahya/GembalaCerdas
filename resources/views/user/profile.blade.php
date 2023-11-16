<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{Vite::asset('resources/images/logo.png')}}">
        <link rel="preconnect" href="https://fonts.bunny.net">


        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

            header {
                background-color: #118F6A;
                color: white;
                padding: 1em;
                display: flex;
                justify-content: space-between;
                height: 30px;
            }

            header img {
                max-height: 50px;
            }

            header nav {
                display: flex;
            }

            header a {
                color: white;
                text-decoration: none;
                margin-left: 20px;
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
            transform: translate(-640%,-550%);
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
    .fixed-top {
		position: fixed;
		top: 0;
		right: 0;
		left: 0;
		z-index: 1030;
	}
	
	.title-section {
		position: relative;
		background-color: transparent;
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
		margin-left: 0px;
		margin-right: 20px;
	}
	
	.bg1 {
		background-color: #14795C;
	}
	
	.bg2 {
		background-color: #209C77;
	}
	
	.bg3 {
		background-color: #44AB7F;
	}
	
	.mt-5 {
		margin-top: 5rem !important;
	}
	
	table {
		border-collapse: collapse;
		width: 100%;
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
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
    <div class="container"> <img src="{{Vite::asset('resources/images/logotext.png')}}" alt="GembalaCerdas" width="45" height="45">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/dashboard">Dashboard
                        </a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/data-ternak"><u>Data Ternak</u></a> </li>
					<li class="nav-item"> <a class="nav-link active text-center" aria-current="page" href="/input_ternak">Input Ternak</a> </li>
					<li class="nav-item">
                        <a href="/profile">
                           <img src="http://127.0.0.1:8000/build/assets/profile-687b474b.png" alt="profile" width="45" height="45">
                        </a>
                     </li>
					<!-- <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="/form_kandang">Pindah Kandang</a>
                     </li> -->
					<li class="nav-item"> <img src="{{Vite::asset('resources/images/notif.png')}}" alt="Notif" width="27" height="30"> </li>
					<form action="/logout" method="post"> @csrf
						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-warning btn-block" id="logout">Logout</button>
						</div>
					</form>
				</ul>
			</div>
		</div>
	</nav>
</header>

  <main>
   <div class="profile-container">
   
   <img class="profile-picture" src="download.png" alt="User Profile Picture">
   <button class="edit-button" id="EditDATA"><span class="icon">&#9998;</span></button><!-- tombol edit semua data user -->
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
