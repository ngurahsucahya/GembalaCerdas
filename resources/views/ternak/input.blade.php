<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Ternak</title>
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
    <h2>Input Data Ternak</h2>

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
            <input type="text" class="form-control" id="nama_ternak" name="nama_ternak" value="{{ old('nama_ternak') }}" required>
            @error('nama_ternak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="ras">Ras:</label>
            <select class="form-control" id="ras" name="ras" required>
                <option value="" {{ old('ras') === '' ? 'selected' : '' }} >Select Ras</option>
                @foreach ($list_ras as $each_ras)
                    <option value="{{ $each_ras }}" {{ old('ras') === $each_ras ? 'selected' : '' }}>{{ $each_ras }}</option>
                @endforeach
            </select>
            @error('ras')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" {{ old('jenis_kelamin') === '' ? 'selected' : '' }}>Select Jenis Kelamin</option>
                <option value="Jantan" {{ old('jenis_kelamin') === 'Jantan' ? 'selected' : '' }}>Jantan</option>
                <option value="Betina" {{ old('jenis_kelamin') === 'Betina' ? 'selected' : '' }}>Betina</option>
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
            <input type="text" pattern="[0-9]*" inputmode="numeric" class="form-control" id="bobot_badan" name="bobot_badan" value="{{ old('bobot_badan') }}">
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

        <div class="form-group" id="statusField" style="display: {{ old('status') === '' ? 'none' : 'block' }};">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="" {{ old('status') === '' ? 'selected' : '' }}>Select Status</option>
                <option value="Induk" {{ old('status') === 'Induk' ? 'selected' : '' }}>Induk</option>
                <option value="Pejantan" {{ old('status') === 'Pejantan' ? 'selected' : '' }}>Pejantan</option>
                <option value="Anak" {{ old('status') === 'Anak' ? 'selected' : '' }}>Anak</option>
            </select>
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div id="idAnakField" class="form-group" style="display: {{ old('status') === 'Anak' ? 'block' : 'none' }};">
            <label for="id_anak">ID Anak:</label>
            <input type="text" class="form-control" id="id_anak" name="id_anak" value="{{ old('id_anak') }}">
            @error('id_anak')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    document.getElementById('jenis_kelamin').addEventListener('change', function() {
        var statusField = document.getElementById('statusField');

        if (this.value === '') {
            statusField.style.display = 'none';
            statusSelect.value = '';
        } else if (this.value === 'Jantan') {
            statusField.style.display = 'block';
            document.querySelector('#status option[value="Induk"]').disabled = true;
            document.querySelector('#status option[value="Pejantan"]').disabled = false;
        } else if (this.value === 'Betina') {
            statusField.style.display = 'block';
            document.querySelector('#status option[value="Induk"]').disabled = false;
            document.querySelector('#status option[value="Pejantan"]').disabled = true;
        } else {
            statusField.style.display = 'block';
        }
    });

    document.getElementById('status').addEventListener('change', function() {
        var idAnakField = document.getElementById('idAnakField');

        if (this.value === 'Anak') {
            idAnakField.style.display = 'block';
            idAnakField.querySelector('input').required = true;
        } else {
            idAnakField.style.display = 'none';
            idAnakField.querySelector('input').required = false;
        }
    });
</script>

</body>
</html>
