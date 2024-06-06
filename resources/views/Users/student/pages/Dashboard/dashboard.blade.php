<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="dashboard" class="">
        <div class="container">
            <div class="row mt-2" style="min-width:320px;">
                <div class="col-12 col-md-6 mt-3">
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <div class="d-flex justify-content-start">
                            <select name="" id="" class="form-select w-100" style="min-width:300px;">
                                @foreach ($groupedBooks as $levels => $books )
                                    <option value="{{$levels}}">{{$levels}}</option>
                                @endforeach
                            </select>   
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('spc-lms.index')}}" class="d-flex w-50" style="min-width:300px;">
                            <input type="text" name="search" class="form-control rounded-end-0 " style="width:" placeholder="Search Book">
                            <input type="submit" name="submit" class="form-contorol rounded-start-0 border-0 btn btn-success">
                        </form>
                    </div>
                </div>
            </div>

            <div class="container p-0 mt-5" id="bookLevelContainer" style="min-width:320px;">
                <div class="border border-1 shadow-sm mt-5" style="solid #661011;">
                    <h5 class="shadow-sm text-center p-0 m-0 fw-normal fs-6 py-3" style="color:white;background-color:#661011;">College<h5>
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 py-2 row-cols-xxl-6 justify-content-start p-0 m-0">
                        @foreach ($college as $book )
                            @if  (($book->publication_year + 3) >= date('Y'))
                                @if ($book->status == 'Available')
                                    <div class="col d-flex flex-column mt-3 py-0 px-2" style="min-width:255px;">
                                        <div class="position-relative p-0 m-0 " style="height:100%;">
                                            @if ($book->level == 'College')
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @else 
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @endif
                                            <a href="{{ route('spc-lms.request-book', ['id' => $book->id]) }}" class="bg-primary w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2" style="">View</a>
                                                <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid #661011;"></div>
                                                <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">NEW</span>
                                        </div>
                                    </div>
                                @elseif ($book->status == 'Unavailable' || $book->quantity <= 0)
                                    <div class="col  mt-3  d-flex flex-column py-0 px-2">
                                        <div class="position-relative p-0 m-0 " style="height:100%;">
                                            @if ($book->level == 'College')
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @else 
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @endif
                                                <a class="w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2" style="background-color:gray;">Unavailable</a>
                                                <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid #661011;"></div>
                                                <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">NEW</span>
                                        </div>
                                    </div>
                                @endif
                            @else 
                                @if ($book->status == 'Available')
                                    <div class="col mt-3 d-flex flex-column  py-0 px-2">
                                        <div class="position-relative p-0 m-0 " style="height:100%;">
                                            @if ($book->level == 'College')
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @else 
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @endif
                                                <a href="{{ route('spc-lms.request-book', ['id' => $book->id]) }}" class="bg-primary w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2" style="">View</a>
                                                <div class="position-absolute top-0 end-0" style="border-left: 70px solid transparent; border-top: 70px solid gray;"></div>
                                                <span class="position-absolute text-white text-center fs-6" style="top:4%; right:1%; transform: rotate(45deg);">{{$book->publication_year}}</span>
                                        </div>
                                    </div>
                                @elseif ($book->status == 'Unavailable' || $book->quantity <= 0)
                                    <div class="col bg-warning  mt-3 d-flex flex-column  py-0 px-2">
                                        <div class="position-relative p-0 m-0 " style="height:100%;">
                                            @if ($book->level == 'College')
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category}}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @else 
                                                <img class="object-fit-fill" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{$book->image}}" alt="Library Books" style="height:205px;width:100%;">
                                            @endif
                                                <a class="w-100 text-decoration-none text-white fs-6 fw-normal d-flex justify-content-center align-items-center py-2" style="background-color:gray;">Unavailable</a>
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
    </x-slot>
</x-student.layout>