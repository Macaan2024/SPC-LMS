<x-admin.usermanagement-layout>
    <x-slot name="edit_student">
    <div class="row ">
        <div class="col-lg-1 bg-light"></div>
        <div class="col-lg-10 col-12 vh-100 px-4 px-sm-5 py-5">
            <div class="d-flex justify-content-start align-items-center gap-1 flex-nowrap   ">
                <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="2em" height="2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0M6 21v-2a4 4 0 0 1 4-4h3.5m4.92.61a2.1 2.1 0 0 1 2.97 2.97L18 22h-3v-3z"/></svg>
                <h5 class="text-nowrap p-0 m-0" style="color:#661011;">Edit User</h5>
            </div>
            <hr>

            <section>
            <form action="/edit/{{$student->id}}" method="POST" enctype="multipart/form-data" autocompleteo="off">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-start gap-3">
                        <div style="width:200px;height:260px;">
                        <img src="{{ asset('userimages/'. $student->user_image) }}" class="object-fit-cover" style="height:100%;width:100%;" alt="">
                            <input type="file" class="form-control p-0 mt-2" style="width:100; font-size:14px;" value="{{ $student->user_image }}" name="user_image" id="formFile" placeholder="">
                            @error('user_image')
                                {{$message}}
                            @enderror
                        </div>
                        {{-- User Inforamtion --}}
                        <div>
                            <input type="hidden" name="password" value="{{ $student->id }}">
                            <input type="hidden" name="status" value="{{ $student->status }}">
                            <h6 class="p-0 m-0">Personal Information</h6>
                            <div class="d-flex flex-column gap-4">
                                <div class="mt-4 d-flex align-items-center gap-4">
                                    <label for="" class="fs-6 p-0 m-0">Role</label>
                                    <select name="role_id" class="form-select py-1 ms-5" id="" autocompleteo="off">
                                        @foreach ($roles as $role )
                                            <option value="{{ $role->id }}">{{ $role->role_description }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_description')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <label for="" class="text-nowrap fs-6">Unique ID</label>
                                    <input type="text" name="unique_id" class="form-control ms-4" value="{{ $student->unique_id }}">
                                    @error('unique_id')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="text-nowrap fs-6">Lastname</label>
                                    <input type="text" name="lastname" class="form-control ms-3" value="{{ $student->lastname }}" autocompleteo="off">
                                    @error('lastname')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="text-nowrap fs-6">Firstname</label>
                                    <input type="text" name="firstname" class="form-control ms-3" value="{{ $student->firstname }}" autocompleteo="off">
                                    @error('firstname')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="" class="text-nowrap fs-6">Middlename</label>
                                    <input type="text" name="middlename" class="form-control ms-3" value="{{ $student->middlename }}" autocompleteo="off">
                                    @error('middlename')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="gender" class="" value="Male" autocompleteo="off" {{ $student->gender == 'Male'? 'checked' : '' }} >
                                        <label for="" class="fs-6">Male</label>
                                        @error('gender')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="gender" class="" value="Female" autocompleteo="off" {{ $student->gender == 'Female'? 'checked' : ''}}>
                                        <label for="" class="fs-6">Female</label>
                                        @error('gender')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- User Education Information --}}
                        <div class="ms-2">
                            <h6 class="p-0 m-0">Education</h6>
                            <div class="mt-4 d-flex flex-column gap-5">
                                <div class="d-flex align-items-center gap-2">         
                                    <label for="" class="fs-6 p-0 m-0">Level</label>
                                    <select class="form-select ms-5 py-1" name="level" autocomplete="off" id="edityearLevel">
                                        <option id="college" value="College" {{$student->level == 'College'? 'selected' : ''}}>College</option>
                                        <option id="seniorhigh" value="Senior Highschool" {{$student->level == 'Senior Highschool'? 'selected' : ''}}>Senior Highschool</option>
                                        <option id="juniorhigh" value="Junior Highschool" {{$student->level == 'Junior Highschool'? 'selected' : ''}}>Junior Highschool</option>
                                        <option id="elementary" value="Elementary" {{$student->level == 'Elementary'? 'selected' : ''}}>Elementary</option>
                                    </select>
                                </div>
                                @error('level')
                                    {{$message}}
                                @enderror
                                {{-- COllege Inputs --}}

                                <div id="collegeInputs">
                                    <div class="d-flex flex-column gap-5  m-0 p-0">
                                        <div class="d-flex gap-4 align-items-center">
                                            <label for="" class="fs-6">Coursess</label>
                                            <input type="text" name="course" class="form-control ms-4" name="course" value="{{ $student->course }}" autocomplete="off">
                                        </div>
                                        <div class="d-flex gap-5 align-items-center">
                                            <label for="" class="fs-6">Year</label>
                                            <select id="" class="form-select ms-3 py-2" name="year" autocomplete="off">
                                                <option value="4th Year" {{ $student->year == '4th Year'? 'selected' : ''}}>4th Year</option>
                                                <option value="3rd Year" {{ $student->year == '3rd Year'? 'selected' : ''}}>3rd Year</option>
                                                <option value="2nd Year" {{ $student->year == '2nd Year'? 'selected' : ''}}>2nd Year</option>
                                                <option value="1st Year" {{ $student->year == '1st Year'? 'selected' : ''}}>1st Year</option>
                                            </select>
                                        </div>
                                        <div class="d-flex gap-3 align-items-center">
                                            <label for="" class="fs-6">Department</label>
                                            <input type="text" name="department" class="form-control" value="{{ $student->department }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div id="basicEducation">
                                    <div class="d-flex flex-column gap-5 m-0 p-0">
                                        <div class="d-flex gap-4 align-items-center">
                                            <label for="grade">Grade</label>
                                            <select name="grade" id="studentGrade" class="form-select" autocompleteo="off">
                                            </select>
                                        </div>
                                        @error('grade')
                                            {{$message}}
                                        @enderror
                                        <div class="d-flex gap-3 align-items-center">
                                            <label for="section">Section</label>
                                            <input type="text" name="section" id="section" class="form-control" autocomplete="off" value="{{ $student->section }}">
                                        </div>
                                        <div id="seniorhighInputs">
                                            <div class="d-flex gap-4 align-items-center">
                                                <label for="strand">Strand</label>
                                                <input type="text" name="strand" id="strand" class="form-control" autocomplete="off" value="{{ $student->strand }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <div class="d-flex flex-column ">
                            <h6 class="p-0 m-0">Contact Information</h6>
                            <div class="d-flex flex-column gap-4 mt-2">
                                <div class="d-flex align-items-center gap-4 mt-3">
                                    <label for="" class="fs-6">Education</label>
                                    <input type="email" name="email" class="form-control ms-4" value="{{ $student->email }}" autocompleteo="off">
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Cellphone</label>
                                    <input type="text" name="cpnumber" class="form-control" value="{{ $student->cpnumber }}" autocompleteo="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-success w-100 mt-3">Submit</button>           
                </form>
            </section>
        </div>
        <div class="col-lg-1 bg-light"></div>
    </div>
    @if(Session::has('editSuccessfully')) 
        <script>
            var message = "{{Session::get('editSuccessfully') }}";
            if (message == "Successfully updated user") {
                swal ("User Edit", message, "success", {
                    button:true,
                    button:"OK",
                }); 
            }
        </script>
    @endif
    <script>
    $(document).ready(function() {
        $('#edityearLevel').on('change', function() {
            var edityearLevel = this.value;
            var gradeOptions = '';

            if (edityearLevel == 'College') {
                // Show the collegeInputs div
                $('#collegeInputs').show();
                $('#seniorhighInputs, #juniorhighInputs, #basicEducation').hide();
            } else if (edityearLevel == 'Senior Highschool') {
                // Show the seniorhighInputs div
                $('#basicEducation, #seniorhighInputs').show();
                $('#collegeInputs').hide();

                // Generate grade options for Senior Highschool
                gradeOptions = `
                    <option value="">Choose Grade</option>
                    <option value="Grade 12" {{ $student->grade == 'Grade 12'? 'selected' : ''}}>Grade 12</option>
                    <option value="Grade 11" {{ $student->grade == 'Grade 11'? 'selected' : ''}}>Grade 11</option>
                `;
            } else if (edityearLevel == 'Junior Highschool') {
                // Show the juniorhighInputs div
                $('#basicEducation').show();
                $('#collegeInputs, #seniorhighInputs').hide();

                // Generate grade options for Junior Highschool
                gradeOptions = `
                    <option value="">Choose Grade</option>
                    <option value="Grade 10" {{ $student->grade == 'Grade 10'? 'selected' : ''}}>Grade 10</option>
                    <option value="Grade 9" {{ $student->grade == 'Grade 9'? 'selected' : ''}}>Grade 9</option>
                    <option value="Grade 8" {{ $student->grade == 'Grade 8'? 'selected' : ''}}>Grade 8</option>
                    <option value="Grade 7" {{ $student->grade == 'Grade 7'? 'selected' : ''}}>Grade 7</option>
                `;
            } else if (edityearLevel == 'Elementary') {
                // Show the juniorhighInputs div
                $('#basicEducation').show();
                $('#collegeInputs, #seniorhighInputs').hide();

                // Generate grade options for Junior Highschool
                gradeOptions = `
                    <option value="">Choose Grade</option>
                    <option value="Grade 6" {{ $student->grade == 'Grade 6'? 'selected' : ''}}>Grade 6</option>
                    <option value="Grade 5" {{ $student->grade == 'Grade 5'? 'selected' : ''}}>Grade 5</option>
                    <option value="Grade 4" {{ $student->grade == 'Grade 4'? 'selected' : ''}}>Grade 4</option>
                    <option value="Grade 3" {{ $student->grade == 'Grade 3'? 'selected' : ''}}>Grade 3</option>
                    <option value="Grade 2" {{ $student->grade == 'Grade 2'? 'selected' : ''}}>Grade 2</option>
                    <option value="Grade 1" {{ $student->grade == 'Grade 1'? 'selected' : ''}}>Grade 1</option>
                `;

            } else {
                console.log('Unexpected year level:', edityearLevel);
            }

            // Append the generated grade options to the #studentGrade dropdown
            $('#studentGrade').empty().append(gradeOptions);
        });
        $('#edityearLevel').trigger('change');
    });
    </script>
    </x-slot>
</x-admin.usermanagement-layout>