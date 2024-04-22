<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            @foreach ($booksGroupedByCategory as $category => $books)
            @php
                $bookLevel = '';
            @endphp
                <div class="row mt-4">
                    <div class="col-12 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-left p-0 m-0 fw-medium">{{ $category }}</h5>
                            <a class="text-decoration-none px-2 py-1" style="background-color:#661011; color:white;" href="">View All</a>
                        </div>
                        <div class="my-3 w-100 border p-2 d-flex gap-4" style="height: 225px; overflow-y: hidden; overflow-x: auto;">
                            @foreach ($books as $book)
                                <div class="d-flex flex-column gap-1" style="min-width: 140px; height: 100%; flex-shrink: 0;">
                                    <div style="width: 100%; height:165px;" class="bg-primary">
                                        <img src="{{ asset('images/' . $category . '/'. $book->category .'/' . $book->image) }}" alt="" class="object-fit-fill" style="width: 100%; height: 100%;">
                                    </div>
                                    <div style="width: 100%;" class="d-flex align-items-center justify-content-center"> <!-- Use flex-grow for the button container -->
                                        @if ($book->status == 'Available')
                                            <a href="" class="px-2 py-1 w-100" style="text-align:center; background-color:#661011;">{{ $book->status }}</a>
                                        @elseif ($book->status == 'Not Available')
                                            <a href="" class="px-2 py-1 w-100" disabled style="text-align:center;background-color:gray;">{{ $book->status }}</a>
                                        @else
                                            <a href="" class="px-2 py-1 w-100" disabled style="text-align:center;background-color:gray;">{{ $book->status }}</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@push('fetchingBooksByYearLevel')
    <script>
    function fetchBooks(yearLevel) {
        $.ajax({
            url: "{{ route('student.dashboard.fetch-books', ':yearLevel') }}".replace(':yearLevel', yearLevel),
            method: 'GET',
            success: function(data) {
                updateBooksDisplay(data);
            }
        });
    }

    function updateBooksDisplay(booksGroupedByCategory) {
        // Clear the current books display
        $('.books-display').empty();

        // Loop through each category and append the books to the display
        $.each(booksGroupedByCategory, function(category, books) {
            var categoryHtml = `
                <div class="row mt-4">
                    <div class="col-12 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-left p-0 m-0 fw-medium">${category}</h5>
                            <a class="text-decoration-none px-2 py-1" style="background-color:#661011; color:white;" href="">View All</a>
                        </div>
                        <div class="my-3 w-100 border p-2 d-flex gap-4" style="height: 225px; overflow-y: hidden; overflow-x: auto;">
            `;

            $.each(books, function(index, book) {
                categoryHtml += `
                    <div class="d-flex flex-column gap-1" style="min-width: 140px; height: 100%; flex-shrink: 0;">
                        <div style="width: 100%; height:165px;" class="bg-primary">
                            <img src="{{ asset('images/' . $category . '/'. $book->category .'/' . $book->image) }}" alt="" class="object-fit-fill" style="width: 100%; height: 100%;">
                        </div>
                        <div style="width: 100%;" class="d-flex align-items-center justify-content-center">
                            <a href="" class="px-2 py-1 w-100" style="text-align:center; background-color:#661011;">${book.status}</a>
                        </div>
                    </div>
                `;
            });

            categoryHtml += `</div></div></div>`;

            $('.books-display').append(categoryHtml);
        });
    }
    </script>
@endpush

