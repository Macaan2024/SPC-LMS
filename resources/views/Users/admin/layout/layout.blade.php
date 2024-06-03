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
        @elseif (isset( $bookavailable_list ))
            {{ $bookavailable_list }}
        @elseif (isset( $bookunavailable_list))
            {{ $bookunavailable_list }}
        @elseif (isset( $bookelementary_list))
            {{ $bookelementary_list }}
        @elseif (isset( $bookjuniorhigh_list))
            {{ $bookjuniorhigh_list }}
        @elseif (isset( $bookseniorhigh_list))
            {{ $bookseniorhigh_list}}
        @elseif (isset( $bookcollege_list))
            {{ $bookcollege_list }}
        @elseif (isset( $usercollege_list))
            {{ $usercollege_list }}
        @elseif (isset( $userseniorhigh_list))
            {{ $userseniorhigh_list }}
        @elseif (isset( $userjuniorhigh_list))
            {{ $userjuniorhigh_list }}
        @elseif (isset( $userelementary_list))
            {{ $userelementary_list }}
        @elseif (isset( $userfaculty_list ))
            {{ $userfaculty_list }}
        @elseif (isset( $userstaff_list))
            {{ $userstaff_list}}
        @elseif (isset( $transactionongoing_list))
            {{ $transactionongoing_list}}
        @elseif (isset( $transactionreturned_list))
            {{ $transactionreturned_list}}
        @elseif (isset( $transactioncancel_list))
            {{ $transactioncancel_list}}
        @elseif (isset( $transactionwithoverdue_list))
            {{ $transactionwithoverdue_list }}
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
