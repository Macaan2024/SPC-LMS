<x-admin.layout>
    <x-slot name="transaction"> 
        <div class="container-fluid">
            <div class="d-flex gap-5 mt-5 justify-content-center" style="min-width:720px;">
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Ongoing Borrow</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $ongoing }}</h6>
                    </div>
                    <div class="bg-primary shadow rounded-circle d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M13 19c0 1.1.3 2.12.81 3H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h1v7l2.5-1.5L12 9V2h6a2 2 0 0 1 2 2v9.09c-.33-.05-.66-.09-1-.09c-3.31 0-6 2.69-6 6m6-4l-3 3h2v4h2v-4h2z"/></svg>
                    </div>
                </div>
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Returned Successfully</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $returned }}</h6>
                    </div>
                    <div class="bg-success rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M12 18.5c0 1.29.39 2.5 1.04 3.5H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h1v7l2.5-1.5L12 9V2h6a2 2 0 0 1 2 2v8.18c-.5-.11-1-.18-1.5-.18a6.5 6.5 0 0 0-6.5 6.5m10 0v-4l-1.17 1.17A4 4 0 0 0 18 14.5c-2.21 0-4 1.79-4 4s1.79 4 4 4c1.68 0 3.12-1.03 3.71-2.5H20a2.5 2.5 0 1 1-.23-3.27L18 18.5z"/></svg>
                    </div>
                </div>
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">User Overdue</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $overdue }}</h6>
                    </div>
                    <div class="bg-danger rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/><rect width="2" height="7" x="11" y="6" fill="currentColor" rx="1"><animateTransform attributeName="transform" dur="9s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect><rect width="2" height="9" x="11" y="11" fill="currentColor" rx="1"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect></svg>
                    </div>
                </div>
            </div>
            <form class="d-flex form-group mt-5 px-5" action="{{ route('admin.transaction')}}" method="GET">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>
            <table class="table table-responsive table-striped mt-3  border border" align="center" style="">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Book Title</th>
                        <th>Start Date</th>
                        <th>Start Time</th>
                        <th>End Date</th>
                        <th>End Time</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Overdue</th>
                        <th>Penalty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @php $index = 0; @endphp
                    @foreach ($approvedTransaction as $approved )
                        <tr>
                            @if($approved->status == 'approved' || $approved->status == 'ongoing')
                                <td class="align-middle fs-6">{{ ++$index }}</td>
                                <td><img src="/books_images/{{ $approved->book->level.'/'.$approved->book->category.'/'.$approved->book->image }}" style="height:100px;width:75px;" alt="book image" class="object-fit-fill"></td>
                                <td class="align-middle fs-6">{{ $approved->user->firstname . ' ' . $approved->user->lastname }}</td>
                                <td class="align-middle fs-6">{{ $approved->book->title }}</td>
                                <td class="align-middle fs-6">{{ $approved->start_date }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->start_time)->format('g:i A')}}</td>
                                <td class="align-middle fs-6">{{ $approved->end_day }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->end_time)->format('g:i A')}}</td>
                                @if($approved->status == 'ongoing')
                                    @php
                                        $endDateTime = \Carbon\Carbon::parse($approved->end_day . ' ' . $approved->end_time)->setTimezone('Asia/Manila');
                                        $now = \Carbon\Carbon::now('Asia/Manila');
                                    @endphp

                                    @if ($now->lessThan($endDateTime))
                                        @php
                                            $hoursDifference = $now->diffInHours($endDateTime);
                                        @endphp
                                        <td class="align-middle fs-6 text-success">{{ $hoursDifference }} Hours</td>
                                    @else
                                        @php
                                            $hoursDifference = $endDateTime->diffInHours($now);
                                        @endphp
                                        <td class="align-middle fs-6 text-danger">Overdue by {{ $hoursDifference }} Hours</td>
                                    @endif
                                @elseif ($approved->status == 'approved')
                                    <td class="align-middle">16 Hours</td>
                                @endif
                                <td class="align-middle fs-6">{{ $approved->status }}</td>
                                <td class="align-middle fs-6">{{ $approved->overdue}}</td>
                                <td class="align-middle fs-6">{{ $approved->penalty}}</td>
                                <td class="align-middle fs-6">
                                    @if ($approved->status == 'approved')
                                        <div class="d-flex gap-2">
                                            <form action="{{ route('start.book', ['id' => $approved->id])}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success p-0" style="width:60px; height:32px;">Start</button>
                                            </form>
                                            <form action="{{ route('cancel.book', ['id' => $approved->id])}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger p-0" style="width:60px; height:32px;">Cancel</button>
                                            </form>
                                        </div>
                                    @elseif ($approved->status == 'ongoing')
                                        <form action="{{ route('return.book', ['id' => $approved->id]) }}" method="POST">
                                            @csrf
                                                <button type="submit" class="btn btn-dark p-0" style="width:60px; height:32px;" >Return</button>
                                        </form>
                                    @endif                   
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    @foreach ($approvedTransaction as $approved)
                        <tr>
                            @if($approved->status == 'returned')
                                <td class="align-middle fs-6">{{ ++$index }}</td>
                                <td>
                                    <img src="/books_images/{{ $approved->book->level.'/'.$approved->book->category.'/'.$approved->book->image }}" style="height:100px;width:75px;" alt="book image" class="object-fit-fill">
                                </td>
                                <td class="align-middle fs-6">{{ $approved->user->firstname . ' ' . $approved->user->lastname }}</td>
                                <td class="align-middle fs-6">{{ $approved->book->title }}</td>
                                <td class="align-middle fs-6">{{ $approved->start_date }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->start_time)->format('g:i A') }}</td>
                                <td class="align-middle fs-6">{{ $approved->end_day }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->end_time)->format('g:i A') }}</td>

                                @php
                                    // Convert the end_day and end_time to a DateTime object
                                    $endDateTime = \Carbon\Carbon::parse($approved->end_day . ' ' . $approved->end_time, 'Asia/Manila');

                                    // Convert the updated_at timestamp to a DateTime object
                                    $updatedAt = \Carbon\Carbon::parse($approved->updated_at, 'Asia/Manila');

                                    // Calculate the difference in hours between end_time and updated_at
                                    $diffInHours = $updatedAt->diffInHours($endDateTime, false);

                                    // Determine the status and class based on the difference in hours
                                    if ($diffInHours < 0) {
                                        $status = "Overdue by " . abs($diffInHours) . " Hours";
                                        $statusClass = "text-danger";
                                    } else {
                                        $status = $diffInHours . " Hours Remaining";
                                        $statusClass = "text-success";
                                    }
                                @endphp

                                <td class="align-middle fs-6 {{ $statusClass }}">{{ $status }}</td>
                                <td class="align-middle fs-6">{{ $approved->status }}</td>
                                <td class="align-middle fs-6">{{ $approved->overdue }}</td>
                                <td class="align-middle fs-6">{{ $approved->penalty }}</td>
                                <td class="align-middle fs-6">
                                    <a href="{{ route('admin.transaction-view', ['id' => $approved->id]) }}">
                                        <button style="height:32px;width:60px;" class="bg-primary text-white border-0 rounded">View</button>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (Session::has('overdue'))
            <script>
                alert(" {{ Session::get('overdue')}} ");
            </script>
        @endif

        @if (Session::has('errorStart'))
            <script>
                alert("{{ Session::get('errorStart') }}");
            </script>
        @elseif (Session::has('successStart'))
            <script>
                alert("{{ Session::get('successStart') }}");
            </script>
        @endif
    </x-slot>
</x-admin.layout>