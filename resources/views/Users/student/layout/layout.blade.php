<!DOCTYPE html>
<html lang="en">
    @include('Users.student.layout.header')
<body>
    
    {{-- if the users is on landing page --}}
    @if (!isset($landing_page))
        @include('Users.student.layout.nav') 
    @else
        {{ $landing_page }}
    @endif
    
    {{ $slot }}

    {{-- Dashboard --}}


    @if (isset($dashboard))
        {{ $dashboard }}       

    @endif
    
    @if (isset($view_category))
        {{ $view_category}}
    @endif

    


    @include('Users.student.layout.footer')
</body>
</html>
