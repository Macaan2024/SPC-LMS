<x-admin.layout>
    <x-slot name="book_management">
    <div class="row" style="height:100%;">
            <div class="col-lg-1 bg-light h-auto"></div>
            <div class="col-lg-10 col-12 px-4 px-sm-5 py-5 h-auto">
                <h5 class="text-nowrap">Books Management</h5>
                <hr>

                {{-- Total Boxes of Student--}}
                <section class="p-0 m-0">
                    <h5 class="text-nowrap mt-5 mb-3" style="font-size:18px;">Totals of Students</h5>
                    <div class="row rows-col-4 gap-5 p-0 m-0 align-itesm-center">
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="bg-light col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/books/college.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class=" d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">College</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $college}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="bg-light col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/books/senior.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class=" d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Senior Highschool</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $seniorhigh}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="bg-light col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/books/junior.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class="d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Junior Highschool</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $juniorhigh}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="bg-light col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/books/elem.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class="d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Elementary</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $elementary}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>

                {{-- CRUD --}}
                <section class="mt-5 p-0 m-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 bg-primary col-sm-3 p-0 m-0 tableHeading-custom-class">
                            <select class="form-select rounded-end-0" aria-label="Default select example" id="BookSelect">
                                <option disabled selected>Choose Class Level</option>
                                <option value="All">All</option>
                                <option value="College">College</option>
                                <option value="Senior Highschool">Senior Highschool</option>
                                <option value="Junior Highschool">Junior Highschool</option>
                                <option value="Elementary">Elementary</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-5 p-0 mt-3 mt-sm-0 tableHeading-custom-class">
                            <form class="d-flex form-group" id="searchStudent">
                                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-end mt-3 mt-sm-0 m-0 p-0 tableHeading-custom-class">
                            <button type="button" class="btn btn-dark col-12 col-sm-auto" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Add Book</button>
                            <x-admin.modal-addBook /> {{-- User Registration Scripts--}}
                            @push('user_registration') 
                                <script src="{{ asset('js/admin/user_registration.js') }}"></script>
                            @endpush
                        </div>
                    </div>
                    
                    <div class="table-responsive mt-3">
                        <table class="table align-middle overflow-x-auto">
                            <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>ISBN</th>
                                <th>Accession Number</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="bookData">
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="col-lg-1 h-auto bg-light"></div>
        </div>
        <script>
            $(document).ready(function () {

                $(document).on('click', '.delete-book', function () {
                        var bookId = $(this).data('id');

                        if(confirm('Are you sure you want to delete this book? ')) {
                            $.ajax ({
                                url: '/delete-book/'+bookId,
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    if (response.success) {
                                        $('tr[data-id="' + bookId + '"]').remove();
                                        alert(response.success);
                                    } else {
                                        alert('Failed to delete the book. Please try again later.');
                                    }
                                },
                                error: function(error) {
                                    console.error('Error deleting book:', error);
                                    alert('Failed to delete the book. Please try again later.');
                                }
                            })
                        }
                    });

                $.ajax({
                    url: '/fetch-books',
                    method: 'GET',
                    success: function (response) {
                        var level = '';
                        var books = response.books;
                        var html = '';

                        $('#BookSelect').on('change', function(){
                            level = $(this).val();
                            var filteredBooks = [];

                            if (level === 'All') {
                                filteredBooks = books;
                            } else {
                                filteredBooks = books.filter(book => book.level === level);
                            }

                            $('#bookData').empty();
                            html = '';

                            filteredBooks.forEach(function (book, index){
                                html += `
                                <tr data-id="${book.id}">
                                    <td>${index + 1}</td>
                                    `;
                                    if (book.level === 'College') {
                                        html += `<td><img style="height:100px; width:80px;" class="object-fit-fill" src="/books_images/${book.level}/${book.category}/${book.image}" alt="Book Image"></td>`;
                                    } else if (book.level === 'Senior Highschool' || book.level === 'Junior Highschool' || book.level === 'Elementary') {
                                        html += `<td><img style="height:100px; width:80px;" class="object-fit-fill" src="/books_images/${book.level}/${book.image}" alt="Book Image"></td>`;
                                    } else {
                                        html += `<td>Image not found</td>`;
                                    }
                                html += `
                                        <td>${book.isbn}</td>
                                        <td>${book.accesion_number}</td>
                                        <td>${book.title}</td>
                                        <td>${book.author}</td>
                                        <td>
                                            <a class="btn btn-primary">View</a>
                                            <a class="btn btn-success">Edit</a>
                                            <button class="btn btn-danger delete-book" data-id="${book.id}">Delete</button>
                                        </td>
                                    </tr>
                                `;
                            });
                            $('#bookData').html(html);
                        });

                        books.forEach(function (book, index) {
                            html += `
                                <tr data-id="${book.id}">
                                    <td>${index + 1}</td>
                                    `;
                                    if (book.level === 'College') {
                                        html += `<td><img style="height:100px; width:80px;" class="object-fit-fill" src="/books_images/${book.level}/${book.category}/${book.image}" alt="Book Image"></td>`;
                                    } else if (book.level === 'Senior Highschool' || book.level === 'Junior Highschool' || book.level === 'Elementary') {
                                        html += `<td><img style="height:100px; width:80px;" class="object-fit-fill" src="/books_images/${book.level}/${book.image}" alt="Book Image"></td>`;
                                    } else {
                                        html += `<td>Image not found</td>`;
                                    }
                            html += `
                                    <td>${book.isbn}</td>
                                    <td>${book.accesion_number}</td>
                                    <td>${book.title}</td>
                                    <td>${book.author}</td>
                                    <td>
                                        <a class="btn btn-primary">View</a>
                                        <a class="btn btn-success">Edit</a>
                                        <button class="btn btn-danger delete-book" data-id="${book.id}">Delete</button>
                                    </td>
                                </tr>
                            `;
                        });

                        $('#bookData').html(html);
                    },
                    error: function (error) {
                        console.error('Error fetching books:', error);
                        alert('Failed to fetch books. Please try again later.');
                    }
                });
            });
        </script>
    </x-slot>
</x-admin.layout>