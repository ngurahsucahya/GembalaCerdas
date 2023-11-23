<!DOCTYPE html>
<html>
<head>
    <title>Input Data RFID</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Data RFID</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('rfid-data.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="rfid">RFID</label>
                            <input type="text" name="rfid" id="rfid" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" name="tempat" id="tempat" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
