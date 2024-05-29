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

    @if (isset($request_book))
        {{ $request_book }}
    @endif

    
    {{-- RequestBooks  --}}
    @if (isset($request_books))
        {{ $request_books }}
    @elseif (isset($view_requestbook))
        {{ $view_requestbook }}
    @endif

    @include('Users.student.layout.footer')
</body>
</html>
