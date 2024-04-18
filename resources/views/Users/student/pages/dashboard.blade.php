<x-student-landing-layout>


@if ($user->roles->contains('name', 'Student')) 
    <h1>Student</h1>
@elseif ($user->roles->contains('name', 'Admin')) 
    <h1>Admin</h1>


@endif

</x-student-landing-layout>