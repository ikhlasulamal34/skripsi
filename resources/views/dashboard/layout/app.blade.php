<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="plugin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="plugin/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard | Bubut Kuy</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="plugin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="plugin/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="plugin/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">

        @include('dashboard.layout.includes.sidebar')
        <div class="main-panel">
            @include('dashboard.layout.includes.navbar')
            @yield('name')
            @include('dashboard.layout.includes.footer')
        </div>
    </div>

    <script src="plugin/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="plugin/js/core/popper.min.js" type="text/javascript"></script>
    <script src="plugin/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugin/js/plugins/bootstrap-switch.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="plugin/js/plugins/chartist.min.js"></script>
    <script src="plugin/js/plugins/bootstrap-notify.js"></script>
    <script src="plugin/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
    <script src="plugin/js/demo.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</html>


</body>

</html>
