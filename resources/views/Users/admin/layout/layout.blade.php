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
        {{-- End of Usermanagement Page -- }}

        {{-- Dashnboard Page --}}

        @if(isset($dashboard))
            {{ $dashboard }}
        @endif
        {{-- --}}


        {{-- Qr Code --}}
        
        @if(isset($qr_code))
            {{ $qr_code }}
        @endif

        {{-- Book Management Page --}}

        @if (isset($book_management))
            {{ $book_management }}
        @endif

        {{-- Book Request Page --}}
        @if (isset($book_request))
            {{ $book_request }}
        @endif

        {{-- Transaction --}}
        @if (isset($transaction))
            {{ $transaction }}
        @endif
    @include('Users.admin.layout.footer')
</body>
</html>
