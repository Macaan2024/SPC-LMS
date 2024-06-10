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
                            @foreach ( $user as $users)
                                @php $numUsers++; @endphp
                                <tr>
                                    <td style="text-align: left; vertical-align: middle;">{{ $numUsers }}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $users->unique_id}}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $users->firstname. ' '. $users->lastname }}</td>
                                    <td style="text-align: left; vertical-align: middle;">{{ $users->role->role_description}} </td>
                                    <td></td>
                                    <td><img src="https://api.qrserver.com/v1/create-qr-code/?size=75x75&data={{$users->unique_id}}" alt=""></td>
                                    <td style="vertical-align: middle;"><a href="{{ route('usermanagement-view', ['id' => $users->id]) }}"><button class="btn btn-primary">View</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            <div style="height:auto;width:100%; overflow-y: auto; max-height:800px;" class="border border-dark-subtle mt-5 shadow shadow-md">
                <table class="table table-responsive" style="max-height:800px;">
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
        </div>
    </x-slot>
</x-admin.layout>