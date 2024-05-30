<x-admin.layout>
    <x-slot name="user_fines">
        <div class="container-fluid">

            <div class="d-flex gap-5 justify-content-center mt-5" style="width:100%;">
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">College</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $College }}</h6>
                    </div>
                </div>
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Senior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $SeniorHighschool }}</h6>
                    </div>
                </div>
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Junior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $JuniorHighschool }}</h6>
                    </div>
                </div>
                <div class="bg-dark bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Elementary</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $Elementary }}</h6>
                    </div>
                </div>
                <div class="bg-info bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Faculty</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $Faculty }}</h6>
                    </div>
                </div>
                <div class="bg-warning bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Library Staff</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $LibraryStaff }}</h6>
                    </div>
                </div>
            </div>

            <form class="d-flex form-group mt-5 px-5" action="{{ route('admin.userfines')}}" method="GET">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>

            <table class="table table-responsive table-striped border border mt-5 shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th class="fw-normal">No</th>
                        <th class="fw-normal">Role</th>
                        <th class="fw-normal">Unique_ID</th>
                        <th class="fw-normal">Name</th>
                        <th class="fw-normal">Gender</th>
                        <th class="fw-normal">Class Level</th>
                        <th class="fw-normal">Total Fines</th>
                        <th class="fw-normal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 0; @endphp
                    @foreach ($user as $users )
                        @php $totalFines = 0; @endphp
                        @if($users->role->role_description == 'Student')
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>Student</td>
                                <td>{{ $users->unique_id }}</td>
                                <td>{{ $users->firstname . ' ' . $users->lastname}}</td>
                                <td>{{ $users->gender }}</td>
                                <td>{{ $users->level }}</td>
                                <td>
                                    @foreach ($transaction as $transactions)
                                        @if ($transactions->user_id == $users->id)
                                            @php $totalFines += $transactions->penalty; @endphp
                                        @endif
                                    @endforeach
                                    {{ $totalFines }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.finespaid', ['id' => $users->id]) }}" method="POST">
                                        @csrf
                                        <a href="">
                                            <button type="submit" class="btn btn-danger">Paid</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @elseif ($users->role->role_description == 'Library Staff')
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>LibraryStaff</td>
                                <td>{{ $users->unique_id }}</td>
                                <td>{{ $users->firstname . ' ' . $users->lastname}}</td>
                                <td>{{ $users->gender }}</td>
                                <td>{{ $users->level }}</td>
                                <td>
                                    @foreach ($transaction as $transactions)
                                        @if ($transactions->user_id == $users->id)
                                            @php $totalFines += $transactions->penalty; @endphp
                                        @endif
                                    @endforeach
                                    {{ $totalFines }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.finespaid', ['id' => $users->id]) }}" method="POST">
                                        @csrf
                                        <a href="">
                                            <button type="submit" class="btn btn-danger">Paid</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @elseif ($users->role->role_description == 'Faculty')
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>Faculty</td>
                                <td>{{ $users->unique_id }}</td>
                                <td>{{ $users->firstname . ' ' . $users->lastname}}</td>
                                <td>{{ $users->gender }}</td>
                                <td>{{ $users->level }}</td>
                                <td>
                                    @foreach ($transaction as $transactions)
                                        @if ($transactions->user_id == $users->id)
                                            @php $totalFines += $transactions->penalty; @endphp
                                        @endif
                                    @endforeach
                                    {{ $totalFines }}
                                </td>
                                <td>
                                    <form action="{{ route('admin.finespaid', ['id' => $users->id]) }}" method="POST">
                                        @csrf
                                        <a href="">
                                            <button type="submit" class="btn btn-danger">Paid</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-admin.layout>