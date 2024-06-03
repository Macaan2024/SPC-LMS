<nav class="navbar navbar-light bg-light fixed-top flex-nowrap px-2 px-sm-5 py-3 shadow-sm">
    <div class="container-fluid">
        <div class="d-flex gap-2 gap-sm-3 align-items-center">
            <x-admin.sidebar />
            <h5 class="p-0 m-0 fw-bolder text-nowrap" style="color:#661011;">SPC LIBRARY</h5>
        </div>
        <div class="d-flex gap-2 gap-sm-4 align-items-center">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle p-0 m-0 rounded-circle" style="height:40px; width:40px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset(Auth::user()->role->role_description . '/' . Auth::user()->user_image ) }}" class="rounded-circle" style="height:100%;width:100%;" alt="">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.profile', ['id' => Auth::user()->id])}}">My Profile</a></li>
                    <li>
                        <a href="{{ route('admin.changepassword', ['id' => Auth::user()->id])}}" class="dropdown-item text-decoration-none">Change Password</a>
                    </li>
                    <li>
                        <form action="{{ route('login.logout') }}" method="POST">
                            @csrf
                             <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>