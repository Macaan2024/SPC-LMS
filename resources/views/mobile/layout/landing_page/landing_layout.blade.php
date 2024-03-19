<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/mobilecss/college.css">
    <link rel="stylesheet" href="css/mobilecss/seniorhigh.css">
    <link rel="stylesheet" href="css/mobilecss/highschool.css">
    <link rel="stylesheet" href="css/mobilecss/elementary.css">
</head>
<body>
    @include('mobile/layout/landing_page/nav')
    @include('mobile/layout/landing_page/search')
    @include('mobile/layout/landing_page/selection_year')

    @yield('landing-college')
    @yield('landing-seniorhigh')
    @yield('landing-highschool')
    @yield('landing-elementary')
    <script src="js/mobilejs/landing.js"></script>
</body>
</html>