<!DOCTYPE html>
<html lang="en">
    @include('Users.admin.layout.header')
<body>
    @include('Users.admin.layout.nav')
    
    {{ $slot }}

        {{-- Admin Usermanagement Pages --}}
        @if(isset($user_registration))
            {{ $user_registration }}
            @stack('user_registration')

        @elseif(isset($edit_student))
            {{ $edit_student }}

        @elseif(isset($view_user))
            {{ $view_user}}  
              
        @endif
        {{-- End of Usermanagement Pages --}}


        {{-- Admin Dashnboard Pages --}}

        @if(isset($dashboard))
            {{ $dashboard }}
        @endif
        {{-- --}}
        


        {{-- Admin Book Management Pages --}}

        @if (isset($book_management))
            {{ $book_management }}
        @endif

   
    

    @include('Users.admin.layout.footer')
</body>
</html>
