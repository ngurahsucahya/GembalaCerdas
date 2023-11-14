<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin:0;
      background-color: #ECECEC;
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
      <div class="card">
        <div class="card-body">
          <form action="/register" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control" value="{{ old('email') }}" id="email" name="email" autofocus required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" autofocus required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="admin" value="admin" required>
                            <label class="form-check-label" for="admin">Admin</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="doctor" value="doctor" required>
                            <label class="form-check-label" for="doctor">Doctor</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="employee" value="employee" required>
                            <label class="form-check-label" for="employee">Employee</label>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary text">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>