<!-- MODALITY START -->
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
                        <div class="d-flex flex-column gap-1" style="height:250px; width:240px;">
                            <div class="bg-dark d-flex justify-content-center align-items-center" style="height:100%;width:100%;">
                                <span class="text-white fs-5 fw-bolder">Upload Picture</span>
                            </div>
                            <input type="file" name="image" class="form-control rounded-0">
                            @error('image')
                                <small class="text-danger mb-1">{{ $message }}</small>
                            @enderror
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
                                    <small class="text-danger mb-1">{{ $message }}</`small>
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
                                <select name="level" class="form-select" id="classLevel">
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
                            <div class="" id="classCateogry">
                                <select name="category" class="form-select" id="collegeCourses" style="display: none;">
                                    <option value="" selected disabled>Choose Course</option>
                                    <option value="CCS">CCS</option>
                                    <option value="CAS">CAS</option>
                                    <option value="CBA">CBA</option>
                                    <option value="COC">COC</option>
                                    <option value="COE">COE</option>
                                </select>
                                <select id="seniorHighGrades" class="form-select" style="display: none;">
                                    <option value="Grade 12">Grade 12</option>
                                    <option value="Grade 11">Grade 11</option>
                                </select>
                                <select id="juniorHighGrades" class="form-select" style="display: none;">
                                    <option value="Grade 10">Grade 10</option>
                                    <option value="Grade 9">Grade 9</option>
                                    <option value="Grade 8">Grade 8</option>
                                    <option value="Grade 7">Grade 7</option>
                                </select>
                                <select id="elementaryGrades" class="form-select" style="display: none;">
                                    <option value="Grade 6">Grade 6</option>
                                    <option value="Grade 5">Grade 5</option>
                                    <option value="Grade 4">Grade 4</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 1">Grade 1</option>
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

<!-- Sweet Message Alerts -->
@if(Session::has('message'))
    <script>
        swal("Student Registration", "{{ Session::get('message') }}", 'success', {
            button: true,
            button: "OK",
        });
    </script>
@elseif ($errors->any())
    <script>
        swal("Student Registration", 'Student Registration fail', 'error', {
            button: true,
            button: "OK",
        });
    </script>
@endif

<!-- JavaScript to handle showing/hiding selects based on level -->
<script>
document.getElementById('classLevel').addEventListener('change', function() {
    var selectedLevel = this.value;
    var collegeCourses = document.getElementById('collegeCourses');
    var seniorHighGrades = document.getElementById('seniorHighGrades');
    var juniorHighGrades = document.getElementById('juniorHighGrades');
    var elementaryGrades = document.getElementById('elementaryGrades');

    // Hide all selects by default
    collegeCourses.style.display = 'none';
    seniorHighGrades.style.display = 'none';
    juniorHighGrades.style.display = 'none';
    elementaryGrades.style.display = 'none';

    // Show the relevant select based on the selected level
    if (selectedLevel === 'College') {
        collegeCourses.style.display = 'block';
    } else if (selectedLevel === 'Senior Highschool') {
        seniorHighGrades.style.display = 'block';
    } else if (selectedLevel === 'Junior Highschool') {
        juniorHighGrades.style.display = 'block';
    } else if (selectedLevel === 'Elementary') {
        elementaryGrades.style.display = 'block';
    }
});
</script>
<!-- -- MODALITY END -->