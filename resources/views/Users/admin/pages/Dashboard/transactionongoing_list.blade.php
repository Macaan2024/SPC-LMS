<x-admin.layout>
    <x-slot name="transactionongoing_list">
    <div class="container-fluid">
            <div class="d-flex gap-5 mt-5 justify-content-start" style="min-width:720px;">
                <div class="rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="background-color:#003300; width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Ongoing Borrow</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $ongoing }}</h6>
                    </div>
                    <div class="bg-light shadow rounded-circle d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M13 19c0 1.1.3 2.12.81 3H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h1v7l2.5-1.5L12 9V2h6a2 2 0 0 1 2 2v9.09c-.33-.05-.66-.09-1-.09c-3.31 0-6 2.69-6 6m6-4l-3 3h2v4h2v-4h2z"/></svg>
                    </div>
                </div>
            </div>
            <form class="d-flex form-group mt-5 px-5" action="{{ route('admin.transactionongoing.list')}}" method="GET">
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
                    @foreach ($transactions as $approved )
                        <tr>
                            @if($approved->status == 'ongoing')
                                <td class="align-middle fs-6">{{ ++$index }}</td>
                                <td><img src="/books_images/{{ $approved->book->level.'/'.$approved->book->category.'/'.$approved->book->image }}" style="height:100px;width:75px;" alt="book image" class="object-fit-fill"></td>
                                <td class="align-middle fs-6">{{ $approved->user->firstname . ' ' . $approved->user->lastname }}</td>
                                <td class="align-middle fs-6">{{ $approved->book->title }}</td>
                                <td class="align-middle fs-6">{{ $approved->start_date }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->start_time)->format('g:i A')}}</td>
                                <td class="align-middle fs-6">{{ $approved->end_day }}</td>
                                <td class="align-middle fs-6">{{ \Carbon\Carbon::parse($approved->end_time)->format('g:i A')}}</td>
                                @php
                                    $endDateTime = \Carbon\Carbon::parse($approved->end_day . ' ' . $approved->end_time);
                                    $now = \Carbon\Carbon::now();
                                @endphp
                                
                                @if ($now < $endDateTime)
                                    @php
                                        $hoursDifference = $now->diffInHours($endDateTime);
                                    @endphp
                                    <td class="align-middle fs-6 text-success">{{ $hoursDifference }} Hours</td>
                                @elseif ($now > $endDateTime)
                                    @php
                                        $hoursDifference = $endDateTime->diffInHours($now);
                                    @endphp
                                    <td class="align-middle fs-6 text-danger">Overdue by {{ $hoursDifference }} Hours</td>
                                @endif
                                <td class="align-middle fs-6">{{ $approved->status }}</td>
                                <td class="align-middle fs-6">{{ $approved->overdue}}</td>
                                <td class="align-middle fs-6">{{ $approved->penalty}}</td>
                                <td class="align-middle fs-6">
                                    @if ($approved->status == 'ongoing')
                                        <form action="{{ route('return.book', ['id' => $approved->id]) }}" method="POST">
                                            @csrf
                                                <button type="submit" class="btn btn-dark p-0" style="width:60px; height:32px;" >Return</button>
                                        </form>
                                    @endif                   
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