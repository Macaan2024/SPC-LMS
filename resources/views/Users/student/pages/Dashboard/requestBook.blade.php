<x-student.layout>
    <x-slot name="request_book">
       <div class="container p-0 mt-3" style="min-width:420px;">
            <div class="row p-0 m-0">
                <div class="col-12 d-flex justify-content-center justify-content-sm-start p-0 m-0 px-2">
                    @if ($requestBook->level == 'College')
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $requestBook->level }}/{{ $requestBook->category }}/{{ $requestBook->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @else
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $requestBook->level }}/{{ $requestBook->category }}/{{ $requestBook->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @endif
                </div>
                <div class="col-12 d-flex justify-content-between p-0 m-0 mt-4 px-2">
                    <h6 class="fs-6  text-nowrap">Accesion Number : {{$requestBook->accesion_number}}</h6>
                    <h6 class="fs-6  text-nowrap">Borrowed Records : {{ $requestBook->total_borrow}}</h6>
                    
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
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->isbn}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->title}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->author}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->publication_year}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->publication_address}}</h6>
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
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->level}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->edition}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->category}}</h6>
                            <h6 class="p-0 m-0 fs-6 text-nowrap">: {{$requestBook->pages}}</h6>
                            @if($requestBook->quantity <= 0) 
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:red;">: {{$requestBook->quantity}}</h6>
                            @else
                                <h6 class="p-0 m-0 fs-6 text-nowrap fw-bold" style="color:green;">: {{$requestBook->quantity}}</h6>
                            @endif
                        </div>
                    </div>
                </div>
                <form action="{{ route('spc-lms.process-book')}}" method="POST">
                    @csrf
                     <input type="hidden" name="book_id" value="{{ $requestBook->id }}">
                    <div class="col-12 p-0 m-0 mt-3"><button type="submit" name="submit" value="submit" class="bg-success w-100 fs-6 text-white fs-normal border-0 shadow-md py-1 mb-3 rounded borde-success">Request Book</button></div>
                </form>
            </div>
       </div>
       
       @if(Session::has('requestAlreadyTaken')) 
        <script>
           swal("Good job!", "You clicked the button!", "success")
        </script>
        @endif
    </x-slot>
</x-student.layout>

