<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/desktop/navhead.css">{{-- CSS for navbar --}}
    <link rel="stylesheet" href="/css/desktop/sidebar.css">{{-- CSS for sidebar --}}
    <link rel="stylesheet" href="/css/desktop/dash.css">{{-- CSS for dashboard --}}
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-sizing: border-box;
            font-size:14px
        }
        body::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>
<body>
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            @include('desktop/layout/nav') {{-- including navbar--}}
        </div>
    </div>
    <div class="row m-0 p-0 min-vh-100">
        <div class="col-12 m-0 p-0 h-100">
            <div class="row p-0 m-0 h-100">
                <div class="col-2 m-0 p-0 bg-primary flex-column bg-success h-100">
                    <div class="row p-0 m-0 h-100">
                        <div class="col-12 p-0 m-0 bg-danger h-100 p-5">
                            @include('desktop/layout/sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-10 m-0 p-0 h-100">
                    <div class="col-12 p-0 m-0 h-100">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->