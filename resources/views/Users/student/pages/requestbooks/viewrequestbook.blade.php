<x-student.layout>
    <x-slot name="view_requestbook">
    <div class="container p-0 mt-3" style="min-width:320px;">
            <div class="row p-0 m-0">
                <div class="col-12 d-flex justify-content-center justify-content-sm-start p-0 m-0 px-2">
                    @if ($transaction->book->level == 'College')
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $transaction->book->level }}/{{ $transaction->book->category }}/{{ $transaction->book->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @else
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $transaction->book->level }}/{{ $transaction->book->category }}/{{ $transaction->book->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @endif
                </div>
                <div class="col-12 d-flex justify-content-between flex-wrap p-0 m-0 mt-4 px-2">
                    <h6 class="text-nowrap">Accesion Number : {{ $transaction->book->accesion_number}}</h6>
                    <h6 class="text-nowrap">Borrowed Records : {{ $transaction->book->total_borrow}}</h6>
                    
                </div>
                <hr>
            </div>
            <div class="row p-0 m-0">
                <div class="col-12 p-0 m-0 px-2 mb-3">
                    <h6 class="p-0 m-0">Request Status :
                        @if($transaction->status == 'approved') 
                            <span class="text-success">{{ $transaction->status }}</span>
                        @else
                            <span class="text-primary">{{ $transaction->status }}</span>
                        @endif
                    </h6>
                </div>
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
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->isbn}}</h6>
                            <h6 class="p-0 m-0 fs-6 ">: {{$transaction->book->title}}</h6>
                            <h6 class="p-0 m-0 fs-6 ">: {{$transaction->book->author}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->publication_year}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->publication_address}}</h6>
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
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->level}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->edition}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->category}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$transaction->book->pages}}</h6>
                            @if($transaction->book->quantity <= 0) 
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:red;">: {{$transaction->book->quantity}}</h6>
                            @else
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:green;">: {{$transaction->book->quantity}}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if($transaction->status == 'approved')
                <table class="table table-responsive mt-5">
                    <thead class="table table-dark">
                        <tr>
                            <th class="fw-normal">Start Date</th>
                            <th class="">Start time</th>
                            <th>End Date</th>
                            <th>End Time</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $transaction->start_date }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->start_time)->format('h:i A') }}</td>
                            <td>{{ $transaction->end_day }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaction->end_time)->format('h:i A') }}</td>
                            <td>{{$transaction->duration}}</td>
                        </tr>
                    </tbody>
                </table>
            @endif
       </div>


    </x-slot>
</x-student.layout>