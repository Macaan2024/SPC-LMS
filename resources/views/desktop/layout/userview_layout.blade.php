<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/desktop/navhead.css">{{-- CSS for navbar --}}
    <link rel="stylesheet" href="/css/desktop/sidebar.css">{{-- CSS for sidebar --}}
    <link rel="stylesheet" href="/css/desktop/dash.css">{{-- CSS for dashboard --}}
    <link rel="stylesheet" href="/css/desktop/bookmanagement.css">
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-sizing: border-box;
            font-size:14px;
            background-color: #f8f9fa;
        }
        body::-webkit-scrollbar {
            display: none;
        } 
    </style>

</head>
<body claass="bg-light">
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0 " style="">
            <div class="">
                @include('desktop/layout/nav') {{-- including navbar--}}
            </div>
        </div>
    </div>
    <div class="row m-0 p-0 d-flex justify-content-center">
        <div class="col-1 vh-100 bg-light"></div>
        <div class="col-10 m-0 p-0 ">
            <div class="row p-0 m-0 bg-success">
                <div class="content col-12 m-0 p-0">
                    <div class="col-12 p-0 m-0 bg-white">
                        @yield('userview-content')
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 bg-light"></div>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->