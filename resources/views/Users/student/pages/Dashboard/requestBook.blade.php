<x-student.layout>
    <x-slot name="request_book">
       <div class="container p-0 bg-primary mt-3" style="min-width:420px;">
            <div class="row p-0 m-0">
                <div class="col-12 d-flex justify-content-center justify-content-sm-start col-sm-6 p-0 m-0 bg-dark">
                    @if ($requestBook->level == 'College')
                        <img src="/books_images/{{ $requestBook->level }}/{{ $requestBook->category }}/{{ $requestBook->image }}" alt="Library Books" style="width:220px; height:250px;">
                    @else
                        <img src="/books_images/{{ $requestBook->level }}/{{ $requestBook->image }}" alt="Library Books">
                    @endif
                </div>
                <div class="col-12 col-md-6 p-0 m-0 bg-danger p-1">
                    <div class="d-flex align-items-start bg-primary" style="height:100%;">
                        <div class="d-flex flex-column bg-warning px-3 py-0 justify-content-between align-items-start" style="height:100%;">
                            <h6 class="p-0 m-0 fs-6">ISBN</h6>
                            <h6 class="p-0 m-0 fs-6">Title</h6>
                            <h6 class="p-0 m-0 fs-6">Author</h6>
                            <h6 class="p-0 m-0 fs-6">Publication Year</h6>
                            <h6 class="p-0 m-0 fs-6">Publication Address</h6>
                        </div>
                        <div class="d-flex flex-column bg-warning px-3 py-0 justify-content-between align-items-start" style="height:100%;">
                            <h6 class="p-0 m-0 fs-6">: {{$requestBook->isbn}}</h6>
                            <h6 class="p-0 m-0 fs-6">: {{$requestBook->title}}</h6>
                            <h6 class="p-0 m-0 fs-6">: {{$requestBook->author}}</h6>
                            <h6 class="p-0 m-0 fs-6">: {{$requestBook->publication_year}}</h6>
                            <h6 class="p-0 m-0 fs-6">: {{$requestBook->publication_address}}</h6>
                        </div>
                    </div>
                </div>
            </div>
       </div> 
    </x-slot>
</x-student.layout>

