<!-- -- MODALITY START -->
<div class="modal fade" id="exampleModalToggleChoice" aria-hidden="true" data-bs-backdrop="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light w-auto"  >
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6 class="modal-title text-center p-0 m-0">Choose User Registration</h6>
        <div class="d-flex gap-3 mt-3">
            <button class="btn btn-primary text-nowrap border-0 py-2" data-bs-target="#exampleModalToggleStudent" data-bs-toggle="modal" style="background-color:#661011 !important;">Student Registration</button>
            <button class="btn btn-primary text-nowrap border-0" data-bs-target="#exampleModalToggleFaculty" data-bs-toggle="modal" style="background-color:#661011 !important;">Faculty Registration</button>
            <button class="btn btn-primary text-nowrap border-0" data-bs-target="#exampleModalToggleLibraryStaff" data-bs-toggle="modal" style="background-color:#661011 !important;">Library Staff Registration</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggleStudent" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content py-4 px-3 m-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-scroll">
                <h6 class="text-black p-0 m-0 text-center fw-medium fs-5 m-0 p-0">Add Student</h6>
                <form action="{{ route('student.registration')}}" method="POST" id="userRegistration" class="mt-3" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column gap-4">
                        {{-- Student Information --}}
                        <div>
                            <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                <h6 class="p-0 m-0 text-white fw-normal" >Student Information</h6>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-center gap-2">
                                <div>
                                    <div style="height:150px;width:150px;" class="bg-dark"></div>
                                </div>
                                <div>
                                    <input type="file" class="form-control py-0 rounded-0" name="user_image">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5 mt-3 align-items-start"> 
                                <div class="d-flex flex-column gap-4">
                                    <div class="m-0 p-0">
                                        <label for="">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
                                            @error('lastname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Firstname</label>
                                            <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
                                            @error('firstname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Middlename</label>
                                            <input type="text" name="middlename" class="form-control" value="{{old('middlename')}}">
                                            @error('middlename')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-4 m-0 p-0">
                                    <div class="m-0 p-0"> 
                                        <label for=""class="mb-2">Gender</label><br>

                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Male" {{ old('gender') == 'Male'? 'checked' : '' }}>
                                            <label class="ms-1 fs-6">Male</label>

                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Female" {{ old('gender') == 'Female'? 'checked' : '' }}>
                                            <label class="ms-1 fs-6">Female</label>

                                            @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror  
                                    </div>
                                    <div>
                                        <label for="">Cellphone Number</label>
                                            <input type="text" name="cpnumber" class="form-control" value="{{old('cpnumber')}}">
                                            @error('cpnumber')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div>
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Education Information --}}
                        <div>
                            <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                <h6 class="p-0 m-0 text-white fw-normal" >Education Information</h6>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label for="">Unique ID</label>
                                    <input type="text" name="unique_id" class="form-control" placeholder="Ex: 2022-00317" value="{{old('unique_id')}}" id="unique_id">
                                    @error('unique_id')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div>
                                    <label for="" class="mb-1">Class Level</label>
                                    <select name="level" class="form-select" aria-label="Default select example" id="classLevelSelect">
                                        <option disabled selected>Choose level</option>
                                        <option value="College" {{ old('level') == 'College'? 'selected' : '' }}>College</option>
                                        <option value="Senior Highschool" {{ old('level') == 'Senior Highschool'? 'selected' : '' }}>Senior Highschool</option>
                                        <option value="Junior Highschool" {{ old('level') == 'Junior Highschool'? 'selected' : '' }}>Junior Highschool</option>
                                        <option value="Elementary" {{ old('level') == 'Elementary'? 'selected' : '' }}>Elementary</option>
                                    </select>
                                    @error('level')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- Colleges --}}
                                {{-- Course --}}
                                <div class="College" style="display:none;">
                                    <label for="">Course</label>
                                    <input type="text" name="course" class="form-control">
                                    @error('College')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- COllege Year --}}
                                <div class="College" style="display:none;">
                                    <label for="" class="mb-1">Year</label>
                                    <select name="year" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Choose Year</option>
                                        <option value="1st-Year">1st-Year</option>
                                        <option value="2nd-Year">2nd-Year</option>
                                        <option value="3rd-Year">3rd-Year</option>
                                        <option value="4th-Year">4th-Year</option>
                                    </select>
                                    @error('year')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- COllege Department --}}
                                <div class="College" style="display:none;">
                                    <label for="">Department</label>
                                    <input type="text" name="department" class="form-control">
                                    @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- Section for SHS, JHS and Elem --}}
                                <div id="Section" style="display:none;">
                                    <label for="">Section</label>
                                    <input type="text" name="section" class="form-control">
                                    @error('section')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- Strand for Senior Highschool --}}
                                <div class="Shs" style="display:none;">
                                    <label for="">Strand</label>
                                    <input type="text" name="strand" class="form-control">
                                    @error('strand')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- Grrade for Senior Highschool --}}
                                <div class="Shs" style="display:none;">
                                    <label for="" class="mb-1">Grade</label>
                                    <select name="grade" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Choose Grade</option>
                                        <option value="1st-Year">Grade-11</option>
                                        <option value="2nd-Year">Grade-12</option>
                                    </select>
                                    @error('grade')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                {{-- Year for Junior Highschool --}}
                                <div class="Jhs" style="display:none;">
                                    <label for="" class="mb-1">Year</label>
                                    <select name="year" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Choose Year</option>
                                        <option value="1st-Year">1st-Year</option>
                                        <option value="2nd-Year">2nd-Year</option>
                                        <option value="3rd-Year">3rd-Year</option>
                                        <option value="4th-Year">4th-Year</option>
                                    </select>
                                    @error('year')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                {{-- Grade for Elementary --}}
                                <div class="Elem" style="display:none;">
                                    <label for="" class="mb-1">Grade</label>
                                    <select name="grade" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Choose Grade</option>
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <option value="Grade 3">Grade 3</option>
                                        <option value="Grade 4">Grade 4</option>
                                        <option value="Grade 5">Grade 5</option>
                                        <option value="Grade 6">Grade 6</option>
                                    </select>
                                    @error('grade')
                                            <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="Activate">
                        <input type="hidden" name="password">
                        <input type="hidden" name="role_description" value="Student">
                        <input type="submit" name="submit" class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>









