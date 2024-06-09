<x-logbook.layout>
    <x-slot name="logbook">
        <div class="container-xxl  border border-dark-subtle" style="min-width:540px;">
            <h3 class="text-center fw-normal mt-3">SPC Library QrCode Logbook</h3>
            <div class="row mt-5">
                <div class="col-6">
                    <video  class="border border w-100 h-100" id="preview"></video>
                    <form action="{{route('spc-lms.scan')}}" id="form" method="POST">
                        @csrf
                        <input  type="hidden" name="user_id"  id="user_id">
                    </form>
                </div>
                <div class="col-6">
                    <div class="row h-100">
                        <div class="col-6">
                            <div class=" h-100 w-100 border border" style="background-color:#661011;">
                                <div class="d-flex h-100 justify-content-center align-items-center">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="text-white">Total Sign-in</h3>
                                        <h3 class="text-white">{{ $totalSignIn}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <form class="d-flex form-group p-0 m-0 mt-5" action="{{ route('admin.usermanagement')}}" method="GET">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>
            <table class="table table-responsive mt-3" style="max-height:500px;">
                <thead class="table-dark">
                    <th class="fw-normal">No</th>
                    <th class="fw-normal">Role</th>
                    <th class="fw-normal">Unique ID</th>
                    <th class="fw-normal">Name</th>
                    <th class="fw-normal">Date</th>
                    <th class="fw-normal">Time</th>
                </thead>
                <tbody>
                @php $index = 0; @endphp
                @foreach ($qrcodes as $qrCodesCollection)
                    @foreach ($qrCodesCollection as $qrCode)
                        @foreach($user as $users) 
                            @if($users->unique_id == $qrCode->user_id)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->lastname. ' '. $users->firstname}}</td>
                                    <!-- Displaying only the date part -->
                                    <td>{{ \Carbon\Carbon::parse($qrCode->created_at)->format('Y-m-d') }}</td>
                                    <!-- Displaying only the time part -->
                                    <td>{{ \Carbon\Carbon::parse($qrCode->created_at)->format('H:i:s') }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>



        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(c) {
                // document.getElementById('text').value = c;
                // setTimeout(function() {
                // document.getElementById('text').classList.remove('hidden');
                document.getElementById('user_id').value = c;
                document.getElementById('form').submit();
                // }, 2000);
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        </script>
    </x-slot>
</x-logbook.layout>