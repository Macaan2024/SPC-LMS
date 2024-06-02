<x-admin.layout>
    <x-slot name="book_management">
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
                        @if($book->status == 'Available')
                        <tr>
                            <td class="align-middle">{{ ++$index }}</td>
                            <td class="align-middle"><img src="{{ asset('books_images/'. $book->level . '/' . $book->category . '/' . $book->image)}}" style="height:100px;width:75px;" alt=""></td>
                            <td class="align-middle">{{ $book->title }}</td>
                            <td class="align-middle">{{ $book->author }}</td>
                            <td class="align-middle">{{ $book->level }}</td>
                            <td class="align-middle">{{ $book->publication_year }}</td>
                            <td class="align-middle">{{ $book->edition }}</td>
                            <td class="align-middle">{{ $book->quantity }}</td>
                            <td class="align-middle">{{ $book->total_borrow }}</td>
                            <td class="text-success fw-bold align-middle">{{ $book->status }}</td>
                            <td class="align-middle">
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.bookview', ['id' => $book->id]) }}" class="text-decoration-none">
                                        <button class="btn bg-primary bg-opacity-75 text-white ">View</button>
                                    </a>
                                    <a href="{{ route('admin.edit', ['id' => $book->id]) }}" class="text-decoration-none">
                                        <button class="btn bg-success bg-opacity-75 text-white ">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.delete.book', ['id' =>  $book->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @elseif ($book->status == 'Unavailable')
                        <tr>
                            <td class="align-middle">{{ ++$index }}</td>
                            <td class="align-middle"><img src="{{ asset('books_images/'. $book->level . '/' . $book->category . '/' . $book->image)}}" style="height:100px;width:75px;" alt=""></td>
                            <td class="align-middle">{{ $book->title }}</td>
                            <td class="align-middle">{{ $book->author }}</td>
                            <td class="align-middle">{{ $book->level }}</td>
                            <td class="align-middle">{{ $book->publication_year }}</td>
                            <td class="align-middle">{{ $book->edition }}</td>
                            <td class="align-middle">{{ $book->quantity }}</td>
                            <td class="text-success fw-bold align-middle">{{ $book->status }}</td>
                            <td class="text-danger fw-bold align-middle">{{ $book->status }}</td>     
                            <td class="align-middle">
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.bookview', ['id' => $book->id]) }}" class="text-decoration-none">
                                        <button class="btn bg-primary bg-opacity-75 text-white ">View</button>
                                    </a>
                                    <a href="{{ route('admin.edit', ['id' => $book->id]) }}" class="text-decoration-none">
                                        <button class="btn bg-success bg-opacity-75 text-white ">Edit</button>
                                    </a>
                                    <form action="{{ route('admin.delete.book', ['id' =>  $book->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-admin.layout>