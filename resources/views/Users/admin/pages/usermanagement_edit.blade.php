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
            <form action="/edit/{{$student->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}">
                    <div class="d-flex justify-content-start gap-3">
                        {{-- User Image --}}
                        <div style="width:200px;height:260px;">
                            <img src="/userimage/{{ $student->user_image }}" class="object-fit-cover" style="height:100%;width:100%;" alt="">
                            <input type="file" class="form-control p-0 mt-2" style="width:100; font-size:14px;" value="{{ $student->user_image }}" name="user_image" id="formFile" placeholder="">
                            @error('user_image')
                                {{$message}}
                            @enderror
                        </div>
                        
                        {{-- User Inforamtion --}}
                        <div>
                            <h6 class="p-0 m-0">Personal Information</h6>
                            <div class="d-flex flex-column gap-4">
                                <div class="mt-4 d-flex align-items-center gap-4">
                                    <label for="" class="fs-6 p-0 m-0">Role</label>
                                    <select name="role" class="form-select py-1 ms-5" id="">
                                        @foreach ($roles as $role )
                                            <option value="{{ $role->id }}">{{ $role->role_description }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
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
                                    <label for="" class="fs-6">Lastname</label>
                                    <input type="text" name="lastname" class="form-control ms-3" value="{{ $student->lastname }}">
                                    @error('Lastname')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Firstname</label>
                                    <input type="text" name="firstname" class="form-control ms-3" value="{{ $student->firstname }}">
                                    @error('firstname')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="" class="fs-6">Middlename</label>
                                    <input type="text" name="middlename" class="form-control ms-3" value="{{ $student->middlename }}">
                                    @error('middlename')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="gender" class="" value="Male">
                                        <label for="" class="fs-6">Male</label>
                                        @error('gender')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="d-flex gap-2">
                                        <input type="radio" name="gender" class="" value="Female">
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
                            <h6>Education</h6>
                            <div class="mt-4 d-flex flex-column gap-4">
                                @if ($student->level == "College")
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="" class="fs-6">Level</label>
                                        <select class="form-select ms-5" name="level">
                                            <option value="College">College</option>
                                            <option value="Senior Highschool">Senior Highschool</option>
                                            <option value="Junior Highschool">Junior Highschool</option>
                                            <option value="Elementary">Elementary</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-4 align-items-center">
                                        <label for="">Course</label>
                                        <input type="text" name="course" class="form-control ms-4" name="course" value="{{ $student->course }}">
                                    </div>
                                    <div class="d-flex gap-5 align-items-center">
                                        <label for="">Year</label>
                                        <select id="" class="form-select ms-3" name="year">
                                            <option value="4th Year">4th Year</option>
                                            <option value="3rd Year">3rd Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="1st Year">1st Year</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <label for="">Department</label>
                                        <input type="text" name="department" class="form-control" value="{{ $student->department }}">
                                    </div>
                                {{-- if user is elementary --}}
                                @elseif ($student->level == "Senior Highschool")
                                    <div class="d-flex align-items-center gap-2">
                                        <label for="" class="fs-6">Level</label>
                                        <select class="form-select ms-4" name="course">
                                            <option value="College">College</option>
                                            <option value="Senior Highschool">Senior Highschool</option>
                                            <option value="Junior Highschool">Junior Highschool</option>
                                            <option value="Elementary">Elementary</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-4 align-items-center">
                                        <label for="">Grade</label>
                                        <select name="grade" id="" class="form-select ms-1">
                                            <option value="Grade 12">Grade 12</option>
                                            <option value="Grade 11">Grade 11</option>
                                        </select>
                                    </div>
                                    <div class="d-flex gap-4 align-items-center">
                                        <label for="">Strand</label>
                                        <input type="text" name="strand" value="{{ $student->strand }}" class="form-control">
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <label for="">Section</label>
                                        <input type="text" name="section" value="{{ $student->section }}" class="form-control">
                                    </div>
                                @elseif ($student->level == "Junior Highschool")
                                    <div class="d-flex align-items-center gap-1">
                                        <label for="" class="fs-6">Level</label>
                                        <select class="form-select ms-4" name="course">
                                            <option value="College">College</option>
                                            <option value="Senior Highschool">Senior Highschool</option>
                                            <option value="Junior Highschool">Junior Highschool</option>
                                            <option value="Elementary">Elementary</option>
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-center gap-4">
                                        <label for="" class="fs-6">Grade</label>
                                        <select name="grade" id="" class="form-select">
                                            <option value="Grade 10">Grade 10</option>
                                            <option value="Grade 9">Grade 9</option>
                                            <option value="Grade 8">Grade 8</option>
                                            <option value="Grade 7">Grade 7</option>
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <label for="">Section</label>
                                        <input type="text" name="section" value="{{ $student->section }}" class="form-control">
                                    </div>
                                @elseif($student->level == "Elementary" )
                                @endif
                            </div>
                        </div>
                        <div class="d-flex flex-column ">
                            <h6 class="p-0 m-0">Contact Information</h6>
                            <div class="d-flex flex-column gap-4 mt-2">
                                <div class="d-flex align-items-center gap-4 mt-3">
                                    <label for="" class="fs-6">Email</label>
                                    <input type="email" name="email" class="form-control ms-4" value="{{ $student->email }}">
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Cellphone</label>
                                    <input type="text" name="cpnumber" class="form-control" value="{{ $student->cpnumber }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        
                    </div>
                    <button typ="submit" name="submit" class="btn btn-success w-100 mt-3">Submit</button>           
                    </form>
            </section>
        </div>
        <div class="col-lg-1 bg-light"></div>
    </div>
    </x-slot>
</x-admin.usermanagement-layout>