<x-admin.layout>
    <x-slot name="book_view">
    <div class="container p-0 mt-3" style="min-width:420px;">
            <div class="row p-0 m-0">
                <div class="col-12 d-flex justify-content-center justify-content-sm-start p-0 m-0 px-2">
                    @if ($book->level == 'College')
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{ $book->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @else
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{ $book->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @endif
                </div>
                <div class="col-12 d-flex justify-content-between p-0 m-0 mt-4 px-2">
                    <h6 class="fs-6  text-nowrap">Accesion Number : {{$book->accesion_number}}</h6>
                    <h6 class="fs-6  text-nowrap">Borrowed Records : {{ $book->total_borrow}}</h6>
                    
                </div>
                <hr>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12 col-lg-6 mt-0 mt-md-0 col-md p-0 m-0 p-1">
                    <div class="d-flex align-items-start" style="height:100%;">
                        <div class="d-flex flex-column  px-1 py-0 justify-content-between align-items-start" style="height:250px;">
                            <h6 class="p-0 m-0 fs-6 text-nowrap">ISBN</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Title</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Author</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Publication Year</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Publication Address</h6>
                        </div>
                        <div class="d-flex flex-column px-3 py-0 justify-content-between align-items-start" style="height:250px;">
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->isbn}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->title}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->author}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->publication_year}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->publication_address}}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-3 mt-md-0 nt-lg-0 mt-lg-0 col-md p-0 m-0 p-1">
                    <div class="d-flex align-items-start" style="height:100%;">
                        <div class="d-flex flex-column  px-1 py-0 justify-content-between align-items-start" style="height:250px;">
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Level</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Edition</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Category</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Pages</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">Quantity</h6>
                        </div>
                        <div class="d-flex flex-column px-3 py-0 justify-content-between align-items-start" style="height:250px;margin-left:89px;">
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->level}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->edition}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->category}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$book->pages}}</h6>
                            @if($book->quantity <= 0) 
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:red;">: {{$book->quantity}}</h6>
                            @else
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:green;">: {{$book->quantity}}</h6>
                            @endif
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
                            <th>Name</th>
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
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $transactions->user->firstname . ' '. $transactions->user->lastname}}</td>
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