<x-admin.usermanagement-layout>
    @if (isset($student->id))
        <h1>{{ $student->lastname }}</h1>
    @else 
        <h1>FAIL</h1>
    @endif
</x-admin.usermanagement-layout>