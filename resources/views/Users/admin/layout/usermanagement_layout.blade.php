<!DOCTYPE html>
<html lang="en">
    @include('Users.admin.layout.header')
<body>
    @include('Users.admin.layout.nav')
    
    {{ $slot }}
        @if(isset($user_registration))
        {{ $user_registration }}
        @endif

    @stack('user_registration')
    

    @include('Users.admin.layout.footer')
</body>
</html>
