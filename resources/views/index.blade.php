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
    <title>Dashboard | GembalaCerdas</title>
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
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Moment.js (required for time-based charts) -->
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <style>
  .chart-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .chart {
    max-width: 48%;
    box-sizing: border-box;
  }

  @media (max-width: 768px) {
    .chart {
      max-width: 100%;
    }
  }
</style>
  </head>
  <body class="index-page bg-gray-200">
    <x-navbar/>

    <header class="header-2">
      <div class="page-header min-vh-75 relative" style="background-image: url({{Vite::asset('resources/images/background.png')}})">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 text-center mx-auto">
              <!-- <h1 class="text-white pt-3 mt-n5">GembalaCerdas</h1> -->
              <img src="{{ Vite::asset('resources/images/logotextwhite.png') }}" alt="GembalaCerdas" width="450" height="105">
              <p class="lead text-white mt-3">Ceritanya mau dikasih tagline<br/>hehe</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6" style="margin-bottom:10px">
    <h3 class="text-center">Persebaran Ternak</h3>
      <section class="pt-3 pb-4" id="count-stats">
          <div class="row">
            <div class="col-lg-9 mx-auto py-3">
              <div class="row">
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h1 class="text-primary">
                      <span id="state1" countTo="70">{{ $jumlah_pejantan }}</span>
                    </h1>
                    <h5 class="mt-3">Pejantan</h5>
                    <!-- <p class="text-sm font-weight-normal">From buttons, to inputs, navbars, alerts or cards, you are covered</p> -->
                  </div>
                  <hr class="vertical dark">
                </div>
                <div class="col-md-4 position-relative">
                  <div class="p-3 text-center">
                    <h1 class="text-primary">
                      <span id="state2" countTo="15">{{ $jumlah_induk }}</span>
                    </h1>
                    <h5 class="mt-3">Induk</h5>
                    <!-- <p class="text-sm font-weight-normal">Mix the sections, change the colors and unleash your creativity</p> -->
                  </div>
                  <hr class="vertical dark">
                </div>
                <div class="col-md-4">
                  <div class="p-3 text-center">
                    <h1 class="text-primary" id="state3" countTo="4">{{ $jumlah_anak }}</h1>
                    <h5 class="mt-3">Anak</h5>
                    <!-- <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use our pre-made pages for your website</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h3 class="text-center">Pemantauan Lingkungan Kandang</h3>
          <div class="chart-container" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <div class="chart" style="flex: 1; max-width: 48%;">
              <canvas id="temperatureChart" style="width: 100%; height: auto;"></canvas>
            </div>
            <div class="chart" style="flex: 1; max-width: 48%;">
              <canvas id="humidityChart" style="width: 100%; height: auto;"></canvas>
            </div>
          </div>
      </section>

      @if(auth()->user()->role != 'employee')
        <div class="search-container py-3">
          <form action="{{ url('/notif/add') }}" method="POST">
          @csrf
              <input type="hidden" id="author" name="author" value={{auth()->user()->name}}>
              <input type="text" id="content" name="content" class="form-input search-box" placeholder="Type notification here..." required>
              <button type="submit" class="btn bg-gradient-info  mb-0 me-1 mt-2 mt-md-0">Add Notif</button>
          </form>
        </div>
      @endif
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-MCkSA1x1lFNtuY4tRnSuHwiSHPHibZ75+XG5AJBh0HSbE2Wy+6Y72QaZwBRQIlxi" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy/9ADmIaXaV6QprJgoP1W1a2KtOTI2aI6" crossorigin="anonymous"></script>

<script>

    fetch('/get-sensor-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(entry => entry.created_at);
            const temperatureData = data.map(entry => entry.suhu);
            const humidityData = data.map(entry => entry.kelembapan);

            const formattedLabels = labels.map(label => new Date(label).toLocaleDateString());

            const temperatureCtx = document.getElementById('temperatureChart').getContext('2d');
            new Chart(temperatureCtx, {
                type: 'line',
                data: {
                    labels: formattedLabels,
                    datasets: [{
                        label: 'Temperature',
                        borderColor: 'rgb(255, 99, 132)',
                        data: temperatureData,
                    }]
                },
                options: {
                    scales: {
                        x: {
                            type: 'category',
                            labels: formattedLabels,
                        },
                        y: {
                            beginAtZero: true,
                        },
                    }
                }
            });

            const humidityCtx = document.getElementById('humidityChart').getContext('2d');
            new Chart(humidityCtx, {
                type: 'line',
                data: {
                    labels: formattedLabels,
                    datasets: [{
                        label: 'Humidity',
                        borderColor: 'rgb(75, 192, 192)',
                        data: humidityData,
                    }]
                },
                options: {
                    scales: {
                        x: {
                            type: 'category',
                            labels: formattedLabels,
                        },
                        y: {
                            beginAtZero: true,
                        },
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching sensor data:', error));
</script>


</body> 
</html>