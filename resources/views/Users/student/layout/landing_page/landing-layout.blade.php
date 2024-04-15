<!DOCTYPE html>
<html lang="en">
<head>
    <!-- including headers -->
    @include('Users.student.layout.landing_page.headers')
    <!-- importing bootstrap link -->
    <x-links.bootstrap.link />
    <x-links.jqueryCDN.JqueryCDN />
    <style>
        body {
            background-color:#F5F5F5;
        }
    </style>
</head>

<body>

    <!-- including nav -->
    @include('Users.student.layout.landing_page.nav')

        <div class="m-0 p-0 px-3 py-4">
            <h3 class="m-0 p-0 fw-normal text-center fs-3 text-nowrap">Welcome to SPC Library</h3>
        </div>

        <!-- including component searchBook -->
        <x-student.index.searchBook/>

        <!-- index child content -->
        {{ $slot }}
        
        <!-- @stack('ajax-BookYear') -->
        <!-- bootstrap script -->
        <x-links.bootstrap.script />

    <!-- including footer -->
    @include('Users.student.layout.landing_page.footer')
</body>
</html>