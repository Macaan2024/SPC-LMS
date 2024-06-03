<x-admin.layout>
    <x-slot name="dashboard">
        <div class="container-xxl mt-5 p-0" style="min-width:480px;">
            <h4 class="p-0 m-0">Dashboard</h4>
            <hr class="p-0 my-3">
            {{-- Requests Controll --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Logbook</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Sign-in</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;"></p>
                    </div>
                </div>
            </div>
            <h5 class="fw-normal p-0 m-0 mt-5">Book Requests</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Approved</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $transactionApproved }}</p>
                    </div>
                </div>
            
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Pending</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $transactionPending }}</p>
                    </div>
                </div>
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Declined</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $transactionDeclined }}</p>
                    </div>
                </div>  
            </div>
            {{-- User Stats --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Users</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">College</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $college }}</p>
                    </div>
                </div>

                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Senior Highschool</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $seniorhigh }}</p>
                    </div>
                </div>
        
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Junior Highschool</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $juniorhigh }}</p>
                    </div>
                </div>
        
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;">Elementary</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;">{{ $elementary }}</p>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                            <div class="card-body p-0 m-0 d-flex flex-column">
                                <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660066">Faculty</p>
                                <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d004d;">{{ $faculty }}</p>
    
                            </div>
                        </div>
                    </div>
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <div class="card-body p-0 m-0 d-flex flex-column">
                            <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#663500;">Library Staff</p>
                            <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d2800;">{{ $staff }}</p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Books Stats --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Books</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">College</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $bookCollege }}</p>
                    </div>
                </div>            
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Senior Highschool</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $bookSeniorHigh}}</p>
                    </div>
                </div>  
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Junior Highschool</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $bookJuniorHigh }}</p>
                    </div>
                </div>       
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;">Elementary</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;">{{ $bookElementary }}</p>

                    </div>
                </div>
            </div>

            {{-- USER FINES --}}
            <h5 class="fw-normal p-0 m-0 mt-5">Transactions</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Ongoing</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $transactionOngoing }}</p>
                    </div>
                </div>

                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title 0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#004466;">Returned</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#00334d;">{{ $transactionReturned }}</p>
                    </div>
                </div>
    
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">Cancel</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $transactionCancel }}</p>
                    </div>
                </div>
                <div class="col mt-2">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#333333;">Return with Overdues</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#262626;">{{ $transactionWithOverdue }}</p>
                    </div>
                </div>
            </div>
            <h5 class="fw-normal p-0 m-0 mt-5">User Fines</h5>
            <div class="row row-cols-2 mt-3 row-cols-xl-6 mb-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 w-100 p-0 m-0">
                <div class="col mt-2" style="">
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#006600;">Collected Payment</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#004d00;">{{ $totalPayment }}</p>
                    </div>
                </div>   
                <div class="col mt-2" >
                    <div class="card" style="width:100%; height:160px;">
                        <p class="card-title p-0 m-0 bg-opacity-75 py-2 text-white fw-normal fs-6 px-3 text-nowrap" style="background-color:#660000;">User with balance</p>
                        <p class="flex-grow-1 d-flex justify-content-center align-items-center fs-4 p-0 m-0 text-white" style="background-color:#4d0000;">{{ $userWithFines }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin.layout>




