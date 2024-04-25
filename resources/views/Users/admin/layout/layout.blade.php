<!DOCTYPE html>
<html lang="en">
    @include('Users.admin.layout.header')
<body style="padding-top:60px;">
    @include('Users.admin.layout.nav')
    {{ $slot }}
    {{ $user_registration }}
    @stack('user_registration')


    @include('Users.admin.layout.footer')
</body>
</html>
