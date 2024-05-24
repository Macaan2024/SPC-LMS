<button class="bg-white border-0 rounded" style="height:40px;width:40px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.4em" height="1.4em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
</button>

<div class="offcanvas offcanvas-start bg-white flex-nowrap" style="width:400px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="offcanvasExampleLabel" style="color:#661011;">Menu</h6>
    </div>
    <hr class="p-0 m-0">
    <div class="offcanvas-body flex-nowrap p-0 m-0 mt-3">
        <div class="d-flex flex-column gap-0 align-items-between justify-content-between h-100">
            <ul class="list-group gap-2" style="color:#661011;">
                <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                    <a href="{{ route('admin.index')}}" class="text-decoration-none text-black d-flex gap-2 w-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color:black;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6zm2-10h4V5H5zm10 8h4v-6h-4zm0-12h4V5h-4zM5 19h4v-2H5zm4-2"/></svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                    <a href="{{ route('admin.logbook')}}" class="text-decoration-none text-black d-flex gap-2 w-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><path fill="currentColor" fill-rule="evenodd" d="M3.5 2.5v11h9v-11zM3 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm5 10a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 11m-2 1a1 1 0 1 0 0-2a1 1 0 0 0 0 2m2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 8M6 9a1 1 0 1 0 0-2a1 1 0 0 0 0 2m2-4a.75.75 0 0 1 .75-.75h1.75a.75.75 0 0 1 0 1.5H8.75A.75.75 0 0 1 8 5M6 6a1 1 0 1 0 0-2a1 1 0 0 0 0 2" clip-rule="evenodd"/></svg>
                        <span>Logbook Logs</span>
                    </a>
                </li>
                <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                    <a href="{{ route('admin.bookrequest')}}" class="text-decoration-none text-black d-flex gap-2 w-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><path fill="currentColor" fill-rule="evenodd" d="M5.967 6.399a2.765 2.765 0 0 0 .88-1.242L8.22 6.53a.75.75 0 1 0 1.06-1.06L8.81 5h.69A1.501 1.501 0 0 1 11 6.5v2.75a.747.747 0 0 0 .75.75a.748.748 0 0 0 .75-.75V6.5a3 3 0 0 0-3-3h-.69l.47-.47a.75.75 0 0 0-1.06-1.06L6.847 3.343A2.755 2.755 0 0 0 4.25 1.5a2.75 2.75 0 0 0-.753 5.396H3.5V7.5a.75.75 0 0 0 1.5 0v-.603c.357-.101.685-.273.967-.498m-.75 3.133a.75.75 0 0 0-.747.188h-.001l-1.75 1.75a.75.75 0 0 0 0 1.06l1.75 1.75a.75.75 0 0 0 1.061-1.06l-.47-.47h7.69a.75.75 0 0 0 0-1.5H5.06l.47-.469a.75.75 0 0 0-.313-1.249m-.43-6.41a1.25 1.25 0 1 1-1.075 2.256a1.25 1.25 0 0 1 1.076-2.257Z" clip-rule="evenodd"/></svg>                    
                        <span>Book Requests</span>
                    </a>
                </li>
                <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                    <a href="{{ route('admin.usermanagement') }}" class="text-decoration-none d-flex gap-2 align-items-center text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 2048 2048"><rect width="2048" height="2048" fill="none"/><path fill="currentColor" d="M960 1796q48 0 98-3q25 66 62 123q-40 4-80 6t-80 2q-134 0-262-22q-37-6-84-17t-96-29t-96-41t-84-55t-59-69t-23-87V452q0-45 19-80t51-66q34-34 81-60t103-45t115-33t119-21t114-11t102-4q72 0 159 8t175 27t167 54t133 85q31 29 50 66t20 80v572h-128V642q-60 37-131 62t-147 40t-152 21t-146 7q-69 0-145-6t-153-22t-147-40t-131-62v962q0 20 14 37t29 28q47 37 114 61t142 39t147 21t130 6m0-1536q-51 0-106 3t-112 12t-110 22t-101 33q-15 6-40 18t-49 29t-41 35t-17 40q0 8 3 15t8 14q22 32 63 57t92 43t108 30t113 19t104 11t85 3q35 0 84-3t105-10t112-20t109-30t91-42t64-58q5-7 8-14t3-15q0-21-17-40t-41-35t-49-28t-40-19q-47-19-101-32t-110-22t-111-12t-107-4m954 1279q6 30 6 61t-6 61l124 51l-49 119l-124-52q-35 51-86 86l52 124l-119 49l-51-124q-30 6-61 6t-61-6l-51 124l-119-49l52-124q-51-35-86-86l-124 52l-49-119l124-51q-6-30-6-61t6-61l-124-51l49-119l124 52q35-51 86-86l-52-124l119-49l51 124q30-6 61-6t61 6l51-124l119 49l-52 124q51 35 86 86l124-52l49 119zm-314 253q40 0 75-15t61-41t41-61t15-75t-15-75t-41-61t-61-41t-75-15t-75 15t-61 41t-41 61t-15 75t15 75t41 61t61 41t75 15"/></svg>
                        <span>Users Management</span>
                    </a>
                </li>
                <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                    <a href="{{ route('admin.bookmanagement')}}" class="text-decoration-none d-flex gap-2 text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><path fill="currentColor" d="M3.5 23A1.5 1.5 0 0 1 2 21.5V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v2h5a2 2 0 0 1 2 2v15H16.5a.5.5 0 0 0 0 1h13.415a1.5 1.5 0 0 1-1.415 1h-12a1.5 1.5 0 0 1-1.5-1.5V26H9.5A1.5 1.5 0 0 1 8 24.5V23zm13.415-1a1.5 1.5 0 0 1-1.415 1H22V9a1 1 0 0 0-1-1h-4v13H3.5a.5.5 0 0 0 0 1zM9 23h.5c-.175 0-.344.03-.5.085zm7-3V6a1 1 0 0 0-1-1H5v15zm0 6v1.085c.156-.055.325-.085.5-.085H29V13a1 1 0 0 0-1-1h-5v12H9.5a.5.5 0 0 0 0 1h13.415a1.5 1.5 0 0 1-1.415 1z"/></svg>
                        <span>Books Management</span>
                    </a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent border-0 d-flex aling-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><path fill="currentColor" d="M19 24h4v4h-4zm7 0h4v4h-4zm-7-7h4v4h-4zm7 0h4v4h-4z"/><path fill="currentColor" d="M17 24H4V10h24v5h2v-5a2.002 2.002 0 0 0-2-2h-6V4a2.002 2.002 0 0 0-2-2h-8a2.002 2.002 0 0 0-2 2v4H4a2.002 2.002 0 0 0-2 2v14a2.002 2.002 0 0 0 2 2h13ZM12 4h8v4h-8Z"/></svg>
                    <a>Books Inventory</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent border-0 d-flex aling-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M2 7h18m-4-5l5 5l-5 5m6 5H4m4-5l-5 5l5 5"/></svg>
                    <a class="">Transaction Management</a>
                </li>
                <li class="list-group-item list-group-item-action bg-transparent border-0 d-flex aling-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0M6 21v-2a4 4 0 0 1 4-4h3m8 0h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H17m2 0v1m0-8v1"/></svg>
                    <a>Users Fines</a>
                </li>
            </ul>
            <div class="mb-3 ms-3">
                <a href="" class="">System Settings</a>
            </div>
        </div>
    </div>
</div>