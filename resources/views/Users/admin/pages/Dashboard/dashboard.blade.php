<x-admin.layout>
    <x-slot name="dashboard">
        <div class="container-xxl mt-5 p-0" style="min-width:480px;">
            <h4 class="p-0 m-0">Dashboard</h4>
            <hr class="p-0 my-3">
            <h5 class="fw-normal p-0 m-0 mt-5">Logbook</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Sign-in</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">View More</button></a>
                    </div>
                </div>
            </div>
            <h5 class="fw-normal p-0 m-0 mt-5">Book Requests</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Approved</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">View More</button></a>
                    </div>
                </div>
            
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Pending</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#002233;">View More</button></a>
                    </div>
                </div>
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Declined</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330000;">View More</button></a>
                    </div>
                </div>
            </div>
            {{-- User Stats --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Users</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                @foreach ($levels as $level => $groupLevels)
                    @if($level == 'College')
                        <div class="col mt-2" style="">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $college }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Senior Highschool')
                        <div class="col mt-2">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $seniorhigh }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#002233;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Junior Highschool')
                        <div class="col mt-2" >
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $juniorhigh }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330000;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Elementary')
                        <div class="col mt-2">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;">{{ $elementary }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#1a1a1a;">View More</button></a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                            <div class="card-body p-0 m-0 d-flex flex-column">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660066">Faculty</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d004d;">{{ $faculty }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330033;">View More</button></a>
                            </div>
                        </div>
                    </div>
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <div class="card-body p-0 m-0 d-flex flex-column">
                            <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#663500;">Library Staff</p>
                            <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d2800;">{{ $staff }}</p>
                            <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#331a00">View More</button></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Books Stats --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Books</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                @foreach ($levels as $level => $groupLevels)
                    @if($level == 'College')
                        <div class="col mt-2" style="">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $college }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Senior Highschool')
                        <div class="col mt-2">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $seniorhigh }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#002233;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Junior Highschool')
                        <div class="col mt-2" >
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $juniorhigh }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330000;">View More</button></a>
                            </div>
                        </div>
                    @elseif($level == 'Elementary')
                        <div class="col mt-2">
                            <div class="card" style="width:100%; height:160px;">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;">{{$level}}</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;">{{ $elementary }}</p>
                                <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#1a1a1a;">View More</button></a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- USER FINES --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Transactions</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Ongoing</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">Ongoing</button></a>
                    </div>
                </div>

                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Returned</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#002233;">View More</button></a>
                    </div>
                </div>
    
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Cancel</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330000;">View More</button></a>
                    </div>
                </div>
            </div>
            <h5 class="fw-normal p-0 m-0 mt-5">User Fines</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Overdue</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#003300;">View More</button></a>
                    </div>
                </div>
            
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">User have balance</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#002233;">View More</button></a>
                    </div>
                </div>
            
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;"></p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#330000;">View More</button></a>
                    </div>
                </div>
            
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;"></p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;"></p>
                        <a href=""><button class="w-100 border-0 py-1 text-white fs-normal bg-light-hover" style="background-color:#1a1a1a;">View More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin.layout>




