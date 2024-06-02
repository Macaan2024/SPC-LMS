<x-admin.layout>
    <x-slot name="view_user">
        <div class="container-xxl mt-5">
            <div class="row justify-content-center bg-primary">
                <div class="col-auto">
                    <div class="d-flex flex-column align-items-center gap-5">
                        <div style="height:150px;width:150px;">
                            <img src="{{ asset($student->role->role_description . '/' . $student->level . '/' . $student->user_image) }}" alt="User Image" style="height:100%;width:100%;" class="object-fit-fill rounded-circle">
                        </div>
                        <div>
                            <h5 class="">{{ $student->firstname . ' ' . $student->lastname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin.layout>