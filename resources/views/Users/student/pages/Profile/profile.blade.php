<x-student.layout>
    <x-slot name="profile">
    <div class="container mt-5" style="min-width:320px;">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="d-flex flex-column align-items-center gap-5">
                        <div style="height:175px;width:175px;">
                            <img src="{{ asset($student->role->role_description . '/' . $student->level . '/' . $student->user_image) }}" alt="User Image" style="height:100%;width:100%;" class="object-fit-fill rounded-circle">
                        </div>
                        <div>
                            <h5 class="">{{ $student->firstname . ' ' . $student->lastname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row row-cols-2 row-cols-md-4 justify-content-center p-0 m-0">
                <div class="col">
                    <div class="d-flex flex-column gap-2">
                        <h6 class="fw-normal">Role</h6>
                        <h6 class="fw-normal">Unique ID</h6>
                        <h6 class="fw-normal">Lastname</h6>
                        <h6 class="fw-normal">Firstname</h6>
                        <h6 class="fw-normal">Middlename</h6>
                        <h6 class="fw-normal">Gender</h6>
                        <h6 class="fw-normal">Class Level</h6>
                        @if($student->level == 'College')
                        <h6 class="fw-normal">Course</h6>
                        <h6 class="fw-normal">Department</h6>
                        <h6 class="fw-normal">Year</h6>
                        @elseif($student->level == 'Senior Highschool')
                        <h6 class="fw-normal">Strand</h6>
                        <h6 class="fw-normal">Grade</h6>
                        <h6 class="fw-normal">Section</h6>
                        @elseif($student->level == 'Junior Highschool' || $student->level == 'Elementary')
                        <h6 class="fw-normal">Grade</h6>
                        <h6 class="fw-normal">Section</h6>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column gap-2">
                        <h6 class="fw-normal">: {{ $student->role->role_description }}</h6>
                        <h6 class="fw-normal">: {{ $student->unique_id}}</h6>
                        <h6 class="fw-normal">: {{ $student->lastname }}</h6>
                        <h6 class="fw-normal">: {{ $student->firstname}}</h6>
                        <h6 class="fw-normal">: {{ $student->middlename}}</h6>
                        <h6 class="fw-normal">: {{ $student->gender}}</h6>
                        <h6 class="fw-normal">: {{ $student->level}}</h6>
                        @if($student->level == 'College')
                        <h6 class="fw-normal">: {{ $student->course}}</h6>
                        <h6 class="fw-normal">: {{ $student->department}}</h6>
                        <h6 class="fw-normal">: {{ $student->year}}</h6>
                        @elseif($student->level == 'Senior Highschool')
                        <h6 class="fw-normal">: {{ $student->strand}}</h6>
                        <h6 class="fw-normal">: {{ $student->grade}}</h6>
                        <h6 class="fw-normal">: {{ $student->section}}</h6>
                        @elseif($student->level == 'Junior Highschool' || $student->level == 'Elementary')
                        <h6 class="fw-normal">: {{ $student->grade}}</h6>
                        <h6 class="fw-normal">: {{ $student->section}}</h6>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-student.layout>