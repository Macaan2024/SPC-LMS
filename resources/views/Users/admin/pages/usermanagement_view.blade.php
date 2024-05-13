<x-admin.usermanagement-layout>
    <x-slot name="view_user">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex">
            <div class="col-lg-1 bg-light " style="height:100%"></div>
                <div class="col-lg-10 col-12 bg-white px-4 px-sm-5 py-5" style="height:auto;">
                    <section>
                        <div class="d-flex justify-content-start align-items-center gap-2 flex-nowrap   ">
                            <a href="/usermanagement">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M21 11H6.414l5.293-5.293l-1.414-1.414L2.586 12l7.707 7.707l1.414-1.414L6.414 13H21z"/>
                                </svg>
                            </a>               
                            <h5 class="text-nowrap p-0 m-0" style="color:#661011;">View User</h5>
                            </div>
                        <hr>
                        <div class="container-fluid d-flex flex-column mt-5  align-items-center p-0 m-0">
                            <div style="width:200px;height:210px;" class="">
                                <img src="{{ asset('userimages/'. $student->user_image)}}" class="object-fit-fill rounded-circle" style="height:100%;width:100%;" alt="">
                            </div>
                            <div class="my-4 d-flex gap-3">
                                <h4 class="p-0 m-0 fw-normal">{{ $student->firstname}}</h4>
                                <h4 class="p-0 m-0 fw-normal">{{ $student->middlename}}</h4>
                                <h4 class="p-0 m-0 fw-normal">{{ $student->lastname}}</h4>
                            </div>
                        </div>
                        <hr class="p-0 m-0">
                        <div class="d-flex flex-wrap gap-5 justify-content-start">
                            <div class="mx-xl-5 mx-lg-2 mx-md-1 mx-sm-0 my-4 d-inline-block d-lg-block">
                                <h6 class="p-0 m-0 fs-5 fw-bold">About</h6>
                                <div class="d-flex flex-column gap-3">
                                    <p class="p-0 m-0 mt-5 fs-6 fw-bold text-nowrap">Role : <span class="ms-2 fw-normal">{{ $student->role->role_description}}</span></p>
                                    <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Gender : <span class="ms-2 fw-normal">{{ $student->gender }}</span></p>
                                    <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Class level : <span class="ms-2 fw-normal">{{ $student->level }}</span></p>

                                    @if($student->level == 'Senior Highschool')
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Strand : <span class="ms-2 fw-normal">{{ $student->strand }}</span></p>
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Grade : <span class="ms-2 fw-normal">{{ $student->grade }}</span></p>
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Section : <span class="ms-2 fw-normal">{{ $student->section }}</span></p>
                                    @elseif ($student->level == 'College')
                                        <p class="p-0 m-0 fs-6 fw-bold">Course : <span class="ms-2 fw-normal">{{ $student->course }}</span></p>
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Year : <span class="ms-2 fw-normal">{{ $student->year }}</span></p>
                                        <p class="p-0 m-0 fs-6 fw-bold">Department : <span class="ms-2 fw-normal">{{ $student->department }}</span></p>
                                    @elseif ($student->level == 'Junior Highschool')
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Grade : <span class="ms-2 fw-normal">{{ $student->grade }}</span></p>
                                        <p class="p-0 m-0 fs-6 fw-bold text-nowrap">Section : <span class="ms-2 fw-normal">{{ $student->section }}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="mx-xl-5 mx-lg-2 mx-md-1 mx-sm-0 my-4  d-inline-block d-lg-block">
                                <h6 class="p-0 m-0 fs-5 fw-bold">Contact</h6>
                                <div class="d-flex flex-column gap-3">
                                    <p class="p-0 m-0 mt-5 fs-6 fw-bold d-block align-items-center">Cellphone :
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 64 64"><rect width="64" height="64" fill="none"/><path fill="#405866" d="M47.873 0H16.124a5.082 5.082 0 0 0-5.08 5.079v53.845a5.084 5.084 0 0 0 5.08 5.079h31.749a5.088 5.088 0 0 0 5.083-5.079V5.087A5.085 5.085 0 0 0 47.873.008"/><path fill="#85cfea" d="M44.579 3.876h-25.16a4.03 4.03 0 0 0-4.03 4.02v42.667a4.028 4.028 0 0 0 4.03 4.02h25.16c2.22 0 4.02-1.81 4.02-4.02V7.892c0-2.22-1.805-4.02-4.02-4.02"/><path fill="#28a6de" d="M31.3 3.876H19.425a4.03 4.03 0 0 0-4.03 4.02v42.667a4.028 4.028 0 0 0 4.03 4.02h25.16c.813 0 1.564-.249 2.196-.659C36.084 39.99 30.358 21.259 31.303 3.874"/><path fill="#cbd5dc" d="M35.3 59.39c0 1.817-1.476 3.298-3.297 3.298s-3.297-1.48-3.297-3.298s1.476-3.298 3.297-3.298s3.297 1.48 3.297 3.298m-12.705 0a2.412 2.412 0 1 1-4.823.003a2.412 2.412 0 0 1 4.823-.003m18.815 0a2.412 2.412 0 1 0 4.822 0a2.41 2.41 0 0 0-4.822 0"/></svg>      
                                        <span class="ms-0 fw-normal">{{ $student->cpnumber}}</span>
                                    </p>
                                    <p class="p-0 m-0 fs-6 fw-bold">Email :
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 256 193"><rect width="256" height="193" fill="none"/><path fill="#4285f4" d="M58.182 192.05V93.14L27.507 65.077L0 49.504v125.091c0 9.658 7.825 17.455 17.455 17.455z"/><path fill="#34a853" d="M197.818 192.05h40.727c9.659 0 17.455-7.826 17.455-17.455V49.505l-31.156 17.837l-27.026 25.798z"/><path fill="#ea4335" d="m58.182 93.14l-4.174-38.647l4.174-36.989L128 69.868l69.818-52.364l4.669 34.992l-4.669 40.644L128 145.504z"/><path fill="#fbbc04" d="M197.818 17.504V93.14L256 49.504V26.231c0-21.585-24.64-33.89-41.89-20.945z"/><path fill="#c5221f" d="m0 49.504l26.759 20.07L58.182 93.14V17.504L41.89 5.286C24.61-7.66 0 4.646 0 26.23z"/></svg> 
                                        <span class="ms-2 fw-normal">{{ $student->email }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="mx-xl-5 mx-lg-2 mx-md-1 mx-sm-0 my-4">
                                <h6 class="p-0 m-0 fs-5 fw-normal">Previous Borrowed Books</h6>
                                <div class="d-flex flex-column gap-3 mt-3">
                                    <div style="height:300px; width:270px;" class="bg-dark">
                                        hai
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  User Transcation Records--}}
                        <div class="mt-3">
                            <h6 class="p-0 m-0 fs-6">Transaction</h6>
                            <table class="table-responsive table align-middle mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Book</th>
                                    <th>Title</th>
                                    <th>Start Day</th>
                                    <th>Start Time</th>
                                    <th>End Day</th>
                                    <th>End Time</th>
                                    <th>Duration</th>
                                    <th>Overdue</th>
                                    <th>Penalty</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </section>
                </div>
            <div class="col-lg-1 bg-light" style="100%;"></div>
            </div>
        </div>
    </div>  
    </x-slot>
</x-admin.usermanagement-layout>