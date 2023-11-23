<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sensor Data</title>
    <!-- Include your CSS stylesheets or Bootstrap if needed -->
</head>
<body>

<div class="container">
    <h2>Add Sensor Data</h2>

    <form action="{{ route('sensor-data.store') }}" method="post">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="suhu">Temperature:</label>
            <input type="text" class="form-control" id="suhu" name="suhu" required>
        </div>

        <div class="form-group">
            <label for="kelembapan">Humidity:</label>
            <input type="text" class="form-control" id="kelembapan" name="kelembapan" required>
        </div>

        <div class="form-group">
            <label for="kandang">Cage:</label>
            <input type="text" class="form-control" id="kandang" name="kandang" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Include your JS scripts if needed -->

</body>
</html>
