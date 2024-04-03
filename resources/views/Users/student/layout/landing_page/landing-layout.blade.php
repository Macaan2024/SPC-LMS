<!DOCTYPE html>
<html lang="en">
<head>
    <!-- including headers -->
    @include('Users.student.layout.landing_page.headers')
    <!-- importing bootstrap link -->
    <x-links.bootstrap.link />
</head>
<body>

    @include('Users.student.layout.landing_page.nav')

    <div class="mt-3">
        <x-student.index.searchBook/>
    </div>

    <div></div>

        {{ $slot }}


    <x-links.bootstrap.script />
</body>
</html>