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
        @elseif (isset($approved_list))
            {{ $approved_list }}
        @endif
        {{-- --}}


        {{-- Qr Code --}}
        
        @if(isset($qr_code))
            {{ $qr_code }}
        @endif

        {{-- Book Management Page --}}

        @if (isset($book_management))
            {{ $book_management }}
        @elseif (isset($book_view))
            {{ $book_view }}
        @elseif (isset($book_edit))
            {{ $book_edit }}
        @endif

        {{-- Book Request Page --}}
        @if (isset($book_request))
            {{ $book_request }}
        @endif

        {{-- Transaction --}}
        @if (isset($transaction))
            {{ $transaction }}
        @elseif (isset($transaction_view))
            {{ $transaction_view }}
        @endif

        {{-- User fines --}}
        @if (isset($user_fines))
            {{ $user_fines }}
        @elseif (isset($fineshistory))
            {{ $fineshistory }}
        @elseif (isset($viewfines))
            {{ $viewfines }}
        @elseif (isset($Tester))
            {{ $Tester}}
        @endif

        {{-- User Profile --}}
        @if (isset($profile))
            {{ $profile }}
        @elseif (isset($changepassword))
            {{ $changepassword }}
        @endif
    @include('Users.admin.layout.footer')
</body>
</html>
