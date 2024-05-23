<x-admin.layout>
    <x-slot name="qr_code">
        <div class="container-fluid m-0 p-0">
            <div class="px-3 d-flex align-items-start justify-content-center gap-3">
                <div style="height:auto;width:100%; overflow-y: auto; max-height:800px;" class="border border-dark-subtle mt-5 shadow shadow-md">
                    <table class="table table-responsive border border-dark-subtle shadow shadow-md p-0 m-0" cellpadding="0" cellspacing="0" border="0">
                        <thead class="table-dark border-1" style="">
                            <tr>
                                <th colspan="7" class="text-center py-3 fs-6">Users Qrcode List</th>
                            </tr>
                        </thead>
                        <thead class="table-light">
                            <tr>
                                <th class="text-nowrap bg-light">No</th>
                                <th class="text-nowrap">Unique ID</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Role</th>
                                <th class="text-nowrap">Last Sign in</th>
                                <th class="text-nowrap">Qrcode</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $numUsers = 0; @endphp
                            @foreach ( $users as $user)
                                @php $numUsers++; @endphp
                                <tr>
                                    <td style="text-align: left; vertical-align: middle;">{{ $numUsers }}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $user->unique_id}}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $user->firstname. ' '. $user->lastname }}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $user->role->role_description}} </td>
                                    <td></td>
                                    <td><img src="https://api.qrserver.com/v1/create-qr-code/?size=75x75&data={{$user->unique_id}}" alt=""></td>
                                    <td style="vertical-align: middle;"><a href="{{ route('view', ['id' => $user->id]) }}"><button class="btn btn-primary">View</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            <div style="height:auto;width:100%; overflow-y: auto; max-height:800px;" class="border border-dark-subtle mt-5 shadow shadow-md">
                <table class="table table-responsive p-0 m-0" cellpadding="0" cellspacing="0" border="0">
                    <thead class="table-dark border-1" style="">
                        <tr>
                            <th colspan="4" class="text-center py-3 fs-6">Logbook Logs</th>
                        </tr>
                    </thead>
                    <thead class="table-light">
                        <tr>
                            <th class="text-nowrap">No</th>
                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Day</th>
                            <th class="text-nowrap">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $numUsers = 0; @endphp
                        @foreach ( $users as $user)
                            @php $numUsers++; @endphp
                            <tr>
                                <td style="text-align: left; vertical-align: middle;">{{ $numUsers }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-slot>
</x-admin.layout>