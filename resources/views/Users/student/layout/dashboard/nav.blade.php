<nav class="navbar navbar-light bg-light fixed-top flex-nowrap">
    <div class="container-fluid">
        <div class="d-flex gap-1">
            <x-student.dashboard.sidebar />
        </div>
        <div class="d-flex gap-2">
            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="height:40px;width:40px;">
                <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.4em" height="1.4em" viewBox="0 0 512 512"><rect width="512" height="512" fill="none"/><path fill="currentColor" d="M48 48h128V16H16v160h32z"/><path fill="currentColor" d="M176 176V80H80v96zm-64-64h32v32h-32Zm216-64h136v128h32V16H328z"/><path fill="currentColor" d="M432 176V80h-96v96zm-64-64h32v32h-32ZM176 464H48V336H16v160h160z"/><path fill="currentColor" d="M176 336H80v96h96zm-32 64h-32v-32h32Zm320 64H328v32h168V336h-32z"/><path fill="currentColor" d="M272 304h128v64h32v-96H272z"/><path fill="currentColor" d="M432 432v-32H240V272H80v32h128v128zM208 80h32v96h-32z"/><path fill="currentColor" d="M80 240h224V80h-32v128H80zm256-32h96v32h-96zm0 128h32v32h-32zm-64 0h32v32h-32z"/></svg>
            </div>
            <div class="bg-white rounded-circle d-flex justify-content-center align-items-center" style="height:40px;width:40px;">
                <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.4em" height="1.4em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M5 9a7 7 0 0 1 14 0v3.764l1.822 3.644A1.1 1.1 0 0 1 19.838 18h-3.964a4.002 4.002 0 0 1-7.748 0H4.162a1.1 1.1 0 0 1-.984-1.592L5 12.764zm5.268 9a2 2 0 0 0 3.464 0zM12 4a5 5 0 0 0-5 5v3.764a2 2 0 0 1-.211.894L5.619 16h12.763l-1.17-2.342a2.001 2.001 0 0 1-.212-.894V9a5 5 0 0 0-5-5"/></g></svg>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle p-0 m-0 rounded-circle" style="height:40px; width:40px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('userimage/cas.jpg') }}" class="rounded-circle" style="height:100%;width:100%;" alt="">
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
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