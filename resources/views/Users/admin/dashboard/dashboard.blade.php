@extends('Users.admin.dashboard.dashboard_layout')

@section('dashboard-content')
<div class="row m-0 p-0">
    <div class="col-12 p-5 m-0">
        <!-- dash row -->
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0 ">
                <h5 class="p-0 m-0 font-size-respon">Dashboard</h5>
            </div>
        </div>
        <div class="border-bottom py-2 mb-5"></div>
        <!-- year selection  row below-->
        <!-- first col (between) -->
        <div class="row p-0 m-0">
            <div class="dash-selection-row col-12 p-0 m-0 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-4">
                    <span>Select Year Recordsssssss</span>
                    <select class="form-select" name="" id="">
                        <option value="" selected>2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                        <option value="">2027</option>
                        <option value="">2028</option>
                    </select>
                    <span>To</span>
                    <select name="" id="" class="form-select">
                        <option value="">2023</option>
                        <option value="" selected>2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                        <option value="">2027</option>
                        <option value="">2028</option>
                    </select>
                </div>
            <!-- second row. display buttons -->
            <!-- button sem selection -->
                <div class="sem-buttons d-flex gap-4 align-items-center">
                    <button class="border ">1st-Sem</button>
                    <button class="border ">2nd-Sem</button>
                    <button class="border ">All</button>
                </div>
            </div>
        </div>
        <!-- total boxess row below  -->
        <!-- logbook box row-->
        <div class="border-bottom my-3"></div>
        <div class="row p-0 m-0">
            <div class="col p-0 m-0">
                <div class="d-flex gap-4">
                    <div class="flex-direction-col p-0 m-0">
                        <div class="library-title-box">
                            <h6 class="p-0 m-0">Library Office Logs</h6>
                        </div>
                        <div class="library-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- total books and members row -->
        <div class="row p-0 m-0 mt-3">
            <div class="col p-0 m-0">
                <div class="d-flex gap-4">
                    <div class="flex-direction-col p-0 m-0">
                        <div class="book-title-box">
                            <h6 class="p-0 m-0">Total Books</h6>
                        </div>
                        <div class="book-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Members</h6>
                        </div>
                        <div class="member-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- book issues  (recieve, borrowed, overdue, lost )-->
        <div class="row p-0 m-0 mt-3">
            <div class="col p-0 m-0">
                <div class="d-flex gap-4">
                    <div class="flex-direction-col p-0 m-0">
                        <div class="borrowed-title-box">
                            <h6 class="p-0 m-0">Borrowed Books</h6>
                        </div>
                        <div class="borrowed-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="return-title-box">
                            <h6 class="p-0 m-0">Return Books</h6>
                        </div>
                        <div class="return-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="overdue-title-box">
                            <h6 class="p-0 m-0">Overdue Books</h6>
                        </div>
                        <div class="overdue-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="lost-title-box">
                            <h6 class="p-0 m-0">Lost Books</h6>
                        </div>
                        <div class="lost-totalnum-box">
                            <p class="fs-1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom my-3"></div>
        <!-- Todays Row Track -->
        <div class="row p-0 m-0 mb-3">
            <h6 class="p-0 m-0">Today's Track</h6>
        </div>
        <div class="row p-0 m-0">
            <div class="col-12 m-0 p-0">
                <div class="d-flex gap-4 m-0 p-0"> 
                    <!-- Today's Track row boxes book issues  (recieve, borrowed, overdue, lost ) -->
                    <div class="row p-0 m-0 mt-0">
                        <div class="col p-0 m-0">
                            <div class="d-flex gap-4">
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="borrowed-title-box">
                                        <h6 class="p-0 m-0">Borrowed Books</h6>
                                    </div>
                                    <div class="borrowed-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="return-title-box">
                                        <h6 class="p-0 m-0">Return Books</h6>
                                    </div>
                                    <div class="return-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="overdue-title-box">
                                        <h6 class="p-0 m-0">Overdue Books</h6>
                                    </div>
                                    <div class="overdue-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="lost-title-box">
                                        <h6 class="p-0 m-0">Lost Books</h6>
                                    </div>
                                    <div class="lost-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                           
                </div>
            </div>
        </div>
        <div class="border-bottom my-3"></div>
         <!-- Yesterday Track Row  -->
        <div class="row p-0 m-0 mb-3">
            <h6 class="p-0 m-0">Yesterday Track</h6>
        </div>
        <div class="row p-0 m-0">
            <div class="col-12 m-0 p-0">
                <div class="d-flex gap-4 m-0 p-0"> 
                    <!-- Yesterday Track row boxes book issues  (recieve, borrowed, overdue, lost ) -->
                    <div class="row p-0 m-0 mt-0">
                        <div class="col p-0 m-0">
                            <div class="d-flex gap-4">
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="borrowed-title-box">
                                        <h6 class="p-0 m-0">Borrowed Books</h6>
                                    </div>
                                    <div class="borrowed-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="return-title-box">
                                        <h6 class="p-0 m-0">Return Books</h6>
                                    </div>
                                    <div class="return-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="overdue-title-box">
                                        <h6 class="p-0 m-0">Overdue Books</h6>
                                    </div>
                                    <div class="overdue-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                                <div class="flex-direction-col p-0 m-0">
                                    <div class="lost-title-box">
                                        <h6 class="p-0 m-0">Lost Books</h6>
                                    </div>
                                    <div class="lost-totalnum-box">
                                        <p class="fs-1"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection