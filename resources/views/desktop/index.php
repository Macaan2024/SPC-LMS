<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand font-responsive" href="#">SPC LMS</a>
        <form class="d-flex col-lg-5 mb-3 mb-lg-0 justify-content-center justify-content-lg-start">
            <label for="search" class="visually-hidden font-responsive">Search</label>
            <input class="form-control me-2 rounded-pill font-responsive" type="search" placeholder="Search" aria-label="Search" id="search">
            <button class="btn btn-outline-success rounded-pill font-responsive" type="submit">Search</button>
        </form>
        <ul class="navbar-nav flex-row flex-wrap ms-lg-5 justify-content-center justify-content-lg-start">
            <li class="nav-item font-responsive">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"><path d="M0 3.71v8.585l6.004-4.293L0 3.71zm0 1.416L4.001 8 0 10.875V5.126zm8.004-.002l3.996 2.865L16 5.126v5.749l-4.004 2.875-3.992-2.864zM16 5.126L12 8 16 10.875V5.126zm-8 3.589l4 2.865 4-2.865-.005 5.748H8V8.715zm4.501.005l3.498 2.508H16v-3.99L12.501 8.72zM0 4.998h16V3.72L8 9.588 0 3.72V4.998z"/></svg>
                    macaancasan1@gmail.com
                </a>
            </li>
            <li class="nav-item font-responsive">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7.966V8.59H6.756V6.437h2.21V4.965c0-2.188 1.292-3.386 3.298-3.386.93 0 1.734.07 1.969.101v2.294h-1.347c-1.059 0-1.266.504-1.266 1.244v1.632h2.532l-.33 2.153h-2.202V16H15a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1z"/></svg>
                    CASAN MACAAN
                </a>
            </li>
            <li class="nav-item font-responsive d-none d-lg-block">
                <a class="nav-link" href="#">+639606294089</a>
            </li>
        </ul>
        <div class="ms-lg-auto">
            <button type="button" class="btn btn-primary ms-lg-5 font-responsive" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>
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
                                    <input class="mb-1" type="submit" name="submit"><br>
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
            <div class="main-container containers bg-light container-fluid">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="mid-container row justify-content-center">
                            <div class="mid-content bg-white col-12 p-3"> 
                                <div class="row justify-content-between p-3 align-items-center">
                                    <div class="col-auto p-0">
                                        <label for="">Top Books</label>
                                    </div>
                                    <div class="col-auto p-0">
                                        <span>View all</span>
                                    </div>
                                </div>
                                <div class="row mt-0 px-3 py-0 ">
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book4.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book5.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-2 custom-row p-1 ">
                                        <img src="images/topbooks/book6.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="row mt-0 custom-row px-3 font-size-1">
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>The New Art and Sciences of Teaching</p>
                                        <span>By Robert J. Marzano</span>
                                    </div>
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>Anatomy Coloring Book</p>
                                        <span>By Joe Ziemian</span>
                                    </div>
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>Build the Life you Want</p>
                                        <span>By Arthur C. Brooks & Oprah Winfrey</span>
                                    </div>
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>The New Art and Science of Teaching Writing</p>
                                        <span>By Katch Tuchman Glass & Robert J. Marzano</span>
                                    </div>
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>The Art and Science of Technical Anaylsis</p>
                                        <span>By Adam Grimes</span>
                                    </div>
                                    <div class="book-title col-2 custom-col p-0">
                                        <p>Colour Art & Science</p>
                                        <span>By Trevor Lamb & Janine Borrian</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>