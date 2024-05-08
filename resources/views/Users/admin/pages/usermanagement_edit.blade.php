<x-admin.usermanagement-layout>
    <x-slot name="edit_student">
    <div class="row">
            <div class="col-lg-1 bg-light"></div>
            <div class="col-lg-10 col-12 vh-100 px-4 px-sm-5 py-5">
                <div class="d-flex justify-content-start align-items-center gap-1 flex-nowrap   ">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="2em" height="2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0M6 21v-2a4 4 0 0 1 4-4h3.5m4.92.61a2.1 2.1 0 0 1 2.97 2.97L18 22h-3v-3z"/></svg>
                    <h5 class="text-nowrap p-0 m-0" style="color:#661011;">Edit User</h5>
                </div>
                <hr>

                <section>
                    <div class="d-flex justify-content-start gap-3">
                        {{-- User Image --}}
                        <div style="width:200px;height:260px;">
                            <img src="/userimage/cas.jpg" class="object-fit-cover" style="height:100%;width:100%;" alt="">
                        </div>
                        {{-- User Inforamtion --}}
                        <div>
                            <h6 class="p-0 m-0">Personal Information</h6>
                            <div class="d-flex flex-column gap-4">
                                <div class="mt-4 d-flex align-items-center gap-3">
                                    <label for="" class="fs-6 p-0 m-0">Role</label>
                                    <select name="" class="form-select py-1 ms-5" id="">
                                        <option value="">Student</option>
                                        <option value="">Student Assistant</option>
                                        <option value="">Facullty</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Lastname</label>
                                    <input type="text" name="lastname" class="form-control ms-3">
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Firstname</label>
                                    <input type="text" name="firstname" class="form-control ms-3">
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="" class="fs-6">Middlename</label>
                                    <input type="text" name="middlename" class="form-control ms-3">
                                </div>
                            </div>
                        </div>
                        {{-- User Education Information --}}
                        <div class="ms-5">
                            <h6>Education</h6>
                            <div class="mt-4 d-flex flex-column gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Level</label>
                                    <select class="form-select">
                                        <option value="">College</option>
                                        <option value="">Senior Highschool</option>
                                        <option value="">Junior Highschool</option>
                                        <option value="">Elementary</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="" class="fs-6">Level</label>
                                    <select class="form-select">
                                        <option value="">College</option>
                                        <option value="">Senior Highschool</option>
                                        <option value="">Junior Highschool</option>
                                        <option value="">Elementary</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </section>
      
            </div>
            <div class="col-lg-1 bg-light"></div>
        </div>
    </x-slot>
</x-admin.usermanagement-layout>