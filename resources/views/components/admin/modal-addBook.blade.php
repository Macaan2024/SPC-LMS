<!-- -- MODALITY START -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content py-4 px-3 m-0">
            <div class="modal-header text-white justify-content-center align-items-center border-0">
                <h6 class="text-black p-0 m-0 text-center fw-medium fs-5">Add Book</h6>
            </div>
            <div class="modal-body modal-body-scroll">
                <form action="{{ route('admin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center flex-wrap gap-4 align-items-start">
                        <div class="d-flex flex-column gap-1 bg-primary" style="height:250px; width:240px;">
                            <div class="bg-dark d-flex justify-content-center align-items-center" style="height:100%;width:100%;">
                                <span class="text-white fs-5 fw-bolder">Upload Picture</span>
                            </div>
                            <input type="file" name="image" class="form-control rounded-0">
                        </div>
                        <div class="d-flex flex-column gap-4">
                            <div class="form-floating">
                                <input type="text" style="width:220px;" name="isbn" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">ISBN</label>
                                @error('isbn')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="number" name="accesion_number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Accession Number</label>
                                @error('accesion_number')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Title</label>
                                @error('title')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="author" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Author</label>
                                @error('author')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="number" name="publication_year" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Publication Year</label>
                                @error('publication_year')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="publication_address" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Publication Address</label>
                                @error('publication_address')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-4">
                            <div class="form">
                                <select name="level" class="form-select" id="">
                                    <option value="" selected disabled>Choose Class Level</option>
                                    <option value="College">College</option>
                                    <option value="Senior Highschool">Senior Highschool</option>
                                    <option value="Junior Highschool">Junior Highschool</option>
                                    <option value="Elementary">Elementary</option>
                                </select>
                                @error('level')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="">
                                <select name="category" class="form-select" id="">
                                    <option value="" selected disabled >Choose Category</option>
                                    <option value="CCS">CCS</option>
                                    <option value="CAS">CAS</option>
                                    <option value="CBA">CBA</option>
                                    <option value="COC">COC</option>
                                    <option value="COE">COE</option>
                                    <option value="COED">COED</option>
                                </select>
                                @error('category')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="number" name="edition" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Edition</label>
                                @error('edition')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="number" name="pages" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Pages</label>
                                @error('pages')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="number" name="quantity" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Quantity</label>
                                @error('quantity')
                                    <small class="text-danger mb-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="Available">
                    <input type="hidden" name="total_borrow" value="0">
                    <button class="btn btn-success w-100 mt-3" type="submit" name="submit" value="submit">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
{{-- Sweet Mesage Alerts --}}
@if(Session::has('message'))
    <script>
        var message = "{{ Session::get('message') }}";
        if (message === 'Student registration successful') {
            swal("Student Registration", message, 'success', {
                button:true,
                button:"OK",
            });
        }
    </script>
@elseif ($errors->any())
    <script>
        var message = "{{ Session::get('message') }}";
            swal("Student Registration", 'Student Registration fail', 'error', {
                button:true,
                button:"OK",
            });
    </script>
@endif
<!-- -- MODALITY END -->