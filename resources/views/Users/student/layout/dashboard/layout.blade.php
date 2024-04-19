<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <x-links.bootstrap.link />
    <style>
        body {
            padding-top:53px;
        }
    </style>
</head>
<body>
    
    @include('Users.student.layout.dashboard.nav')

    {{ $slot }}

    <x-links.bootstrap.script />
</body>
</html>