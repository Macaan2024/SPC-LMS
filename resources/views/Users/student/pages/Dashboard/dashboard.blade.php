<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="dashboard" class="">
        <div class="container" style="min-width:320px;">
            <div class="row mt-2">
                <div class="col-12 col-md-6 mt-3">
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <div class="d-flex justify-content-start">
                            <form id="levelForm" action="{{ route('spc-lms.index') }}" method="GET" class="w-100">
                                <select name="level" id="levelSelect" class="form-select w-100" style="min-width:300px;" onchange="document.getElementById('levelForm').submit();">
                                    <option value="College" {{ request('level') == 'College' ? 'selected' : '' }}>College</option>
                                    <option value="Senior Highschool" {{ request('level') == 'Senior Highschool' ? 'selected' : '' }}>Senior Highschool</option>
                                    <option value="Junior Highschool" {{ request('level') == 'Junior Highschool' ? 'selected' : '' }}>Junior Highschool</option>
                                    <option value="Elementary" {{ request('level') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <form action="{{ route('spc-lms.index') }}" method="GET" class="d-flex w-75 " style="min-width:300px;">
                            <input type="hidden" name="level" value="{{ request('level', 'College') }}">
                            <input type="text" name="search" class="form-control rounded-end-0" placeholder="Search Book" value="{{ request('search') }}">
                            <button type="submit" class="form-control rounded-start-0 border-0 btn btn-success w-auto">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 border border-dark-subtle bg-light" id="bookLevelContainer" style="min-width:320px;">
                @foreach ($books as $category => $books)
                    <h6 class="m-0 p-0 px-1 mt-5">{{ $category }}</h6>
                    <div class="row row-cols-2 bg-white row-cols-md-3 mt-3 row-cols-lg-4 row-cols-xxl-6 justify-content-start p-0 m-0 py-2">
                        @foreach ($books as $book)
                            <div class="col d-flex flex-column mt-3 py-0 px-2">
                                <div class="position-relative p-0 m-0" style="height:100%;">
                                    <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{ $book->image }}" alt="Library Books" style="height:205px;width:100%;">
                                    @if ($book->status == 'Available')
                                        <a href="{{ route('spc-lms.request-book', ['id' => $book->id]) }}" class="bg-primary w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2">View</a>
                                    @else
                                        <a class="w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2" style="background-color:gray;">Unavailable</a>
                                    @endif
                                    <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid {{ ($book->publication_year + 3) >= date('Y') ? '#661011' : 'gray' }};"></div>
                                    <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">{{ ($book->publication_year + 3) >= date('Y') ? 'NEW' : $book->publication_year }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
    </x-slot>
</x-student.layout>