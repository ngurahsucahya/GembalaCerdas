<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Ternak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Create Ternak</h2>

    <form action="{{ url('/ternak/add') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="rfid">RFID:</label>
            <input type="text" class="form-control" id="rfid" name="rfid" value="{{ old('rfid') }}">
            @error('rfid')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_ternak">Nama Ternak:</label>
            <input type="text" class="form-control" id="nama_ternak" name="nama_ternak" value="{{ old('nama_ternak') }}">
            @error('nama_ternak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="ras">Ras:</label>
            <select class="form-control" id="ras" name="ras">
                <option value="">Select Ras</option>
                <option value="Garut">Garut</option>
                <!-- Add options for each ras value -->
            </select>
            @error('ras')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="">Select Jenis Kelamin</option>
                <option value="Jantan">Jantan</option>
                <option value="Betina">Betina</option>
            </select>
            @error('jenis_kelamin')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="bobot_badan">Bobot Badan:</label>
            <input type="text" class="form-control" id="bobot_badan" name="bobot_badan" value="{{ old('bobot_badan') }}">
            @error('bobot_badan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi_fenotip">Deskripsi Fenotip:</label>
            <textarea class="form-control" id="deskripsi_fenotip" name="deskripsi_fenotip">{{ old('deskripsi_fenotip') }}</textarea>
            @error('deskripsi_fenotip')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
