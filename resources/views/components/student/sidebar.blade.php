    <button class="bg-white border-0 rounded" style="height:40px;width:40px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.4em" height="1.4em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
    </button>

    <div class="offcanvas offcanvas-start bg-white flex-nowrap" style="width:auto;" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="d-flex justify-content-between align-items-center w-100">
                <h6 class="offcanvas-title p-0 m-0" id="offcanvasExampleLabel" style="color:#661011;">SPC LIBRARY</h6>
                <button type="button" class="btn float-right bg-white shadow-sm" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#661011;" width="1.4em" height="1.4em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
                </button>
            </div>
        </div>
        <hr class="p-0 m-0">
        <div class="offcanvas-body flex-nowrap p-0 m-0 mt-3">
            <div class="d-flex flex-column gap-0 align-items-between justify-content-between h-100">
                <ul class="list-group gap-2" style="color:#661011;">
                    <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                        <a href="{{ route('spc-lms.index')}}" class="text-decoration-none text-black d-flex gap-2 w-100 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:black;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6zm2-10h4V5H5zm10 8h4v-6h-4zm0-12h4V5h-4zM5 19h4v-2H5zm4-2"/></svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                        <a href="{{ route('spc-lms.requestbooks')}}" class="text-decoration-none text-black d-flex gap-2 w-100  px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 28 28"><rect width="28" height="28" fill="none"/><path fill="currentColor" d="M8.75 2A3.75 3.75 0 0 0 5 5.75v16.5A3.75 3.75 0 0 0 8.75 26h6.65a7.5 7.5 0 0 1-1.246-1.5H8.75a2.25 2.25 0 0 1-2.236-2h6.756a7.5 7.5 0 0 1-.254-1.5H6.5V5.75A2.25 2.25 0 0 1 8.75 3.5h10.5a2.25 2.25 0 0 1 2.25 2.25v7.316q.78.106 1.5.36V5.75A3.75 3.75 0 0 0 19.25 2zm1 3.5c-.69 0-1.25.56-1.25 1.25v2.5c0 .69.56 1.25 1.25 1.25h8.5c.69 0 1.25-.56 1.25-1.25v-2.5c0-.69-.56-1.25-1.25-1.25zM10 9V7h8v2zm17 11.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0m-6-4a.5.5 0 0 0-1 0V20h-3.5a.5.5 0 0 0 0 1H20v3.5a.5.5 0 0 0 1 0V21h3.5a.5.5 0 0 0 0-1H21z"/></svg>
                        <span>Request Books</span>    
                    </a>
                    </li>
                    <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                        <a href="{{ route('spc-lms.transaction')}}" class="text-decoration-none d-flex gap-2 text-black px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M2 7h18m-4-5l5 5l-5 5m6 5H4m4-5l-5 5l5 5"/></svg>
                            <span>Transaction</span>
                        </a>
                    </li>

                    <li class="list-group-item list-group-item-action border-0 d-flex aling-items-center gap-2">
                        <a href="{{ route('spc-lms.fines')}}" class="text-decoration-none d-flex gap-2 text-black px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0M6 21v-2a4 4 0 0 1 4-4h3m8 0h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3H17m2 0v1m0-8v1"/></svg>                        
                            <span>Fines</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>