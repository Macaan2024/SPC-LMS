<x-admin.layout>
    <x-slot name="book_request">
        <div class="container-xxl mt-5 p-0 p-0" stlye="min-width:720px;">
            <div class="d-flex gap-5 justify-content-center" style="min-width:720px;">
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Approved Request</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $approved }}</h6>
                    </div>
                    <div class="bg-success shadow rounded-circle d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M19.495 3.133a1 1 0 0 1 1.352.309l.99 1.51a1 1 0 0 1-.155 1.279l-.003.004l-.014.013l-.057.053l-.225.215a83.86 83.86 0 0 0-3.62 3.736c-2.197 2.416-4.806 5.578-6.562 8.646c-.49.856-1.687 1.04-2.397.301l-6.485-6.738a1 1 0 0 1 .051-1.436l1.96-1.768A1 1 0 0 1 5.6 9.2l3.309 2.481c5.169-5.097 8.1-7.053 10.586-8.548"/></g></svg>
                    </div>
                </div>
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Pending Request</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $pending }}</h6>
                    </div>
                    <div class="bg-primary rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 640 512"><rect width="640" height="512" fill="none"/><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144s144-64.4 144-144s-64.4-144-144-144m64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7zM320 368c0-27.8 6.7-54.1 18.2-77.5c-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144m-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128"/></svg>
                    </div>
                </div>
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="width:250px;height:110px;min-width:220px;">
                    <div class="d-flex flex-column">
                        <small class="p-0 m-0 text-white">Declined Request</small>
                        <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $declined }}</h6>
                    </div>
                    <div class="bg-danger rounded-circle shadow d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="25px" height="25px" viewBox="0 0 640 512"><rect width="640" height="512" fill="none"/><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144s144-64.4 144-144s-64.4-144-144-144m64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7zM320 368c0-27.8 6.7-54.1 18.2-77.5c-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144m-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128"/></svg>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="min-width:720px;">
                <table class="table table-responsive mt-5 shadow" align="center" style="min-width:730px;">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Book Title</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendingRequest as $pending)
                            @if($pending->status == 'pending')
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pending->user->firstname . ' ' . $pending->user->lastname}}</td>
                                    <td>{{ $pending->book->title}}</td>
                                    <td>{{ $pending->status }}</td>
                                    <td>{{ $pending->created_at }}</td>
                                    <td class="d-flex gap-2">
                                        <form action="{{ route('approve.request', ['id' => $pending->id])}}" method="POST">
                                            @csrf
                                            <button type="submit"  class="btn btn-success">Approve</button>
                                        </form>
                                        <form action="{{ route('decline.request', ['id' => $pending->id])}}" method="POST">  
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Decline</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        

    </x-slot>
</x-admin.layout>