<x-admin.layout>
    <x-slot name="transaction">
        
        <div class="container">

            <div class="d-flex gap-5 mt-5 justify-content-center" style="min-width:720px;">
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Ongoing Borrow</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">5</h6>
                    </div>
                    <div class="bg-primary shadow rounded-circle d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M13 19c0 1.1.3 2.12.81 3H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h1v7l2.5-1.5L12 9V2h6a2 2 0 0 1 2 2v9.09c-.33-.05-.66-.09-1-.09c-3.31 0-6 2.69-6 6m6-4l-3 3h2v4h2v-4h2z"/></svg>
                    </div>
                </div>
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Returned Successfully</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">5</h6>
                    </div>
                    <div class="bg-success rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M12 18.5c0 1.29.39 2.5 1.04 3.5H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h1v7l2.5-1.5L12 9V2h6a2 2 0 0 1 2 2v8.18c-.5-.11-1-.18-1.5-.18a6.5 6.5 0 0 0-6.5 6.5m10 0v-4l-1.17 1.17A4 4 0 0 0 18 14.5c-2.21 0-4 1.79-4 4s1.79 4 4 4c1.68 0 3.12-1.03 3.71-2.5H20a2.5 2.5 0 1 1-.23-3.27L18 18.5z"/></svg>
                    </div>
                </div>
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">User Overdue</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">5</h6>
                    </div>
                    <div class="bg-danger rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/><rect width="2" height="7" x="11" y="6" fill="currentColor" rx="1"><animateTransform attributeName="transform" dur="9s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect><rect width="2" height="9" x="11" y="11" fill="currentColor" rx="1"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></rect></svg>
                    </div>
                </div>
            </div>
            

            <div class="d-flex justify-content-center" style="min-width:720px;">
                <table class="table table-responsive table-striped mt-5  shadow" align="center" style="min-width:730px;">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Book Title</th>
                            <th>Start Date</th>
                            <th>Start Time</th>
                            <th>End Date</th>
                            <th>End Time</th>
                            <th>Duration</th>
                            <th>Overdue</th>
                            <th>Penalty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($approvedTransaction as $approved )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $approved->user->firstname . ' ' . $approved->user->lastname }}</td>
                                <td>{{ $approved->book->title }}</td>
                                <td>{{ $approved->start_date }}</td>
                                <td>{{ \Carbon\Carbon::parse($approved->start_time)->format('g:i A')}}</td>
                                <td>{{ $approved->end_day }}</td>
                                <td>{{ \Carbon\Carbon::parse($approved->end_time)->format('g:i A')}}</td>
                                <td><span>16:00:00</span</td>
                                <td>{{ $approved->overdue}}</td>
                                <td>{{ $approved->penalty}}</td>
                                <td>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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