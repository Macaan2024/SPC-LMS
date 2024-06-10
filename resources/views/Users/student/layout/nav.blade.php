<nav class="navbar navbar-light bg-light border-bottom m-0 fixed-top flex-nowrap px-2 px-sm-5 py-3">
    <div class="container-fluid  p-0 m-0">
        <div class="d-flex gap-2 gap-sm-3 align-items-center">
            <x-student.sidebar />
            <h5 class="p-0 m-0 fw-bolder text-nowrap d-sm-block d-none" style="color:#661011;">SPC LIBRARY</h5>
        </div>
        <div class="d-flex gap-2 gap-sm-4 align-items-center">
            <button type="button" class="p-0 m-0 bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="bg-white rounded-circle d-flex justify-content-center align-items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="2em" height="2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M2 7V2h5v2H4v3zm0 15v-5h2v3h3v2zm15 0v-2h3v-3h2v5zm3-15V4h-3V2h5v5zm-2.5 10.5H19V19h-1.5zm0-3H19V16h-1.5zM16 16h1.5v1.5H16zm-1.5 1.5H16V19h-1.5zM13 16h1.5v1.5H13zm3-3h1.5v1.5H16zm-1.5 1.5H16V16h-1.5zM13 13h1.5v1.5H13zm6-8v6h-6V5zm-8 8v6H5v-6zm0-8v6H5V5zM9.5 17.5v-3h-3v3zm0-8v-3h-3v3zm8 0v-3h-3v3z"/></svg>
                </div>
            </button>
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
            {{-- Modality Qr code --}}
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle p-0 m-0 rounded-circle" style="height:43px; width:43px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(Auth::user()->role->role_description == 'Student')
                    <img src="{{ asset(Auth::user()->role->role_description . '/' . Auth::user()->level . '/' . Auth::user()->user_image) }}" class="rounded-circle m-0 p-0" style="height:100%;width:100%;" alt="">
                @else
                    <img src="{{ asset(Auth::user()->role->role_description . '/' . Auth::user()->user_image) }}" class="rounded-circle m-0 p-0" style="height:100%;width:100%;" alt="">
                @endif
                </button>
                <ul class="dropdown-menu dropdown-menu-end p-0 m-0">
                    <li><a class="dropdown-item" href="{{ route('spc-lms.profile', ['id' => Auth::user()->id])  }}">My Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('spc-lms.changepassword', ['id' => Auth::user()->id]) }}">Change Password</a></li>
                    <li>
                        <form action="{{ route('login.logout') }}" class="" method="POST">
                            @csrf
                             <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content m-auto" style="height:auto;width:256px;">
      <div class="modal-body p-1">
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{Auth::user()->unique_id}}" alt="QrCOdeImage" class="w-100 h-100">
      </div>
    </div>
  </div>
</div>



<script>
    $(document).ready(function(){
        $.ajax({
            url: '{{ route('student-notifiaction') }}', // corrected route spelling
            type: 'GET',
            success: function(response) {
                var dropdownContent = '';
                var totalnotification = response.totalnotification;
                var data = response.data;

                $.each(data, function(index, notification){
                    if (notification.user.role.role_description === 'Student') {
                        dropdownContent += `<a href="{{ route('spc-lms.requestbooks')}}" class="text-decoration-none">
                        <li class="dropdown-item">
                            <div class="d-flex gap-3 align-items-start">
                                <div>
                                    <img src="/${notification.user.role.role_description}/${notification.user.level}/${notification.user.user_image}" alt="user_image" style="height:40px;width:40px;" class="object-fit-fill rounded-circle" />
                                </div>
                                <div class="text-wrap">
                                    <p class="p-0 m-0"><span class="fw-bold">${notification.user.lastname}</span> requesting Book <span class="fw-bold">${notification.book.title}</span>has been approved</p>
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