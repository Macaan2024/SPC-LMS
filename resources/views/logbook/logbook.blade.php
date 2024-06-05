<x-logbook.layout>
    <x-slot name="logbook">
        <div class="container-xxl  border border-dark-subtle" style="min-width:540px;">
            <h3 class="text-center fw-normal mt-3">SPC Library QrCode Logbook</h3>
            <div class="row mt-5">
                <div class="col-6">
                    <video  class="border border w-100 h-100"></video>
                </div>
                <div class="col-6">
                    <div class="row h-100">
                        <div class="col-6">
                            <div class=" h-100 w-100 border border"></div>
                        </div>
                        <div class="col-6">
                            <div class="h-100 w-100 border border"></div>
                        </div>
                        <div class="col-12 d-flex align-items-end justify-content-end">
                            <form action="" class="d-flex gap-1">
                                <input type="date" class="form-control">
                                <input type="submit" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <form class="d-flex form-group p-0 m-0 mt-5" action="{{ route('admin.usermanagement')}}" method="GET">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>

            {{--  --}}
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
                    {{-- controller return function --}}
                </tbody>
            </table>
        </div>



        <script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(c) {
                document.getElementById('text').value = c;
                // setTimeout(function() {
                // document.getElementById('text').classList.remove('hidden');
                document.getElementById('id_student').value = c;
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