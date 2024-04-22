<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-links.bootstrap.link />
    <style>
        body {
            padding-top:100px;
        }
    </style>
</head>
<body>
    
    @include('Users.student.layout.dashboard.nav')

    {{ $selectYear }}
    
    <x-links.bootstrap.script />
</body>
</html>