<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/mobilecss/college.css">
    <link rel="stylesheet" href="css/mobilecss/seniorhigh.css">
    <link rel="stylesheet" href="css/mobilecss/highschool.css">
    <link rel="stylesheet" href="css/mobilecss/elementary.css">
    <link rel="stylesheet" href="css/mobilecss/sidebar.css">
</head>
    <style>
        body {
           padding-top:49.67px;
        }
    </style>
<body>
<div class="position-fixed top-0 w-100">
    @include('mobile/layout/dashboard/dash_nav')
</div>
<div class="px-2 py-2">
    <!-- <div style="position:absolute;z-index: -1; top:3%;"> -->
    @include('mobile/layout/dashboard/dash_search')
    @include('mobile/layout/dashboard/dash_select_year_level')
    @yield('dashboard-college')
    @yield('dashboard-seniorhigh')
    @yield('dashboard-highschool')
    @yield('dashboard-elementary')
</div>
<script src="js/mobilejs/dash.js"></script>
<script src="js/mobilejs/dash-search.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>