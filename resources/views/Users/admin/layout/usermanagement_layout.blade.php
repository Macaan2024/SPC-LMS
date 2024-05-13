<!DOCTYPE html>
<html lang="en">
    @include('Users.admin.layout.header')
<body>
    @include('Users.admin.layout.nav')
    
    {{ $slot }}

        @if(isset($user_registration))
            {{ $user_registration }}
            @stack('user_registration')

        @elseif(isset($edit_student))
            {{ $edit_student }}

        @elseif(isset($view_user))
            {{ $view_user}}  
              
        @endif
        

   
    

    @include('Users.admin.layout.footer')
</body>
</html>
