<x-admin.layout>
    <x-slot name="user_fines">
        <div class="container-fluid">
        <div class="d-flex gap-5 mt-5 justify-content-between" style="width:100%;">
            <div class="rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="background-color:#002233;width:250px;height:110px;min-width:220px;">
                <div class="d-flex flex-column">
                    <small class="p-0 m-0 text-white">User with Fines</small>
                    <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $userwithFines }}</h6>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <form class="d-flex form-group mt-5 " action="{{ route('admin.userfines')}}" method="GET" style="min-width:847px;">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>
            <a href="{{ route('fines-history') }}">
                <button class="btn btn-dark mt-5 py-2">Show Payment History</button>
            </a>
        </div>
            
            <table class="table table-responsive table-striped border border mt-3 shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th class="fw-normal">No</th>
                        <th class="fw-normal">Role</th>
                        <th class="fw-normal">Unique_ID</th>
                        <th class="fw-normal">Name</th>
                        <th class="fw-normal">Gender</th>
                        <th class="fw-normal">Class Level</th>
                        <th class="fw-normal">Total Fines</th>
                        <th class="fw-normal">Pay</th>
                        <th class="fw-normal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 0; @endphp
                    @foreach ($user as $users)
                        @php $totalFines = 0; @endphp
                        @if($users->role->role_description == 'Student')
                            <tr>
                                <td class="align-middle">{{ ++$index }}</td>
                                <td class="align-middle">Student</td>
                                <td class="align-middle">{{ $users->unique_id }}</td>
                                <td class="align-middle">{{ $users->firstname . ' ' . $users->lastname}}</td>
                                <td class="align-middle">{{ $users->gender }}</td>
                                <td class="align-middle">{{ $users->level }}</td>
                                <td class="align-middle">{{ $users->total_fines }}</td>
                                <td>
                                    @if($users->total_fines > 0)
                                        <form action="{{ route('process.payment', ['id' => $users->id])}}" class="d-flex gap-2" method="POST">
                                        @csrf
                                            <input type="number" name="pay" class="form-control" style="width:150px;" placeholder="Enter Amount">
                                            <input type="submit" name="submit" class="btn btn-success">
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('view-fines', ['id' => $users->id])}}">
                                        <button type="button" class="btn btn-primary">View</button>
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>




        @if (Session::has('overPay'))
            <script>
                alert("{{ Session::get('overPay')}}");
            </script>
        @elseif (Session::has('successPayment'))
            <script>
                alert("{{ Session::get('successPayment')}}");
            </script>
        @endif
    </x-slot>
</x-admin.layout>