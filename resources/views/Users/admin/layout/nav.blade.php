<nav class="navbar navbar-light bg-light fixed-top flex-nowrap px-2 px-sm-5 py-3 shadow-sm">
    <div class="container-fluid">
        <div class="d-flex gap-2 gap-sm-3 align-items-center">
            <x-admin.sidebar />
            <h5 class="p-0 m-0 fw-bolder text-nowrap" style="color:#661011;">SPC LIBRARY</h5>
        </div>
        <div class="d-flex gap-2 gap-sm-4 align-items-center">
            <div class="dropdown-center">
                <button class="bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="bg-white rounded-circle d-flex justify-content-center align-items-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="p-0 m-0" style="color:#661011;" width="2em" height="2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M5 9a7 7 0 0 1 14 0v3.764l1.822 3.644A1.1 1.1 0 0 1 19.838 18h-3.964a4.002 4.002 0 0 1-7.748 0H4.162a1.1 1.1 0 0 1-.984-1.592L5 12.764zm5.268 9a2 2 0 0 0 3.464 0zM12 4a5 5 0 0 0-5 5v3.764a2 2 0 0 1-.211.894L5.619 16h12.763l-1.17-2.342a2.001 2.001 0 0 1-.212-.894V9a5 5 0 0 0-5-5"/></g></svg>
                    </div>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="totalNotification"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" id="dropdownContent" style="width:300px;">
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle p-0 m-0 rounded-circle" style="height:40px; width:40px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset(Auth::user()->role->role_description . '/' . Auth::user()->user_image ) }}" class="rounded-circle" style="height:100%;width:100%;" alt="">
                </button>
                <ul class="dropdown-menu dropdown-menu-end" >
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

<script>
    $(document).ready(function(){
        $.ajax({
            url: '{{ route('fetching-notifiaction') }}', // corrected route spelling
            type: 'GET',
            success: function(response) {
                var dropdownContent = '';
                var totalnotification = response.totalnotification;
                var data = response.data;

                $.each(data, function(index, notification){
                    if (notification.user.role.role_description === 'Student') {
                        dropdownContent += `<a href="{{ route('admin.bookrequest')}}" class="text-decoration-none">
                        <li class="dropdown-item">
                            <div class="d-flex gap-3 align-items-start">
                                <div>
                                    <img src="/${notification.user.role.role_description}/${notification.user.level}/${notification.user.user_image}" alt="user_image" style="height:40px;width:40px;" class="object-fit-fill rounded-circle" />
                                </div>
                                <div class="text-wrap">
                                    <p class="p-0 m-0"><span class="fw-bold">${notification.user.lastname}</span> requesting Book <span class="fw-bold">${notification.book.title}</span></p>
                                </div>
                            </div> 
                        </li>
                        </a>`;
                    }
                });
                if (totalnotification <= 0) {
                    $('#totalNotification').empty();
                }else {
                    $('#totalNotification').html(`<span>${totalnotification}</span>`);
                }
                
                $('#dropdownContent').html(dropdownContent);
            }
        });
    });
</script>