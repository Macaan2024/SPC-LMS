<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
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

    {{ $bookDisplay }}
    
    <x-links.bootstrap.script />
</body>
</html>