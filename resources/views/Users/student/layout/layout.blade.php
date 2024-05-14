<!DOCTYPE html>
<html lang="en">
    @include('Users.student.layout.header')
<body>
    
    @if (!isset($landing_page))
        @include('Users.student.layout.nav') 
    @else
        {{ $landing_page }}
    @endif
    
    {{ $slot }}


    @include('Users.student.layout.footer')
</body>
</html>
