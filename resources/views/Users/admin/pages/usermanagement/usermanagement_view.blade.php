<x-admin.layout>
    <x-slot name="view_user">
        <div class="container-xxl mt-5">
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
                <div class="col">
                    <div class="d-flex flex-column" style="height:100%;width:100%;">
                        <h6>Previous Borrowed Book</h6>
                        <div class="border h-100 d-flex justify-content-center align-items-center">
                            @if ($previousBorrow && $previousBorrow->book)
                                <img src="{{ asset('books_images/' . $previousBorrow->book->level . '/' . $previousBorrow->book->category . '/' . $previousBorrow->book->image) }}" alt="Book Image">
                            @else
                                <p>No previous borrow record found.</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column" style="height:100%;width:100%;">
                        <h6>Logbook Qr Code</h6>
                        <div style="height:100%;width:100%;" class="border">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=75x75&data={{$student->unique_id}}" style="height:100%;width:100%;" class="object-fit-contain" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <h6 class="p-0 m-0 fs-6">Transaction</h6>
                <table class="table-responsive table align-middle mt-3 table-striped border border">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Accesion Number</th>
                            <th>Title</th>
                            <th>Start Day</th>
                            <th>Start Time</th>
                            <th>End Day</th>
                            <th>End Time</th>
                            <th>Duration</th>
                            <th>Overdue</th>
                            <th>Penalty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 0; @endphp
                        @foreach ($transaction as $transactions)
                            @if($transactions->status == 'returned')
                                <tr>
                                    <td>{{ $index++ }}</td>
                                    <td>{{ $transactions->book->accesion_number}}</td>
                                    <td>{{ $transactions->book->title}}</td>
                                    <td>{{ $transactions->start_date}}</td>
                                    <td>{{ \Carbon\Carbon::parse($transactions->start_time)->format('g:i A')}}</td>
                                    <td>{{ $transactions->end_day}}</td>
                                    <td>{{ \Carbon\Carbon::parse($transactions->end_day)->format('g:i A')}}</td>
                                    <td>8 Hours</td>
                                    <td>{{ $transactions->overdue}}</td>
                                    <td>{{ $transactions->penalty}}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn bg-primary text-white bg-opacity-75 py-1">View</button>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
    </x-slot>
</x-admin.layout>