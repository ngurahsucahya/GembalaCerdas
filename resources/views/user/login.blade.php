<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{Vite::asset('resources/images/logo.png')}}">
  <title>Log in | GembalaCerdas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin:0;
      background-image: url("{{Vite::asset('resources/images/background.png')}}");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
    
    .card-title {
      text-align: center; /* Menengahkan teks dalam card */
    }
  </style>
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
          
  <div class="container">
    <div class="col-md-6">
    <img src="{{Vite::asset('resources/images/logotext.png')}}" alt="GembalaCerdas" width="315" height="70" class="mx-auto d-block" style=margin:5px>
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Login</h3>
          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" value="{{ old('email') }}" id="email" name="email" autofocus required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary text" style=float:right>Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>