<!-- -- MODALITY START -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content py-4 px-3 m-0">
            <div class="modal-header text-white justify-content-center align-items-center border-0">
                <h6 class="text-black p-0 m-0 text-center fw-medium fs-5">ADD Student</h6>
            </div>
            <div class="modal-body modal-body-scroll">
                <form action="{{ route('store')}}" method="POST" id="userRegistration">
                    @csrf
                    <div class="d-flex flex-column gap-4">
                        {{-- Student Information --}}
                        <div>
                            <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                <h6 class="p-0 m-0 text-white fw-normal" >Student Information</h6>
                            </div>
                            <div class="d-flex justify-content-between gap-5 align-items-start"> 
                                <div class="d-flex flex-column gap-4">
                                    <div class="m-0 p-0">
                                        <label for="">Lastname</label>
                                            <input type="text" name="lastname" class="form-control">
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Firstname</label>
                                            <input type="text" name="firstname" class="form-control">
                                    </div>
                                    <div class="m-0 p-0">
                                        <label for="">Middlename</label>
                                            <input type="text" name="middlename" class="form-control">
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-4 class="m-0 p-0"">
                                    <div class="m-0 p-0"> 
                                        <label for=""class="mb-2">Gender</label><br>
                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Male">
                                            <span class="ms-1">Male</span>
                                            <input type="radio" name="gender" class="ms-3 form-check-input" value="Female">
                                            <span class="ms-1">Female</span>  
                                    </div>
                                    <div>
                                        <label for="">Cellphone Number</label>
                                            <input type="text" name="cpnumber" class="form-control">
                                    </div>
                                    <div>
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control">
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
                                    <input type="text" name="unique_id" class="form-control" placeholder="Ex: 2022-00317">
                                </div>
                                <div>
                                    <label for="" class="mb-1">Class Level</label>
                                    <select name="level" class="form-select" aria-label="Default select example" id="classLevelSelect">
                                        <option disabled selected>Choose level</option>
                                        <option value="College">College</option>
                                        <option value="Senior Highschool">Senior Highschool</option>
                                        <option value="Junior Highschool">Junior Highschool</option>
                                        <option value="Elementary">Elementary</option>
                                    </select>
                                </div>
                                {{-- Colleges --}}
                                {{-- Course --}}
                                <div class="College" style="display:none;">
                                    <label for="">Course</label>
                                    <input type="text" name="course" class="form-control">
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
                                </div>
                                {{-- COllege Department --}}
                                <div class="College" style="display:none;">
                                    <label for="">Department</label>
                                    <input type="text" name="department" class="form-control">
                                </div>
                                {{-- Section for SHS, JHS and Elem --}}
                                <div id="Section" style="display:none;">
                                    <label for="">Section</label>
                                    <input type="text" name="section" class="form-control">
                                </div>
                                {{-- Strand for Senior Highschool --}}
                                <div class="Shs" style="display:none;">
                                    <label for="">Strand</label>
                                    <input type="text" name="strand" class="form-control">
                                </div>
                                {{-- Grrade for Senior Highschool --}}
                                <div class="Shs" style="display:none;">
                                    <label for="" class="mb-1">Grade</label>
                                    <select name="grade" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Choose Grade</option>
                                        <option value="1st-Year">Grade-11</option>
                                        <option value="2nd-Year">Grade-12</option>
                                    </select>
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

<script>
    $('#userRegistration').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this); // Use FormData for file uploads if necessary

        $.ajax({
            url: '/register', // Ensure this matches your route
            type: 'POST',
            data: formData,
            processData: false, // Important for FormData
            contentType: false, // Important for FormData
            success: function(response) {
                if (response.success) {
                    // Redirect to the desired page after successful registration
                    $('#exampleModal').modal('hide');
                } else {
                    // Handle errors (e.g., show an error message)
                    alert('Registration failed: ' + response.error);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle AJAX errors
                alert('An error occurred: ' + textStatus);
            }
        });
    });
</script>

<!-- -- MODALITY END -->