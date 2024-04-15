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