
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width:300px;min-width:275px;">
        <div class="modal-content bg-light w-100 px-3">
            <div class="modal-body mt-3">
                <div class="d-flex justify-content-center">
                    <svg class="rounded-circle p-4 shadow-sm" style="color:white;background-color:#661011;" xmlns="http://www.w3.org/2000/svg" width="8em" height="8em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                </div>
                <h4 class="login-title my-4 text-center text-bolder p-0 m-0" style="color:#661011;">LOGIN</h4>
                <div class="d-flex justify-content-center mx-auto">
                    <form action="{{ route('login.process') }}" class="form-group d-flex flex-column align-items-center m-0 p-0" style="width:100%; "  method="POST">
                        @csrf
                        <div class="d-flex flex-column align-items-left gap-2" style="width:100%;">
                            <label for="recipient-name" class="fs-6 text-nowrap">Unique Code</label>
                            <input class="form-control px-2 py-1 shadow-sm m-0" style="width:100%;" type="text" name="unique_id">
                            <small>Ex: 2022-003177</small>
                            @error('unique_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="d-flex flex-column align-items-left gap-2 mt-4" style="width:100%;">
                            <label for="" class="fs-6 text-nowrap">Password</label>
                                <input class="form-control py-1 px-2 m-0 shadow-sm" style="width:100%;" type="password" name="password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="d-flex flex-column align-items-left mt-3" style="width:100%;">
                            <input type="submit" class="form-control p-1 m-0 bg-success text-white" name="submit">
                            <a href="" class="mt-2 text-decoration-none" style="color:#661011;"><span>Forgot Password?</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
