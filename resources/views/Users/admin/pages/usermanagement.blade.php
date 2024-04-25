<x-admin.dashboard-layout>

    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add User</button>

    <x-slot name="user_registration">
        <x-admin.modal-register />
        {{-- User Registration Scripts--}}
        @push('user_registration') 
        <script src="{{ asset('js/admin/user_registration.js') }}"></script>
        @endpush
    </x-slot>

<!-- -------------------------- ADD ACCOUNT --- -->


</x-admin.dashboard-layout>