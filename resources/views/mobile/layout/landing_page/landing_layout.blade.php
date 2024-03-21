<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mobilecss/college.css">
    <link rel="stylesheet" href="/css/mobilecss/seniorhigh.css">
    <link rel="stylesheet" href="/css/mobilecss/highschool.css">
    <link rel="stylesheet" href="/css/mobilecss/elementary.css">

    <style>
        body {
            padding-top: 49.67px;
        }
    </style>
    
</head>
<body>
    <div class="position-fixed top-0 w-100">
        @include('mobile.layout.landing_page.landing_nav')
    </div>

    <div class="px-2 py-3">
        @include('mobile.layout.landing_page.landing_search')
    </div>
    <div class="py-2 px-2">
        @yield('landing-college')
        @yield('landing-seniorhighschool')
        @yield('landing-highschool')
        @yield('landing-elementary')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>