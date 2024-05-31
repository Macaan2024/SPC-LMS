<x-admin.layout>
    <x-slot name="book_management">
        <div class="row row-cols-6 px-5 mt-5 m-0" style="min-width:1550px;">
            <div class="col p-2 m-0">
                <div class="bg-dark bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Elementary</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $elementary }}</h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:150px;width:100%;">
                    <div class="d-flex flex-column">
                        <h4 class="p-0 m-0 text-white fw-normal">College</h4>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $college }}</h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Senior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $seniorhigh}}</h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Junior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $juniorhigh }}</h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-dark bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Elementary</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $elementary }}</h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-dark bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Elementary</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal">{{ $elementary }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0 mt-5 px-5" style="min-width:1550px;">
            <div class="col-6 p-0 m-0">
                <form class="d-flex form-group p-0m-0" action="{{ route('admin.usermanagement')}}" method="GET">
                    <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                    <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
                </form>
            </div>
            <div class="col-6 p-0 m-0 d-flex justify-content-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Add Book</button>
                <x-admin.modal-addBook /> {{-- User Registration Scripts--}}
                @push('user_registration') 
                    <script src="{{ asset('js/admin/user_registration.js') }}"></script>
                @endpush
            </div>
        </div>

        <table class="table table-responsive table-striped mt-5" style="min-width:1550px;">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Class Level</th>
                    <th>Publication Year</th>
                    <th>Edition</th>
                    <th>Quantity</th>
                    <th>Ongoing Borrow</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 0; @endphp
                @foreach ($level as $levels)
                    @foreach ($levels as $book )
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td><img src="{{ asset('books_images/'. $book->level . '/' . $book->category . '/' . $book->image)}}" style="height:100px;width:75px;" alt=""></td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->level }}</td>
                            <td>{{ $book->publication_year }}</td>
                            <td>{{ $book->edition }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td>{{ $book->total_borrow }}</td>
                            @if($book->status == 'Available')
                                <td class="text-success fw-bold">{{ $book->status }}</td>
                            @elseif ($book->status == 'Unavailable')
                                <td class="text-danger fw-bold">{{ $book->status }}</td>
                            @endif
                            
                            <td>
                                <a href="{{ route('admin.bookview', ['id' => $book->id]) }}" class="text-decoration-none">
                                    <button class="btn bg-primary bg-opacity-75 text-white ">View</button>
                                </a>
                                <a href="" class="text-decoration-none">
                                    <button class="btn bg-success bg-opacity-75 text-white ">Edit</button>
                                </a>
                                <a href="" class="text-decoration-none">
                                    <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-admin.layout>