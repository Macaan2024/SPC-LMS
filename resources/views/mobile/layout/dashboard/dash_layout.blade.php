<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/mobilecss/college.css">
    <link rel="stylesheet" href="css/mobilecss/seniorhigh.css">
    <link rel="stylesheet" href="css/mobilecss/highschool.css">
    <link rel="stylesheet" href="css/mobilecss/elementary.css">
</head>
<body>
        
@include('mobile/layout/dashboard/dash_nav')
@include('mobile/layout/dashboard/dash_search')
@include('mobile/layout/dashboard/dash_select_year_level')

@yield('dashboard-college')
@yield('dashboard-seniorhigh')
@yield('dashboard-highschool')
@yield('dashboard-elementary')
<script src="js/mobilejs/dash.js"></script>
<script src="js/mobilejs/dash-search.js"></script>
</body>
</html>