{{--  Facultiessss  --}}
<div class="modal fade" id="exampleModalToggleFaculty" data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content py-4 px-3 m-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-body-scroll">
                <h6 class="text-black p-0 m-0 text-center fw-medium fs-5 p-0 m-0">Add Faculty</h6>
                <form action="{{ route('faculty.registration')}}" method="POST" id="userRegistration" class="mt-3">
                    @csrf
                    <div class="d-flex flex-column gap-4">
                        {{-- Faculty Information --}}
                        <div>
                            <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                <h6 class="p-0 m-0 text-white fw-normal" >Faculty Information</h6>
                            </div>
                            <h6>Unique ID</h6>
                            <input type="text" name="unique_id" class="form-control">

                            <div class="d-flex justify-content-between mt-2 gap-5 align-items-start"> 
                                <div class="d-flex flex-column gap-4">
                                    <div class="m-0 p-0">
                                        <label for="">Lastname</label>
                                            <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
                                            @error('lastname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Firstname</label>
                                            <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
                                            @error('firstname')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Middlename</label>
                                            <input type="text" name="middlename" class="form-control" value="{{old('middlename')}}">
                                            @error('middlename')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-4 m-0 p-0">
                                    <div class="m-0 p-0"> 
                                        <label for=""class="mb-2">Gender</label><br>

                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Male" {{ old('gender') == 'Male'? 'checked' : '' }}>
                                            <label class="ms-1 fs-6">Male</label>

                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Female" {{ old('gender') == 'Female'? 'checked' : '' }}>
                                            <label class="ms-1 fs-6">Female</label>

                                            @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror  
                                    </div>
                                    <div>
                                        <label for="">Cellphone Number</label>
                                            <input type="text" name="cpnumber" class="form-control" value="{{old('cpnumber')}}">
                                            @error('cpnumber')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div>
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="form-control btn btn-success text-white mt-3">
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Sweet Mesage Alerts --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var classLevelSelect = document.getElementById('classLevelSelect');

    classLevelSelect.addEventListener('change', function() {
        // Hide all divs initially
        var elements = document.querySelectorAll('.College, .Shs, .Jhs, .Elem');
        elements.forEach(function(element) {
            element.style.display = 'none';
        });

        // Show the divs corresponding to the selected option
        var selectedLevel = this.value;
        if (selectedLevel === 'College') {
            document.querySelectorAll('.College').forEach(function(element) {
                element.style.display = 'block';
            });
        } else if (selectedLevel === 'Senior Highschool') {
            document.querySelectorAll('.Shs').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        } else if (selectedLevel === 'Junior Highschool') {
            document.querySelectorAll('.Jhs').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        } else if (selectedLevel === 'Elementary') {
            document.querySelectorAll('.Elem').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        }
    });
});
</script>
<!-- -- MODALITY END -->