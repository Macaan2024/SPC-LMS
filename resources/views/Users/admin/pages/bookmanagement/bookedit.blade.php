<x-admin.layout>
    <x-slot name="book_edit">
        <div class="container p-0 mt-3" style="min-width:420px;">
            <form action="{{ route('update.book', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row p-0 m-0">
                    <div class="col-12 d-flex justify-content-start flex-column gap-2 p-0 m-0 px-2">
                        <img class="object-fit-fill shadow-md" src="/books_images/{{ $book->level }}/{{ $book->category }}/{{ $book->image }}" alt="Library Books" style="width:220px; height:250px;">
                        <input type="file" name="image" class="form-control py-0" style="width:400px;" value="{{ old('image', $book->image) }}">
                    </div>
                    <div class="col-12 d-flex gap-4 align-items-center p-0 m-0 mt-4 px-2">
                        <h6 class="fs-6  text-nowrap p-0 m-0">Accesion Number : </h6>
                        <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="accesion_number" value="{{ old('accesion_number', $book->accesion_number) }}" style="width:240px;">
                        @error('accesion_number')
                            <small class="text-danger fw-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <hr class="mt-2">
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
                                <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                                @error('isbn')
                                    <small class="text-danger fw-bold">{{ $message }}</small>
                                @enderror
                                <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="title" value="{{ old('title', $book->title) }}">
                                <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="author" value="{{ old('author', $book->author) }}">
                                <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="publication_year" value="{{ old('publication_year', $book->publication_year) }}">
                                <input type="text" class="form-control py-0 border border-dark-subtle shadow-sm" name="publication_address" value="{{ old('publication_address', $book->publication_address) }}">
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
                                <select name="level" class="form-select py-0">
                                    <option value="College" {{ old('level', $book->level) == 'College' ? 'selected' : '' }}>College</option>
                                    <option value="Senior Highschool" {{ old('level', $book->level) == 'Senior Highschool' ? 'selected' : '' }}>Senior Highschool</option>
                                    <option value="Junior Highschool" {{ old('level', $book->level) == 'Junior Highschool' ? 'selected' : '' }}>Junior Highschool</option>
                                    <option value="Elementary" {{ old('level', $book->level) == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                                </select>
                                <input type="number" class="form-control py-0 border border-dark-subtle shadow-sm" name="edition" value="{{ old('edition', $book->edition) }}">
                                <select name="category" class="form-select py-0" id="">
                                    <option value="" disabled {{ $book->category ? '' : 'selected' }}>Choose Category</option>
                                    <option value="CCS" {{ $book->category == 'CCS' ? 'selected' : '' }}>CCS</option>
                                    <option value="CAS" {{ $book->category == 'CAS' ? 'selected' : '' }}>CAS</option>
                                    <option value="CBA" {{ $book->category == 'CBA' ? 'selected' : '' }}>CBA</option>
                                    <option value="COC" {{ $book->category == 'COC' ? 'selected' : '' }}>COC</option>
                                    <option value="COE" {{ $book->category == 'COE' ? 'selected' : '' }}>COE</option>
                                    <option value="Grade 12" {{ $book->category == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                                    <option value="Grade 11" {{ $book->category == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                    <option value="Grade 10" {{ $book->category == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                    <option value="Grade 9" {{ $book->category == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                    <option value="Grade 8" {{ $book->category == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                    <option value="Grade 7" {{ $book->category == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                    <option value="Grade 6" {{ $book->category == 'Grade 6' ? 'selected' : '' }}>Grade 6</option>
                                    <option value="Grade 5" {{ $book->category == 'Grade 5' ? 'selected' : '' }}>Grade 5</option>
                                    <option value="Grade 4" {{ $book->category == 'Grade 4' ? 'selected' : '' }}>Grade 4</option>
                                    <option value="Grade 3" {{ $book->category == 'Grade 3' ? 'selected' : '' }}>Grade 3</option>
                                    <option value="Grade 2" {{ $book->category == 'Grade 2' ? 'selected' : '' }}>Grade 2</option>
                                    <option value="Grade 1" {{ $book->category == 'Grade 1' ? 'selected' : '' }}>Grade 1</option>
                                </select>
                                <input type="number" class="form-control py-0 border border-dark-subtle shadow-sm" name="pages" value="{{ old('pages', $book->pages) }}">
                                <input type="number" class="form-control py-0 border border-dark-subtle shadow-sm" name="quantity" value="{{ old('quantity', $book->quantity) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="form-control btn btn-success mt-3 py-1">
            </form>
       </div>

       @if(Session::has('editsuccess'))
        <script>
            alert("{{ Session::get('editsuccess') }}");
        </script>
        @endif
    </x-slot>
</x-admin.layout>