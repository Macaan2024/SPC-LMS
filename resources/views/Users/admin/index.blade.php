<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin/index.css">
</head>
    <style>
        body {
            margin: 0;
            padding: 0;

        }
    </style>

<body>
    <nav class="navbar bg-body-tertiary py-2 m-0">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 36 36"><rect width="36" height="36" fill="none"/><path fill="#553788" d="M15 31c0 2.209-.791 4-3 4H5c-4 0-4-14 0-14h7c2.209 0 3 1.791 3 4z"/><path fill="#9266cc" d="M34 33h-1V23h1a1 1 0 1 0 0-2H10c-4 0-4 14 0 14h24a1 1 0 1 0 0-2"/><path fill="#ccd6dd" d="M34.172 33H11c-2 0-2-10 0-10h23.172c1.104 0 1.104 10 0 10"/><path fill="#99aab5" d="M11.5 25h23.35c-.135-1.175-.36-2-.678-2H11c-1.651 0-1.938 6.808-.863 9.188C9.745 29.229 10.199 25 11.5 25"/><path fill="#269" d="M12 8a4 4 0 0 1-4 4H4C0 12 0 1 4 1h4a4 4 0 0 1 4 4z"/><path fill="#55acee" d="M31 10h-1V3h1a1 1 0 1 0 0-2H7C3 1 3 12 7 12h24a1 1 0 1 0 0-2"/><path fill="#ccd6dd" d="M31.172 10H8c-2 0-2-7 0-7h23.172c1.104 0 1.104 7 0 7"/><path fill="#99aab5" d="M8 5h23.925c-.114-1.125-.364-2-.753-2H8C6.807 3 6.331 5.489 6.562 7.5C6.718 6.142 7.193 5 8 5"/><path fill="#f4900c" d="M20 17a4 4 0 0 1-4 4H6c-4 0-4-9 0-9h10a4 4 0 0 1 4 4z"/><path fill="#ffac33" d="M35 19h-1v-5h1a1 1 0 1 0 0-2H15c-4 0-4 9 0 9h20a1 1 0 1 0 0-2"/><path fill="#ccd6dd" d="M35.172 19H16c-2 0-2-5 0-5h19.172c1.104 0 1.104 5 0 5"/><path fill="#99aab5" d="M16 16h19.984c-.065-1.062-.334-2-.812-2H16c-1.274 0-1.733 2.027-1.383 3.5c.198-.839.657-1.5 1.383-1.5"/></svg>
                <a class="navbar-brand text-danger">SPC-LMS</a>
            </div>
            <div class="search-box d-flex">
                <!-- <form class="d-flex gap-2 form-group" role="search" name="myForm" onsubmit="return searchs()" method="">
                    <input class="form-control" type="text" name="search" aria-label="Search" style="width:50vw;">
                    <input type="submit" class="btn btn-outline-success" value="Search">
                </form>
                <script src="/js/index.js"></script> -->
            </div>
            <div class="nav-icons d-flex align-items-center">
                <div class="icon-container d-flex gap-3 align-items-center"> <!-- Added gap-3 class -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="#242938" rx="60"/><path fill="#4285f4" d="M41.636 203.028h31.818v-77.273L28 91.665v97.727c0 7.545 6.114 13.636 13.636 13.636"/><path fill="#34a853" d="M182.545 203.028h31.819c7.545 0 13.636-6.113 13.636-13.636V91.665l-45.455 34.09"/><path fill="#fbbc04" d="M182.545 66.664v59.091L228 91.665V73.481c0-16.863-19.25-26.477-32.727-16.363"/><path fill="#ea4335" d="M73.455 125.755v-59.09L128 107.574l54.545-40.91v59.091L128 166.665"/><path fill="#c5221f" d="M28 73.483v18.181l45.454 34.091v-59.09l-12.727-9.546C47.227 47.005 28 56.619 28 73.483"/></g></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><rect width="118.35" height="118.35" x="4.83" y="4.83" fill="#3d5a98" rx="6.53" ry="6.53"/><path fill="#fff" d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A126.56 126.56 0 0 0 91 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><g fill="none"><rect width="256" height="256" fill="#fff" rx="60"/><rect width="256" height="256" fill="#1d9bf0" rx="60"/><path fill="#fff" d="M199.572 91.411c.11 1.587.11 3.174.11 4.776c0 48.797-37.148 105.075-105.075 105.075v-.03A104.54 104.54 0 0 1 38 184.677c2.918.351 5.85.526 8.79.533a74.154 74.154 0 0 0 45.865-15.839a36.976 36.976 0 0 1-34.501-25.645a36.811 36.811 0 0 0 16.672-.636c-17.228-3.481-29.623-18.618-29.623-36.198v-.468a36.705 36.705 0 0 0 16.76 4.622c-16.226-10.845-21.228-32.432-11.43-49.31a104.814 104.814 0 0 0 76.111 38.582a36.95 36.95 0 0 1 10.683-35.283c14.874-13.982 38.267-13.265 52.249 1.601a74.105 74.105 0 0 0 23.451-8.965a37.061 37.061 0 0 1-16.234 20.424A73.446 73.446 0 0 0 218 72.282a75.023 75.023 0 0 1-18.428 19.13"/></g></svg>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >Login</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------ LOGIN MODALITY HERE ------------------------------------------- -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="headmodal modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="contents col-9">
                            <div class="login-icon  my-3">
                                <div class="icon-circle">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="6em" height="5.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                                </div> 
                            </div>
                            <h4 class="login-title my-4">LOGIN</h4>
                            <form>
                                <div class="user-field mb-3">
                                    <label for="recipient-name">Student ID / Unique Code:</label>
                                        <input class="my-1" type="text" name="stud_id"><br>
                                    <label for="" class="mt-3">Password</label><br>
                                        <input class="my-1" type="password" name="pass"><br>
                                </div>
                                <div class="login-as mt-4 mb-5">
                                    <span>Login as : </span>
                                    <select class="p-1">
                                        <option value="Select Usertype">Select Usertype</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Student">Student</option>
                                        <option value="Librarian Staff">Librarian Staff</option>
                                    </select>
                                </div>
                                <div class="btn-submit">
                                    <a href="{{ route('dashboard') }}"><input type="button" class="mb-1" value="Submit"></span</a><br>
                                    <a href=""><span>Forgot Password?</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------------------------------------------MAIN CONTENT ------------------------------ -->

    <main>
        <section class="">        
            <div class="container-fluid mt-3 p-0 m-0">
                <div class="row justify-content-center p-0 m-0">
                    <div class="col-8 bg-white p-5 m-0">
                        <div class="d-flex justify-content-between topbooks-header mb-4">
                            <h6>Top Books</h6>
                            <h6 class="fs-normal">View all</h6>
                        </div>
                        <!-- <div class="d-flex justify-content-between gap-4 p-0 m-0">
                            <div style="width:200px;" class=" p-0 m-0 d-flex flex-column gap-0 text-center">
                                <img src="images/BSIT/book1.png" alt="" class="p-0 m-0" style="height:250px;width:100%;">
                                <div class="topbooks-body">
                                    <h6>Python Programming For Beginners</h6>
                                </div>
                                <div class="topbooks-footer">
                                    <span class="mb-3">Total Borrowed : </span>
                                    <a href="" class="">View</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="topbooks-container d-flex justify-content-between gap-4 p-0 m-0">
                        <!-- ------------ DO NOT TOUCH THIS CODE BELOW CRITICAL AREA ---------- -->
                        <div class="slider-topbooks-container d-none m-0 p-0 p-2">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card1 card p-0 m-0 d-flex flex-column gap-0 text-center border">
                                            <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                            <div class="responsive320">
                                                <div class="topbooks-body card-body">
                                                    <h6 class="card-title">Python Programming For Beginners</h6>
                                                </div>
                                                <div class="topbooks-footer card-footer bg-transparent border-0">
                                                    <span class="mb-3">Total Borrowed :</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card1 card p-0 m-0 d-flex flex-column gap-0 text-center">
                                            <img src="images/BSIT/book2.png" alt="" class="card-img-top p-0 m-0">
                                            <div class="responsive320">
                                                <div class="topbooks-body card-body">
                                                    <h6 class="card-title">Python Programming For Beginners</h6>
                                                </div>
                                                <div class="topbooks-footer card-footer bg-transparent border-0">
                                                    <span class="mb-3">Total Borrowed :</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" style="background-color:#661011;" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" style="background-color:#661011;" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                         <!-- ------------------------------------------------------------------------- -->
                            <div class="visibile-topbooks-container">
                                <div class="card1 card p-0 m-0 d-flex flex-column gap-0 text-center border-0">
                                    <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                    <div class="responsive320">
                                        <div class="topbooks-body card-body">
                                            <h6 class="card-title">Python Programming For Beginners</h6>
                                        </div>
                                        <div class="topbooks-footer card-footer bg-transparent border-0">
                                            <span class="mb-3">Total Borrowed :</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card2 card p-0 m-0 d-flex flex-column gap-0 text-center border-0">
                                    <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                    <div class="topbooks-body card-body">
                                        <h6 class="card-title">Python Programming For Beginners</h6>
                                    </div>
                                    <div class="topbooks-footer card-footer bg-transparent border-0">
                                        <span class="mb-3">Total Borrowed :</span>
                                    </div>
                                </div>
                                <div class="card3 card p-0 m-0 d-flex flex-column gap-0 text-center border-0">
                                    <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                    <div class="topbooks-body card-body">
                                        <h6 class="card-title">Python Programming For Beginners</h6>
                                    </div>
                                    <div class="topbooks-footer card-footer bg-transparent border-0">
                                        <span class="mb-3">Total Borrowed :</span>
                                    </div>
                                </div>
                                <div class="card4 card p-0 m-0 d-flex flex-column gap-0 text-center border-0">
                                    <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                    <div class="topbooks-body card-body">
                                        <h6 class="card-title">Python Programming For Beginners</h6>
                                    </div>
                                    <div class="topbooks-footer card-footer bg-transparent border-0">
                                        <span class="mb-3">Total Borrowed :</span>
                                    </div>
                                </div>
                                <div class="card5 card p-0 m-0 d-flex flex-column gap-0 text-center border-0">
                                    <img src="images/BSIT/book1.png" alt="" class="card-img-top p-0 m-0">
                                    <div class="topbooks-body card-body">
                                        <h6 class="card-title">Python Programming For Beginners</h6>
                                    </div>
                                    <div class="topbooks-footer card-footer bg-transparent border-0">
                                        <span class="mb-3">Total Borrowed :</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- --------------------- SECTION SEARCH RESULT BOX BEOW -------------- -->
        <!-- <section>
            <div class="search-result-box container-fluid mt-3 p-0" id="search-box">
                <div class="row justify-content-center align-items-center">
                    <div class=" col-10 p-0">
                        <label for="">Search Result</label>
                        <table class="table" border="1" cellpadding="10" cellspacing="5" width="100%">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>ISBN</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Level</th>
                                    <th>Edition</th>
                                    <th>Publish Year</th>
                                    <th>Quantity</th>
                                    <th>Availability</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>13,259</td>
                                    <td>978-3-16-14810-0</td>
                                    <td>HTML and CSS</td>
                                    <td>Shannon Montebon</td>
                                    <td>Computer Science</td>
                                    <td>College</td>
                                    <td>1st-Edition</td>
                                    <td>1978</td>
                                    <td>Available</td>
                                    <td>2</td>
                                    <td><button>View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- ---------------------------- BOOK AREA BELOW ----------------- -->
        <section>
        <div class="container-fluid mt-3 p-0 m-0">
            <div class="row justify-content-center p-0 m-0">
                <div class="col-8 bg-white p-5">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <div>
                                <label class="level-level me-1" for=""><b>Books</b></label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <label for="" class="me-2">Book level :</label>
                                </div>
                                <div>
                                    <select name="" id="" class="form-select">
                                        <option value="">College</option>
                                        <option value="">Senior HighSchool</option>
                                        <option value="">Junior Highschool</option>
                                        <option value="">Elementary</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------ ELECTRONICS BOOKS BELOW ------------------ -->
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 p-0 m-0">
                                <div class="d-block">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold">Electronics Engineering</h6>
                                        <a href="" class="text-decoration:none;">View All</a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------------- ELECTRICAL BOOKS BELOW ---------- -->
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 p-0 m-0">
                                <div class="d-block">
                                    <div class="d-flex justify-content-between">
                                        <label for=""><b>Electrical Engineering</b></label>
                                        <a href="">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ---------------------------------------- MECHANICAL ENGINEERING BELOW ----------------- -->
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 p-0">
                                <div class="d-block">
                                    <div class="d-flex justify-content-between">
                                        <label for=""><b>Mechanical Engineering</b></label>
                                        <a href="">View All</a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------- COMPUTER STUDIES BELOW -------------- -->
                    <div class="container-fluid mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 p-0">
                                <div class="d-block">
                                    <div class="d-flex justify-content-between">
                                        <label for=""><b>Bachelor of Science in Information Technology</b></label>
                                        <a href="">View All</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <!-- -------------------------- CAS BOOKS ---------------------- -->
                    <div class="container-fluid mt-5 p-0 m-0">
                        <div class="row d-flex justify-content-center p-0 m-0">
                            <div class="col-12 p-0 m-0">
                                <div class="d-block p-0 m-0">
                                    <div class="d-flex justify-content-between p-0 m-0">
                                        <label for=""><b>College Arts of Sciences</b></label>
                                        <a href="">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
