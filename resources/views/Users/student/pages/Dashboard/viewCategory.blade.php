<x-student.layout>
    <x-slot name="view_category">
    <div class="container px-0 align-items-center " style="min-width:320px;" id="">
    <div class="input-group mb-3 px-3 mt-5">
        <button class="btn btn-outline-secondary border-dark-subtle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-dark-subtle" style="" width="1.4em" height="1.4em" viewBox="0 0 24 24">
                <rect width="24" height="24" fill="none"/>
                <path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/>
            </svg>
        </button>
        <ul class="dropdown-menu">
            <li class="dropdown-item searchType" data-value="isbn">ISBN</li>
            <li class="dropdown-item searchType" data-value="title">Title</li>
            <li class="dropdown-item searchType" data-value="author">Author</li>
            <li class="dropdown-item searchType" data-value="accession_number">Accession Number</li>
        </ul>
        <input type="text" name="title" class="form-control border-dark-subtle border-start-0" id="inputSearch" placeholder="Search title">
        <button type="button" name="submit" class="border border-dark-subtle rounded-end bg-success" id="submitButton">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="1.5em" height="1.5em" viewBox="0 0 56 56">
                <rect width="56" height="56" fill="none"/>
                <path fill="currentColor" d="M23.957 41.77a18.02 18.02 0 0 0 10.477-3.376l11.109 11.11a2.658 2.658 0 0 0 1.898.773c1.524 0 2.625-1.172 2.625-2.672c0-.703-.234-1.359-.75-1.874L38.277 34.668c2.32-3.047 3.703-6.82 3.703-10.922c0-9.914-8.109-18.023-18.023-18.023c-9.937 0-18.023 8.109-18.023 18.023S14.02 41.77 23.957 41.77m0-3.891c-7.758 0-14.133-6.398-14.133-14.133c0-7.734 6.375-14.133 14.133-14.133c7.734 0 14.133 6.399 14.133 14.133c0 7.735-6.399 14.133-14.133 14.133"/>
            </svg>
        </button>
    </div>
    <div class="container p-0 mt-5" id="bookLevelContainer">
        <div class="border border-1 shadow-sm mt-5" style="solid #661011;">
            <h5 class="shadow-sm text-center p-0 m-0 fw-normal fs-6 py-3" style="color:white;background-color:#661011;">{{ $bookCategory }}<h5>
            <div class="border border-darksubtle mt-3 mx-2" style="height:auto;width:auto;">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 py-2 row-cols-xxl-6 justify-content-start p-0 m-0">
                    @foreach ($books as $book )
                        @if  (($book->publication_year + 3) >= date('Y'))
                            @if ($book->status == 'Available')
                                <div class="col  mt-0 d-flex flex-column">
                                    <div class="position-relative p-0 m-0 bg-warning" style="height:100%;">
                                        @if ($book->level == 'College')
                                            <img src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @else 
                                            <img src="/books_images/{{ $book->level }}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @endif
                                            <a href="{{ route('spc-lms.request-book', ['id' => $book->id]) }}" class="bg-success w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center" style="height:10%;">Borrow</a>
                                            <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid #661011;"></div>
                                            <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">NEW</span>
                                    </div>
                                </div>
                            @else
                                <div class="col  mt-3  d-flex flex-column">
                                    <div class="position-relative p-0 m-0 bg-warning" style="height:100%;">
                                        @if ($book->level == 'College')
                                            <img src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @else 
                                            <img src="/books_images/{{ $book->level }}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @endif
                                            <a class="w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center" style="background-color:gray;height:10%;">Unavailable</a>
                                            <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid #661011;"></div>
                                            <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">NEW</span>
                                    </div>
                                </div>
                            @endif
                        @else 
                            @if ($book->status == 'Available')
                                <div class="col  mt-0 d-flex flex-column">
                                    <div class="position-relative p-0 m-0 bg-warning" style="height:100%;">
                                        @if ($book->level == 'College')
                                            <img src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @else 
                                            <img src="/books_images/{{ $book->level }}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @endif
                                            <a href="{{ route('spc-lms.request-book', ['id' => $book->id]) }}" class="bg-success w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center" style="height:10%;">Borrow</a>
                                            <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid gray;"></div>
                                            <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">{{$book->publication_year}}</span>
                                    </div>
                                </div>
                            @else
                                <div class="col  mt-3 d-flex flex-column">
                                    <div class="position-relative p-0 m-0 bg-warning" style="height:100%;">
                                        @if ($book->level == 'College')
                                            <img src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @else 
                                            <img src="/books_images/{{ $book->level }}/{{$book->image}}" alt="Library Books" style="height:90%;width:100%;">
                                        @endif
                                            <a class="w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center" style="background-color:gray;height:10%;">Unavailable</a>
                                            <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid gray;"></div>
                                            <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">{{$book->publication_year}}</span>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

<script>
$(document).ready(function() {
    var selectValue = 'title'; // Default search type
    $('#inputSearch').attr('name', selectValue).prop('placeholder', 'Search ' + selectValue);

    $('.searchType').on('click', function() {
        selectValue = $(this).data('value');
        $('#inputSearch').attr('name', selectValue).prop('placeholder', 'Search ' + selectValue);
    });

    $('#submitButton').on('click', function() {
        var searchBook = $('#inputSearch').val();
        if (!searchBook) {
            return alert('Unidentified book search type');
        }
    });
});
</script>
    </x-slot>
</x-student.layout>